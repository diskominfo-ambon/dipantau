@props([
  'label' => ''
])

<div class="form-group mb-5">
  <div class="form-label-group mb-1">
    <label class="form-label" for="title">{{ $label }}</label>
  </div>
  {{ $slot }}
</div>
