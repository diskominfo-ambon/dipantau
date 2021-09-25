import { defineComponent, h } from 'vue';

export default defineComponent({
  props: {
    action: {
      type: String,
      required: String
    },
    method: {
      default: 'post',
      type: String
    }
  },
  render() {
    const slot = this.$slots;

    return h('div', slot);
  }
});
