<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.meta')
    <title>@yield('title') | Dashboard Admin</title>

    <link rel="shortcut icon" href="/images/favicon.ico">

    @stack('before-style')
    @include('admin.style')
    @stack('after-style')
</head>
<body>
    @include('admin.navbar')
    @include('admin.sidebar')
        @yield('content')
    @include('admin.footer')

    @stack('before-script')
    @include('admin.script')
    @stack('after-script')
</body>
</html>