<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="{{ csrf_token() }}" name="csrf-token">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta content="{{ $description ?? config('app.name') }}" name="description">
        <meta content="{{ $keywords ?? config('app.name') }}" name="keywords" />

        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style">
        <meta content="#000000" name="theme-color">

        <!-- Styles -->
        {{-- @vite('resources/css/app.css') --}}

        <link href="{{ asset('assets/guest') }}/img/favicon.png" rel="icon" sizes="32x32" type="image/png">
        <link href="{{ asset('assets/guest') }}/img/icon/192x192.png" rel="apple-touch-icon" sizes="180x180">
        <link href="{{ asset('assets/guest') }}/css/style.css" rel="stylesheet">
        <link href="{{ asset('manifest.json') }}" rel="manifest">

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>

    <body>
        {{-- <x-themes.guest.loader /> --}}

        <x-themes.guest.header class="no-border transparent position-absolute" />

        {{ $slot }}

        <!-- Bootstrap -->
        <script src="{{ asset('assets/guest') }}/js/lib/bootstrap.bundle.min.js"></script>
        <!-- Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- Splide -->
        <script src="{{ asset('assets/guest') }}/js/plugins/splide/splide.min.js"></script>
        <!-- Base Js File -->
        {{-- <script src="{{ asset('assets/guest') }}/js/base.js"></script> --}}
    </body>

</html>
