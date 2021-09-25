import { defineComponent, h } from "vue";

export default defineComponent({
  render() {
    const slot = this.$slots.default();

    return h('li', { class: 'list-group-item' }, slot);
  }
});
