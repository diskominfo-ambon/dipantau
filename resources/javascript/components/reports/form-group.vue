<template>
<div class="buysell-field form-group">
  <slot></slot>

  <div class="form-note-group" v-if="hasHintText">
    <span class="form-note-alt">
      {{ hint }}
    </span>
  </div>
</div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
  hint: String,
});

const hasHintText = computed(() => props.hint.trim().length > 0);


defineExpose({
  hasHintText
});

</script>
