import { defineComponent, h, computed } from 'vue';

export default defineComponent({
  name: 'SelectInput',
  props: {
    search: {
      type: Boolean,
      default: false
    },
    options: Array
  },
  setup() {},
  render() {
    const {
      search,
      value,
      options
    } = this;

    return h(
      'div',
      {
        class: [
          {
            'form__select-input-searchable': search
          },
          'form__select-input'
        ]
      }
    )
  }
});
