@props([
  'icon' => '', // empty icon.
  'text',
  'to'
])

<a href="{{ $to ?? '#' }}" class="nk-menu-link">
  @if ( str($icon)->isNotEmpty() )
    <span class="nk-menu-icon"><em class="icon ni {{ $icon }}"></em></span>
  @endif

  <span class="nk-menu-text">{{ $text }}</span>
</a>
