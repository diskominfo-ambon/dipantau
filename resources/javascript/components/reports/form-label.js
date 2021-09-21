import { defineComponent } from "vue";

export default defineComponent({
  props: {
    for: String,
    text: String,
  },
  render(h) {
    const { for, text } = this.props;

    return h(() => h('div', {class: 'form-label-group'}, h('label', {class: 'form-label'}, text)));
  }
});
