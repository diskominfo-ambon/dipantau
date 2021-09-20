<template>
     <input type="text" :name="name" autocomplete="off" autofocus required placeholder="Contoh: Pemantuan lokasi ...." :class="`form-control form-control-lg ${lg && 'form-control-number'}`">
</template>

<script setup>
defineProps({
    lg: Boolean,
    modelValue: String
});


</script>
