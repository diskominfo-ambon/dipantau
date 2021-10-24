@props([
  'value' => '',
  'label' => '',
  'name' => ''
])
<div class="custom-control custom-checkbox">
  <input id="{{ $value }}" class="custom-control-input" type="checkbox" name="{{ $name }}" value="{{ $value }}"/>
  <label class="custom-control-label" for="{{ $value }}">{{ $label }}</label>
</div>





