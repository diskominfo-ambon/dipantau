<template>
  <input type="text" :name="name" autocomplete="off" autofocus placeholder="Contoh: Pemantuan lokasi ...." :class="`form-control form-control-lg ${large && 'form-control-number'}`">
</template>

<script setup>
defineProps({
  large: Boolean,
  modelValue: String
});
</script>
