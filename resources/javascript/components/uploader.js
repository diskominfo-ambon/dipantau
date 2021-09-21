import { defineComponent } from 'vue';

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
  render(h) {
    const children = this.$slots;

    return h('div', children);
  }
});
