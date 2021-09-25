import { defineComponent, h } from "vue";

export default defineComponent({
  props: {
    for: String,
    text: String,
  },
  render() {
    const { for, text } = this.$props;

    return h('div', {class: 'form-label-group'}, h('label', {class: 'form-label'}, text));
  }
});
