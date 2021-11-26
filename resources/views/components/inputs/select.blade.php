@props([
  'items' => [],
  'multiple' => false,
  'searchable' => false,
  'size' => 'sm'
])

<select {{ $attributes->merge(['class' => 'form-select']) }} data-ui="{{ $size }}" {{ $searchable ? 'data-search=on' : '' }} {{ $multiple ? 'multiple' : '' }}>
  @foreach ($items as $item)
    <option value="{{ $item->id }}">{{ strtoupper($item->name) }}</option>
  @endforeach
</select>
