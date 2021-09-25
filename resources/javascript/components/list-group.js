import { defineComponent, h } from "vue";

export default {
  render() {
    const slot = this.$slots.default();

    return  h('ul', { class: 'list-group list-group-flush' }, slot);
  }
}
