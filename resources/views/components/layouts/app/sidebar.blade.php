<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('components.layouts.app.partials.head')
    </head>

    <body>
        <x-themes.app.loader />

        {{ $slot }}

        @auth
            <x-themes.app.bottom-menu />
            <x-themes.app.sidebar />
        @endauth
        <x-themes.app.add-to-home-screen />
        <x-themes.app.cookies />

        <!-- Modals -->
        @stack('modals')

        {{-- Global modals --}}
        @auth
            {{--
            @can('accounts.deposit')
                <!-- Deposit Action -->
                <livewire:account::deposit />
            @endcan

            @can('accounts.withdraw')
                <!-- Withdraw Action -->
                <livewire:account::withdraw />
            @endcan
            --}}
        @endauth

        <!-- Scripts  -->
        @stack('js')

        <script src="{{ asset('assets/app') }}/js/lib/bootstrap.bundle.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="{{ asset('assets/app') }}/js/plugins/splide/splide.min.js"></script>

        <script src="{{ asset('assets/app') }}/js/base.js"></script>

        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                FontAwesome.dom.i2svg();
            });
        </script>

        {{-- <script>
            // Add to Home with 2 seconds delay.
            AddtoHome("2000", "once");
        </script> --}}

        <!-- Global Livewire -->
        <script>
            // Runs after Livewire is loaded but before it's initialized on the page...
            document.addEventListener('livewire:init', () => {
                // Open modals
                Livewire.on('modal.open', (data) => {
                    const modal = new bootstrap.Modal(document.getElementById(data.toString()));
                    if (modal) {
                        modal.show();
                    }
                });

                // Close modals
                Livewire.on('modal.close', (data) => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById(data.toString()));
                    if (modal) {
                        modal.hide();
                    }
                });

                // Open Offcanvas
                Livewire.on('offcanvas.open', (data) => {
                    const offcanvas = new bootstrap.Offcanvas(document.getElementById(data.toString()));
                    if (offcanvas) {
                        offcanvas.show();
                    }
                });

                // Close Offcanvas
                Livewire.on('offcanvas.close', (data) => {
                    const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById(data.toString()));
                    if (offcanvas) {
                        offcanvas.hide();
                    }
                });
            })
        </script>
    </body>

</html>
