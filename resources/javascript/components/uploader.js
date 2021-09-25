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
    const slot = this.$slots;

    return h('div', slot);
  }
});
