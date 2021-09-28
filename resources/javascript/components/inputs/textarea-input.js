import { defineComponent, h, computed } from 'vue';
import { autoResizeInput } from '~/utils/input';

export default defineComponent({
  name: 'TextareaInput',
  props: {
    autoresize: Boolean,
    name: String,
    placeholder: String,
    large: Boolean,
    modelValue: String,
  },
  setup(props, {emit}) {

    let localValue = computed({
      set(value) {
        emit('update:modelValue', value);
      },
      get() {
        return props.modelValue;
      }
    });
    const handleInput = ({ target: { value } }) => {

      // mengatur ukuran input bedasarkan tinggi bidang.
      if (props.autoresize) {
        autoResizeInput(target);
      }

      localValue = value;

    };


    return {
      handleInput,
      localValue
    }
  },

  render() {
    const {
      large,
      placeholder,
      name,
      localValue,
      handleInput
    } = this;


    return h(
      'textarea',
      {
        class: [
          {
            'form-control-numbe': large
          },
          'form-control',
          'form-control-lg'
        ],
        required: true,
        id: `id_textarea_${name}`,
        onInput: handleInput,
        value: localValue,
        name
      }
    )
  }
});
