<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="dipantau">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <!-- Page Title  -->
    <title>@yield('title', 'Dashboard')</title>
    <!-- StyleSheets  -->
    <link rel="prefetch" href="{{ asset('vendor/dashlite/css/dashlite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dashlite/css/dashlite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    @yield('head')
    @livewireStyles

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
                            @yield('breadcrumb')

                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- content -->

                <x-footer/>
            </div>
            <!-- wrap -->
        </div>
        <!-- main -->
    </div>
    <!-- app-root -->
    <!-- JavaScript -->
    @livewireScripts
    <script src="{{ asset('vendor/dashlite/js/bundle.js') }}"></script>
    <script src="{{ asset('vendor/dashlite/js/scripts.js') }}"></script>
    @yield('script')
</body>

</html>

