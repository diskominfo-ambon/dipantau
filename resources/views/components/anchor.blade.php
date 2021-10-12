@props([
  'icon' => '', // empty icon.
  'text' => '',
  'to'
])

<a href="{{ $to ?? '#' }}" class="nk-menu-link">
  @if ( str($icon)->isNotEmpty() )
    <span class="nk-menu-icon"><em class="icon ni {{ $icon }}"></em></span>
  @endif

  @if (str($text)->isNotEmpty())
  <span class="nk-menu-text">{{ $text }}</span>
  @endif
</a>
