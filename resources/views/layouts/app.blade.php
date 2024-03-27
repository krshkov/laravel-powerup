<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(isset(auth()->user()->id) && auth()->user()->dark_mode) class="dark" @endif>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App's Name -->
    <meta name="app.name" content="{{ config('app.name') }}"/>
    <meta name="app.url" content="{{ config('app.url') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-param" content="authenticity_token"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @yield('meta')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
          rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset("logo.svg") }}">

    <title>{{ config('app.name', 'Laravel Tailer') }}</title>
</head>
<body>
<div id="app">
    @include('includes.navbar')

    <main class="_container">
        @yield('content')
    </main>
</div>

<div class="smoked-screen">
    <span class="loader"></span>
</div>

@include('includes.alerts')
@include('includes.modals')

@yield('javascript')
</body>
</html>
