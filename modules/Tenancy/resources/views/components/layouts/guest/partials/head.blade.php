<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="{{ csrf_token() }}" name="csrf-token">
<meta content="IE=edge" http-equiv="X-UA-Compatible">

<title>{{ isset($title) ? $title . ' - ' : '' . config('app.name', 'Laravel') }}</title>

<!-- Favicons-->
<link href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
<link href="{{ asset('assets/img/favicons/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png">
<link href="{{ asset('assets/img/favicons/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png">
<link href="{{ asset('assets/img/favicons/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
<link href="{{ asset('assets/img/favicons/manifest.json') }}" rel="manifest">

<meta content="{{ asset('assets/img/favicons/mstile-150x150.png') }}" name="msapplication-TileImage">
<meta content="#ffffff" name="theme-color">

<!-- Fonts -->
@stack('fonts')

<link href="https://fonts.googleapis.com/" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">

<!-- Stylesheets -->
@vite('resources/css/app.css')

<link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
<link href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" rel="stylesheet">
{{-- <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl"> --}}
<link href="{{ asset('assets/css/theme.min.css') }}" id="style-default" rel="stylesheet" type="text/css">
{{-- <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl"> --}}
<link href="{{ asset('assets/css/user.min.css') }}" id="user-style-default" rel="stylesheet" type="text/css">

<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

@stack('css')

<!-- Scripts -->
@vite('resources/js/app.js')

<script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>

<script>
    var phoenixIsRTL = window.config.config.phoenixIsRTL;
    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
</script>

@stack('js.head')
