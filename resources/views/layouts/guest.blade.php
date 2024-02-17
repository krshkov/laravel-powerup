<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-param" content="authenticity_token"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @yield('meta')

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>{{ config('app.name', 'Laravel Tailer') }}</title>
</head>
<body>
<div id="app">
    <main>
        @yield('content')
    </main>
</div>

@yield('javascript')
</body>
</html>
