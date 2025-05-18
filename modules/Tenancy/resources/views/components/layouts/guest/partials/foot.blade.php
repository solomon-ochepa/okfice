@stack('modals')

<!-- JavaScripts -->
@stack('js.top')

<script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('vendors/is/is.min.js') }}"></script>
<script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js"></script>
{{-- <script src="{{ asset('vendors/list.js/list.min.js') }}"></script> --}}
<script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>

<script src="{{ asset('assets/js/phoenix.js') }}"></script>

<!-- Global Livewire -->
<script>
    // Runs after Livewire is loaded but before it's initialized on the page...
    document.addEventListener('livewire:init', () => {
        // Open / Close modals
        Livewire.on('open-modal', (el) => {
            const modal = new bootstrap.Modal(el.toString());
            if (modal) {
                modal.show();
            }
        });

        Livewire.on('close-modal', (el) => {
            const modal = bootstrap.Modal.getInstance(el.toString());
            if (modal) {
                modal.hide();
            }
        });
    })
</script>

@stack('js')
