<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('components.layouts.app.partials.head')
    </head>

    <body>
        <x-layouts.partials.loader />

        {{ $slot }}

        @auth
            <x-themes.app.bottom-menu />
            <x-themes.app.sidebar />
        @endauth
        <x-themes.app.add-to-home-screen />
        <x-themes.app.cookies />

        @include('components.layouts.app.partials.foot')
    </body>

</html>
