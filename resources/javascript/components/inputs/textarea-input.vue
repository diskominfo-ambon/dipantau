<template>
  <textarea
    @input="handleOnInput"
    :placeholder="placeholder"
    :name="name"
    :id="name"
    required
    autofocus
    autocomplete="off"
    class="`form-control form-control-lg ${large && 'form-control-number'}`">
  </textarea>


</template>

<script setup>
const props = defineProps({
  autoresize: Boolean,
  name: String,
  placeholder: String,
  large: Boolean
});


function handleOnInput(e) {
  // if this component set auto-resize.
  const { target } = e;
  if (props.autoresize) {
    resolveResize(target);
  }
}

function resolveResize(el) {
  el.setAttribute('height', 'auto');
  el.setAttribute('height', `${el.scrollHeight}px !important;`);
}


defineExpose({
  handleOnInput
});
</script>
