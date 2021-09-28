import { defineComponent, h, computed } from 'vue';

export default defineComponent({
  props: {
    large: Boolean,
    name: {
      type: String,
      required: true
    },
    placeholder: {
      type: String,
      default: ''
    },
    modelValue: String
  },
  setup(props, {emit}) {

    let localValue = computed({
      set(newValue) {
        console.log(newValue);
        emit('update:modelValue', newValue);
      },
      get() {
        return props.modelValue;
      }
    });


    const handleInput = ({ target }) => {
      localValue = target.value;
    };


    return {
      localValue,
      handleInput
    };
  },

  render() {
    const {
      localValue,
      name,
      large,
      placeholder,
      handleInput
    } = this;

    return h(
      'input',
      {
        class: [
          {
            'form-control-number': large
          },
          'form-control',
          'form-control-lg'
        ],
        autocomplete: 'off',
        autofocus: true,
        id: `id_input_${name}`,
        onInput: handleInput,
        value: localValue,
        placeholder,
        name,
      }
    );
  }


});
