<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="{{ csrf_token() }}" name="csrf-token">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">

        <title>{{ (isset($title) ? $title . ' - ' : '') . config('app.name', 'Laravel') }}</title>

        <!-- Favicons-->
        <link href="{{ asset('') }}assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
        <link href="{{ asset('') }}assets/img/favicons/favicon-32x32.png" rel="icon" sizes="32x32"
            type="image/png">
        <link href="{{ asset('') }}assets/img/favicons/favicon-16x16.png" rel="icon" sizes="16x16"
            type="image/png">
        <link href="{{ asset('') }}assets/img/favicons/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('') }}assets/img/favicons/manifest.json" rel="manifest">

        <meta content="{{ asset('') }}assets/img/favicons/mstile-150x150.png" name="msapplication-TileImage">
        <meta content="#ffffff" name="theme-color">

        <!-- Fonts -->
        @stack('font')
        <link href="https://fonts.googleapis.com/" rel="preconnect">
        <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
            rel="stylesheet">

        <!-- Stylesheets -->
        @vite('resources/css/app.css')

        @stack('css.top')

        <link href="{{ asset('') }}vendors/simplebar/simplebar.min.css" rel="stylesheet">
        <link href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" rel="stylesheet">
        {{-- <link href="{{ asset('') }}assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl"> --}}
        <link href="{{ asset('') }}assets/css/theme.min.css" id="style-default" rel="stylesheet" type="text/css">
        {{-- <link href="{{ asset('') }}assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl"> --}}
        <link href="{{ asset('') }}assets/css/user.min.css" id="user-style-default" rel="stylesheet"
            type="text/css">

        <link href="{{ asset('') }}assets/css/custom.css" rel="stylesheet">

        @stack('css')

        <!-- Scripts -->
        @vite('resources/js/app.js')

        @stack('js.head.top')

        <script src="{{ asset('') }}vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('') }}vendors/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('') }}assets/js/config.js"></script>

        @stack('js.head')
    </head>

    <body>
        @stack('js.body')
        <main class="main" id="top">
            <x-header />

            <x-search-modal />

            <!-- Page Content -->
            <div class="content">
                <x-alert />

                {{ $breadcrumbs ?? '' }}

                {{ $slot }}

                <x-footer />
            </div>

            {{-- <x-chat /> --}}
        </main>

        @feature(\App\Features\ThemeCustomizer::class)
            <a class="card setting-toggle" data-bs-toggle="offcanvas" href="#settings">
                <div class="card-body d-flex align-items-center px-2 py-1">
                    <div class="position-relative rounded-start" style="height:34px;width:28px">
                        <div class="settings-popover">
                            <span class="ripple">
                                <span class="fa-spin position-absolute all-0 d-flex flex-center">
                                    <span class="icon-spin position-absolute all-0 d-flex flex-center">
                                        <svg fill="#ffffff" height="20" viewBox="0 0 20 20" width="20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                                fill="#2A7BE4"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>

                    <small class="text-uppercase text-700 fw-bold rounded-end py-2 pe-2 ps-1">Customize</small>
                </div>
            </a>

            @push('modals')
                <livewire:settings />
            @endpush
        @endfeature

        @stack('modals')

        <!-- JavaScripts -->
        @stack('js.top')

        <script src="{{ asset('') }}vendors/popper/popper.min.js"></script>
        <script src="{{ asset('') }}vendors/bootstrap/bootstrap.min.js"></script>
        <script src="{{ asset('') }}vendors/anchorjs/anchor.min.js"></script>
        <script src="{{ asset('') }}vendors/is/is.min.js"></script>
        <script src="{{ asset('') }}vendors/fontawesome/all.min.js"></script>
        <script src="{{ asset('') }}vendors/lodash/lodash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js"></script>
        {{-- <script src="{{ asset('') }}vendors/list.js/list.min.js"></script> --}}
        <script src="{{ asset('') }}vendors/feather-icons/feather.min.js"></script>
        <script src="{{ asset('') }}vendors/dayjs/dayjs.min.js"></script>

        <script src="{{ asset('') }}assets/js/phoenix.js"></script>

        <script>
            var navbarTopShape = window.config.config.phoenixNavbarTopShape;
            var navbarPosition = window.config.config.phoenixNavbarPosition;
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTop = document.querySelector('#navbarTop');
            var topNavSlim = document.querySelector('#topNavSlim');
            var navbarTopSlim = document.querySelector('#navbarTopSlim');
            var navbarCombo = document.querySelector('#navbarCombo');
            var navbarComboSlim = document.querySelector('#navbarComboSlim');
            var dualNav = document.querySelector('#dualNav');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarPosition === 'dual-nav') {
                topNavSlim.remove();
                navbarTop.remove();
                navbarVertical.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarDefault.remove();
                dualNav.removeAttribute('style');
                documentElement.classList.add('dual-nav');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                topNavSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                navbarVertical.remove();
                navbarTop.remove();
                topNavSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarTopSlim.removeAttribute('style');
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                navbarDefault.remove();
                //- navbarVertical.remove();
                navbarTop.remove();
                topNavSlim.remove();
                navbarCombo.remove();
                navbarTopSlim.remove();
                navbarComboSlim.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                topNavSlim.remove();
                navbarVertical.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarTop.removeAttribute('style');
                documentElement.classList.add('navbar-horizontal');
            } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                topNavSlim.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarDefault.remove();
                navbarComboSlim.remove();
                navbarCombo.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                documentElement.classList.add('navbar-combo')

            } else {
                topNavSlim.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>

        <!-- Global Livewire -->
        <script>
            // Runs after Livewire is loaded but before it's initialized on the page...
            document.addEventListener('livewire:init', () => {
                // Open modals
                Livewire.on('open-modal', (data) => {
                    const modal = new bootstrap.Modal(document.getElementById(data.toString()));
                    if (modal) {
                        modal.show();
                    }
                });

                // Close modals
                Livewire.on('close-modal', (data) => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById(data.toString()));
                    if (modal) {
                        modal.hide();
                    }
                });

                // Open Offcanvas
                Livewire.on('open-offcanvas', (data) => {
                    const offcanvas = new bootstrap.Offcanvas(document.getElementById(data.toString()));
                    if (offcanvas) {
                        offcanvas.show();
                    }
                });

                // Close Offcanvas
                Livewire.on('close-offcanvas', (data) => {
                    const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById(data.toString()));
                    if (offcanvas) {
                        offcanvas.hide();
                    }
                });
            })
        </script>

        @stack('js')
    </body>

</html>
