<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="{{ csrf_token() }}" name="csrf-token">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta content="{{ $description ?? config('app.name') }}" name="description">
        <meta content="{{ $keywords ?? config('app.name') }}" name="keywords" />

        <!-- Favicons -->
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('icons') }}/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
        <link href="{{ asset('icons') }}/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
        <link href="{{ asset('icons') }}/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="{{ asset('icons') }}/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
        <link href="{{ asset('icons') }}/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="{{ asset('icons') }}/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
        <link href="{{ asset('icons') }}/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
        <link href="{{ asset('icons') }}/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
        <link href="{{ asset('icons') }}/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
        <link href="{{ asset('icons') }}/android-icon-192x192.png" rel="icon" sizes="192x192" type="image/png">
        <link href="{{ asset('icons') }}/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
        <link href="{{ asset('icons') }}/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
        <link href="{{ asset('icons') }}/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
        <link href="{{ asset('manifest.json') }}" rel="manifest">
        <meta content="#000000" name="msapplication-TileColor">
        <meta content="{{ asset('icons') }}/ms-icon-144x144.png" name="msapplication-TileImage">

        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style">
        <meta content="#000000" name="theme-color">

        <!-- Styles -->
        {{-- @vite('resources/css/app.css') --}}

        <link href="{{ asset('assets/guest') }}/css/style.css" rel="stylesheet">

        @stack('css')

        <!-- Scripts -->
        @vite('resources/js/app.js')

        @stack('js.head')
    </head>

    <body>
        {{-- <x-themes.app.loader /> --}}

        <x-themes.app.header class="bg-primary text-light">
            @slot('page_title')
                {{-- <img alt="logo" class="logo" src="{{ asset('assets/guest') }}/img/logo.png"> --}}
                {{ config('app.name') }}
            @endslot

            @slot('right')
                <a class="headerButton" href="#">
                    <ion-icon class="icon" name="notifications-outline"></ion-icon>
                    <span class="badge badge-danger">4</span>
                </a>
                <a class="headerButton" href="#">
                    <img alt="image" class="imaged w32" src="{{ asset('assets/guest') }}/img/sample/avatar/avatar1.jpg">
                    <span class="badge badge-danger">6</span>
                </a>
            @endslot
        </x-themes.app.header>

        {{ $slot }}

        <x-themes.app.bottom-menu />
        <x-themes.app.sidebar />
        <x-themes.app.add-to-home-screen />
        <x-themes.app.cookies />

        <!-- Modals -->
        @stack('modals')

        <!-- Scripts  -->
        @stack('js')

        <script src="{{ asset('assets/guest') }}/js/lib/bootstrap.bundle.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="{{ asset('assets/guest') }}/js/plugins/splide/splide.min.js"></script>

        <script src="{{ asset('assets/guest') }}/js/base.js"></script>

        <script>
            // Add to Home with 2 seconds delay.
            AddtoHome("2000", "once");
        </script>
    </body>

</html>
