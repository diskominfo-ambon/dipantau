<template>
  <h1>Report fields</h1>
</template>

<script>
import { defineComponent } from 'vue';
import TextareaInput from '~/components/inputs/textarea-input';
import TextInput from '~/components/inputs/text-input';

export default defineComponent({
  props: {
    submitText: String,
    modelValue: Object
  },
  components: {
    TextareaInput,
    TextInput
  },
  setup() {}
});
</script>
