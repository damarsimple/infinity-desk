<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('user.meta')
    <title>@yield('title') | Dashboard User</title>

    <link rel="shortcut icon" href="frontend/images/favicon.ico">

    @stack('before-style')
    @include('user.style')
    @stack('after-style')
</head>
<body>
    @include('user.navbar')
    @include('user.sidebar')
        @yield('content')
    @include('user.footer')

    @stack('before-script')
    @include('user.script')
    @stack('after-script')
</body>
</html>