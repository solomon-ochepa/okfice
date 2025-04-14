<div class="mb-3 pb-0">
    @slot('breadcrumbs')
        <nav aria-label="breadcrumb" class="mb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.client.index') }}">{{ __('Clients') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __($client->name) }}</li>
            </ol>
        </nav>
    @endslot

    <x-alert />

    <!-- Header -->
    <div class="row">
        <div class="col-12">
            <div class="row align-items-center justify-content-between g-3 mb-3">
                <div class="col-12 col-md-auto">
                    <h2 class="mb-0">{{ $client->name }}</h2>
                </div>

                {{-- Action Tabs --}}
                <div class="col-12 col-md-auto">
                    <div class="d-flex">
                        <div class="d-md-none flex-1">
                            <button class="btn btn-phoenix-secondary text-700 me-2 px-3"
                                data-phoenix-target="#productFilterColumn" data-phoenix-toggle="offcanvas">
                                <span class="fa-solid fa-bars"></span>
                            </button>
                        </div>

                        {{-- Edit --}}
                        @feature(\App\Features\ClientUpdate::class)
                            @can('admin.clients.edit')
                                <button aria-label="{{ __('Edit') }}" class="btn btn-phoenix-secondary px-sm-5 me-2 px-3"
                                    data-bs-original-title="{{ __('Edit') }}" data-bs-target="#edit-client"
                                    data-bs-toggle="tooltip" type="button"
                                    wire:click="$dispatch('client.edit', {'client': @js($client->slug)})">
                                    <span class="fa-solid fa-edit"></span>
                                    <span class="d-none d-lg-inline ms-2">{{ __('Edit') }}</span>
                                </button>
                                @push('modals')
                                    <livewire:tenancy::admin.client.modals.create />
                                @endpush
                            @endcan
                        @endfeature

                        {{-- Delete --}}
                        @feature(\App\Features\ClientDelete::class)
                            @canAny(['admin.client.delete.trash', 'admin.client.delete'])
                                <button aria-label="{{ __('Trash') }}" class="btn btn-phoenix-danger"
                                    data-bs-original-title="{{ __('Trash') }}" data-bs-toggle="tooltip" type="button"
                                    wire:click="$dispatch('confirm', {
                                        data: {
                                            id: @js($client->id),
                                            icon: '<i aria-hidden=\'true\' class=\'fa-solid fa-trash text-danger\'></i>',
                                            title: '{{ $client->name }}',
                                            description: 'Are you sure you want to Trash this record?',
                                            detail: '',
                                            button_label: 'Trash',
                                            color: 'danger',
                                            action: 'client.trash',
                                        }
                                    })">
                                    <span class="fa-solid fa-trash"></span>
                                    <span class="d-none d-lg-inline ms-2">{{ __('Delete') }}</span>
                                </button>
                            @endcan
                        @endfeature
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-0 g-md-4 g-xl-6">
        <!-- Left col -->
        <div class="col-md-5 col-lg-5 col-xl-4">
            <div class="sticky-leads-sidebar">
                <div class="lead-details-offcanvas bg-soft scrollbar phoenix-offcanvas phoenix-offcanvas-fixed"
                    id="productFilterColumn">
                    <div class="d-flex justify-content-between align-items-center d-md-none mb-2">
                        <h3 class="mb-0">{{ $client->name }}</h3>
                        <button class="btn p-0" data-phoenix-dismiss="offcanvas">
                            <span class="uil uil-times fs-1"></span>
                        </button>
                    </div>

                    {{-- User card --}}
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row align-items-center g-3 text-xxl-start text-center">
                                <!-- Image -->
                                <div class="col-12 col-xxl-auto">
                                    <div class="avatar avatar-5xl">
                                        <img alt="" class="rounded-circle"
                                            src="{{ isset($image) ? $image : asset('unknown.webp') }}" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-auto flex-1">
                                    <!-- Names -->
                                    <h3 class="fw-bolder mb-2">
                                        {{ $client->admin->name }}
                                    </h3>
                                    <p class="mb-0">Default admin,</p>
                                    <a class="fw-bold" href="{{ route('admin.client.login_as', [$client, $client->admin]) }}">Login as</a>

                                    <hr />

                                    <!-- Quick data -->
                                    <ul
                                        class="list-group -white-space-nowrap list-group-flush fs--1 text-start align-middle">
                                        <li class="list-group-item">
                                            Registered: <i class="text-muted">{{ $client->created_at->calendar() }}</i>
                                        </li>
                                        <li class="list-group-item">
                                            Database:
                                            @if ($client->database_exists())
                                                <i class="text-muted">{{ $client->database()->getName() }}</i>
                                            @else
                                                <button class="btn btn-sm btn-outline-primary" wire:click='create_database' data-bs-toggle="tooltip" title="Create">
                                                    <i class="fas fa-plus-circle"></i>
                                                </button>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="phoenix-offcanvas-backdrop d-lg-none top-0" data-phoenix-backdrop="data-phoenix-backdrop">
                </div>
            </div>
        </div>

        <!-- Right col -->
        <div class="col-md-7 col-lg-7 col-xl-8">
            <div class="lead-details-container">
                <ul class="nav nav-underline deal-details scrollbar w-100 mb-6 flex-nowrap pb-1" id="myTab"
                    role="tablist" style="overflow-y: hidden;">
                    <li class="nav-item me-2 text-nowrap" role="presentation">
                        <a aria-controls="tab-invoices" aria-selected="false" class="nav-link active"
                            data-bs-toggle="tab" href="#tab-invoices" id="invoices-tab" role="tab" tabindex="-1">
                            <i class="fas fa-file-invoice-dollar tab-icon-color me-1"></i>
                            {{ __('Invoices') }}
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    {{-- Invoices --}}
                    <div aria-labelledby="invoices-tab" class="tab-pane fade active show" id="tab-invoices"
                        role="tabpanel">
                        ...
                    </div>

                    {{-- Notes --}}
                    {{-- <div aria-labelledby="notes-tab" class="tab-pane fade" id="tab-notes" role="tabpanel"></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@pushOnce('modals')
    <livewire:confirm />
@endPushOnce
