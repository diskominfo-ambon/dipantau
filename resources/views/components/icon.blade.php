@props([
  'name' => ''
])
<em {{ $attributes->merge(['class' => 'icon ni ni-'.$name]) }}></em>
