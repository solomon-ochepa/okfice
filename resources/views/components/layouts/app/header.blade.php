<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('components.layouts.app.partials.head')
    </head>

    <body>
        {{-- header --}}
        {{-- no sidebar --}}
        {{ $slot }}
    </body>

</html>
