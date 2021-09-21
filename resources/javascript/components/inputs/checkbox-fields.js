import { defineComponent } from "vue";

export default defineComponent({
    props: {
        modelValue: String,
        initialName: String,
    },
    render(h) {
        console.log(this.$slots);


        return h('div', 'checkbox fields');
    }
});
