<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="dipantau">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Page Title  -->
  <title>@yield('title', 'Dashboard')</title>
  <!-- StyleSheets  -->
  <link rel="prefetch" href="{{ asset('vendor/dashlite/css/dashlite.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/dashlite/css/dashlite.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

  @yield('head')
  @stack('head')


</head>
<body class="nk-body bg-white has-sidebar">
  <div class="nk-app-root">
    <!-- main -->
    <div class="nk-main ">
      <x-sidebar/>
      <!-- wrap -->
      <div class="nk-wrap ">
        <x-header />
        <!-- content -->
        <div class="nk-content nk-content-fluid">
          <div class="container-xl wide-lg">
            <div class="nk-content-body">
              @if (session('message'))
              <div class="alert alert-icon alert-primary alert-dismissible" role="alert">
                <em class="icon ni ni-check-circle"></em>
                {{ session('message') }}
                <button class="close" data-dismiss="alert"></button>
              </div>
              @endif
              @yield('breadcrumb')

              @yield('content')
            </div>
          </div>
        </div>
        <!-- content -->


      </div>
      <!-- wrap -->
    </div>
    <!-- main -->
  </div>
  <!-- app-root -->
  <!-- JavaScript -->
  {{-- @livewireScripts --}}
  <script src="{{ asset('vendor/dashlite/js/bundle.js') }}"></script>
  <script src="{{ asset('vendor/dashlite/js/scripts.js') }}"></script>
  @yield('script')
  @stack('scripts')
</body>

</html>

