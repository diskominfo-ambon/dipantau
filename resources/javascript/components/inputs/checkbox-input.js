import { defineComponent, h } from 'vue';

export default defineComponent({
  props: [
    'labelText',
    'name',
    'modelValue',
    'value'
  ],
  inject: ['group'],
  computed: {
    isChecked() {
      return this.isInsideGroup
        ? this.group.localValue.indexOf(this.value) >= 0
        : this.value == this.localValue;
    },
    isInsideGroup() {
      return !!this.group;
    },
    localValue: {
      set(value) {
        if (this.isInsideGroup) {
          this.group.localValue = value;
        }else {
          this.$emit('update:modelValue', value);
        }
      },
      get() {
        return this.isInsideGroup ? this.group.localValue : this.localValue;
      }
    },
  },
  render() {
    const {
      name,
      localValue,
      value,
      labelText,
      isChecked,
      handleChange
    } = this;

    const $label = h(
      'label',
      {
        class: [
          'custom-control-label'
        ],
        for: `id_checkbox_${name}`
      },
      labelText
    );

    const $input = h(
      'input',
      {
        class: [
          'custom-control-input'
        ],
        id: `id_checkbox_${name}`,
        checked: isChecked,
        type: 'checkbox',
        onChange: () => this.localValue = value,
        key: `key_checkbox_${name}`,
        value,
        name
      }
    )

    return h(
      'div',
      {
        class: [
          'custom-control',
          'custom-checkbox'
        ],
      },
      [$input, $label]
    );
  }
});

