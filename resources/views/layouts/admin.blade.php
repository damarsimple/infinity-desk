<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.meta')
    <title>@yield('title') | Landing Page</title>

    <link rel="shortcut icon" href="/images/favicon.ico">

    @stack('before-style')
    @include('admin.style')
    @stack('after-style')
</head>
<body>
    @include('admin.navbar')
    @include('admin.navbar')
        @yield('content')
    @include('admin.footer')

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>