<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.meta')
    <title>@yield('title') | Landing Page</title>

    <link rel="shortcut icon" href="images/favicon.ico">

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>
<body>
    @include('includes.navbar')
        @yield('content')
    @include('includes.footer')

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>