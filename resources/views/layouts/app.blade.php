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

        <!-- Favicons -->
        <link href="{{ asset('assets/guest') }}/img/favicon.png" rel="icon" sizes="32x32" type="image/png">
        <link href="{{ asset('assets/guest') }}/img/icon/192x192.png" rel="apple-touch-icon" sizes="180x180">

        <link href="{{ asset('assets/guest') }}/css/style.css" rel="stylesheet">
        <link href="{{ asset('') }}/manifest.json" rel="manifest">

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>

    <body>
        {{-- <x-themes.guest.loader /> --}}

        <x-themes.guest.header class="bg-primary text-light">
            @slot('page_title')
                <img alt="logo" class="logo" src="{{ asset('assets/guest') }}/img/logo.png">
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
        </x-themes.guest.header>

        {{ $slot }}

        <x-themes.app.bottom-menu />

        {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow dark:bg-gray-800">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}

        <!-- ========= JS Files =========  -->
        <!-- Bootstrap -->
        <script src="{{ asset('assets/guest') }}/js/lib/bootstrap.bundle.min.js"></script>
        <!-- Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- Splide -->
        <script src="{{ asset('assets/guest') }}/js/plugins/splide/splide.min.js"></script>
        <!-- Base Js File -->
        {{-- <script src="{{ asset('assets/guest') }}/js/base.js"></script> --}}

        <script>
            // Add to Home with 2 seconds delay.
            AddtoHome("2000", "once");
        </script>
    </body>

</html>
