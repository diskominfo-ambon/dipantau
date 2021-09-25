import { defineComponent, h } from "vue";

export default defineComponent({
    props: {
        modelValue: String,
        initialName: String,
    },
    render() {
        console.log(this.$slots);


        return h('div', 'checkbox fields');
    }
});
