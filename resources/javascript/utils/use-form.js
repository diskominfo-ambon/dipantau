import { reactive, computed } from 'vue';
import { cloneDeep, curry } from 'lodash';
import axios from 'axios';


export default function useForm(body) {
  const defaults = cloneDeep(body);
  const form = reactive({
    ...body,
    isSubmiting: false,
    errors: [],
    hasError: computed(
      () => Object.assign(
        {},
        Object
          .keys(form.errors)
          .map(error => ({ [error]: true }))
      )
    ),
    hasErrors: computed(() => form.errors.length > 0 ),
    data() {
      return Object.assign(
        {},
        Object
          .keys(form)
          .filter(key => key in body)
          .reduce((curry, key) => {
            curry[key] = form[key];
            return curry;
          }, {})
      );
    },
    clearErrors() {
      form.errors = [];
      return this;
    },
    reset() {
      Object.assign(form, cloneDeep(defaults));

      return this;
    },
    submit(method, options) {
      const data = form.data();

      options?.onStart(); // trigger on start before form submiting.
      this.isSubmiting = true;

      axios({
        data,
        method,
        uri: options?.uri,
        headers: options?.headers
      })
        .then(res => {
          form.clearErrors();
          return res;
        })
        .catch(res => {
          form.errors = res.response.errors;
          return res;
        })
        .finally(() => {
          form.isSubmiting = false;
        });
    }
  });

  return form;
}
