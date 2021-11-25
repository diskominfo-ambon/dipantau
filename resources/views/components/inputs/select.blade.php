@props([
  'items' => [],
  'multiple' => false,
  'searchable' => false,
  'size' => 'sm'
])

<select {{ $attributes->merge(['class' => 'form-select']) }} data-ui="{{ $size }}" {{ $searchable ? 'data-search=on' : '' }} {{ $multiple ? 'multiple' : '' }}>
  <option value="halo">Halo</option>
  <option value="halo-dunia">Halo Dunia</option>
</select>
