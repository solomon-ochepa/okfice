<!-- It is never too late to be what you might have been. - George Eliot -->
@if (session('status'))
    <div class="position-fixed showdow-md bottom-0 end-0 p-3" style="z-index: 1050">
        <div aria-atomic="true" aria-live="polite" class="toast bg-light fade show align-items-center"
            data-bs-autohide="false" data-bs-delay="15000" role="alert">
            <div aria-atomic="true" aria-live="assertive" role="alert">
                <div class="toast-header bg-transparent">
                    <strong class="me-auto">Status</strong>
                    <small class="text-800">{{ now()->format('H:i A') }}</small>
                    <button aria-label="Close" class="btn ms-2 p-0" data-bs-dismiss="toast" type="button">
                        <span class="uil uil-times fs-1"></span>
                    </button>
                </div>

                <div class="toast-body">{{ session('status') }}</div>
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1000">
        <div aria-atomic="true" aria-live="assertive"
            class="bg-soft-danger toast fade show align-items-center text-danger border-0" data-bs-autohide="false"
            data-bs-delay="15000" role="alert">
            <div class="toast-header bg-transparent">
                <strong class="text-danger me-auto">Whoops! Something went wrong.</strong>
                <button aria-label="Close" class="btn ms-2 p-0" data-bs-dismiss="toast" type="button">
                    <span class="uil uil-times fs-1"></span>
                </button>
            </div>

            <div class="toast-body">{{ session('error') }}</div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1000">
        <div aria-atomic="true" aria-live="assertive"
            class="bg-soft-danger toast fade show align-items-center text-danger border-0" data-bs-autohide="false"
            data-bs-delay="15000" role="alert">
            <div class="toast-header bg-transparent">
                <strong class="text-danger me-auto">Whoops! Something went wrong.</strong>
                <button aria-label="Close" class="btn ms-2 p-0" data-bs-dismiss="toast" type="button">
                    <span class="uil uil-times fs-1"></span>
                </button>
            </div>

            <div class="toast-body">
                <ul class="mt-3 list-inside list-disc text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
