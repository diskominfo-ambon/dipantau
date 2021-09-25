import { reactive, computed } from 'vue';
import { cloneDeep } from 'lodash';
import axios from 'axios';


export function useForm(body) {
  const defaults = cloneDeep(body);
  const form = reactive({
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
      return Object.assign({}, body);
    },
    clearErrors() {
      this.errors = [];
    },
    reset() {
      Object.assign(
        this,
        Object
          .keys(defaults)
          .filter(key => defaults.includes(key))
          .reduce((carry, key) => {
            carry[key] = defaults[key];
            return carry;
          }, {})
      );

      return this;
    },
    submit(method, options) {
      const data = this.data();

      options?.onStart(); // trigger on start before form submiting.
      this.isSubmiting = true;

      axios({
        data,
        method,
        uri: options?.uri,
        headers: options?.headers
      })
        .then(res => {
          this.clearErrors();
          return res;
        })
        .catch(res => {
          this.errors = res.response.errors;
          return res;
        })
        .finally(() => {
          this.isSubmiting = false;
        });
    }
  });

  return form;
}
