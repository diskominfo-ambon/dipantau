<template>
  <div class="custom-control custom-checkbox">
    <input :id="name" :checked="isChecked" :name="name" type="checkbox"  class="custom-control-input" v-model="computedLocalChecked" :value="value"/>
    <label :for="name" class="custom-control-label">{{ labelText }}</label>
  </div>
</template>
<script>


import { defineComponent, h } from 'vue';

export default defineComponent({
  props: {
    labelText: {
      required: true,
      type: String
    },
    name: {
      required: true,
      type: String
    },
    value: String,
    modelValue: String,
  },
  inject: ['group'],
  computed: {
    isChecked() {
      return this.value == this.computedLocalChecked;
    },
    computedLocalChecked: {
      set(value) {
        if (this.isGroup) {
          this.group.$emit('update:modelValue', value);
        } else {
          this.$emit('update:modelValue', value);
        }
      },
      get() {
        return this.isGroup
          ? this.group.modelValue
          : this.modelValue;
      }
    },
    isGroup() {
      // melakukan pengecekan apakah field input checkbox
      // merupakan input gabungan grup?.
      return !!this.group;
    }
  }
});
</script>
