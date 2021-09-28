import { defineComponent, h } from "vue";

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
