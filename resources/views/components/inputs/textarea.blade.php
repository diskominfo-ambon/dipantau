<textarea {{ $attributes->merge(['class' => 'form-control tinymce-toolbar']) }}></textarea>


@push('head')
<link rel="stylesheet" href="{{ asset('vendor/dashlite/css/editors/tinymce.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('vendor/dashlite/js/libs/editors/tinymce.js?ver=2.2.0') }}"></script>
<script>
  NioApp.Tinymce = function () {
    tinymce.init({
      selector: '.tinymce-toolbar',
      content_css: true,
      skin: false,
      branding: false,
      menubar: false
    });
  }

  NioApp.Tinymce();
</script>
@endpush
