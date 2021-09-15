<!doctype html>
<html>
<head>
    <title>@yield('title')</title>

    @yield('head')
    @livewireStyles

</head>

<body>
    @yield('content')


    @livewireScripts
    @yield('script')
</body>
</html>