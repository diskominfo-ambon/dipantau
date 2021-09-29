import { defineComponent, h } from "vue";
import { cloneDeep } from "lodash";

export default defineComponent({
  props: {
    modelValue: String,
  },
  provide() {
    return {
      // mengembalikan informasi refensi instance grup untuk memberikan akses anak
      // terhadap nilai saat ini.
      group: this
    }
  },
  computed: {
    localValue: {
      set(currValue) {
        const newValue = cloneDeep(this.modelValue);
        const index = newValue.indexOf(currValue);

        if (index >= 0) {
          newValue.splice(index, 1);
        }

        if (index  == -1) {
          newValue.push(currValue);
        }

        this.$emit('update:modelValue', newValue);
      },
      get() {
        return this.modelValue
      }
    }
  },
  render() {
    const slot = this.$slots.default();

    return h('div', {
      class: [
        'd-flex',
        'align-items-center',
        'w-100',
        'checkbox-group'
      ]
    }, slot);
  }
});
