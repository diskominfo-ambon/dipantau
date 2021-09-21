<template>
  <div>
    <input class="buysell-pm-control" type="checkbox" :value="value" :name="name" :id="name" />
    <label class="buysell-pm-label" :for="name">
      <span class="pm-name">{{ label }}</span>
    </label>
  </div>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
  props: {
    label: {
      required: true,
      type: String
    },
    name: {
      required: true,
      type: String
    },
    value: String,
  },
  setup() {

  },
})
</script>

