<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('components.layouts.auth.partials.head')
    </head>

    <body>
        <x-layouts.partials.loader />

        {{ $slot }}

        @include('components.layouts.auth.partials.foot')
    </body>

</html>
