<div id="appCapsule">
    {{-- @slot('title', 'Tenants') --}}
    <x-themes.app.header back='admin.tenant.index' class="bg-primary text-light">
        @slot('title', $tenant->name)
    </x-themes.app.header>

    <div class="section -full mt-4">
        {{-- Header --}}
        <div class="section-heading -padding">
            <h2 class="title">
                <i class="fas fa-network-wired me-1"></i>
                {{ __($title ?? $tenant->name) }}
            </h2>

            @feature(\App\Features\TenantCreate::class)
                <div>
                    {{-- Edit --}}
                    @feature(\App\Features\TenantUpdate::class)
                        @can('admin.tenants.edit')
                            <button aria-label="{{ __('Edit') }}" class="btn btn-primary me-2"
                                data-bs-original-title="{{ __('Edit') }}" data-bs-target="#edit-tenant" data-bs-toggle="tooltip"
                                type="button" wire:click="$dispatch('tenant.edit', {'tenant': @js($tenant->slug)})">
                                <span class="fa-solid fa-edit"></span>
                                <span class="d-none d-lg-inline ms-2">{{ __('Edit') }}</span>
                            </button>
                            @push('modals')
                                <livewire:tenant::admin.modals.create />
                            @endpush
                        @endcan
                    @endfeature

                    {{-- Delete --}}
                    @feature(\App\Features\TenantDelete::class)
                        @canAny(['admin.tenant.delete', 'admin.tenant.delete.trash'])
                            <button aria-label="{{ __('Trash') }}" class="btn btn-danger"
                                data-bs-original-title="{{ __('Trash') }}" data-bs-toggle="tooltip" type="button"
                                wire:click="$dispatch('confirm', {
                                        data: {
                                            id: @js($tenant->id),
                                            icon: '<i aria-hidden=\'true\' class=\'fa-solid fa-trash text-danger\'></i>',
                                            title: '{{ $tenant->name }}',
                                            description: 'Are you sure you want to Trash this record?',
                                            detail: '',
                                            button_label: 'Trash',
                                            color: 'danger',
                                            action: 'tenant.trash',
                                        }
                                    })">
                                <span class="fa-solid fa-trash"></span>
                                <span class="d-none d-lg-inline ms-2">{{ __('Delete') }}</span>
                            </button>
                        @endcan
                    @endfeature
                </div>
            @endfeature
        </div>

        <x-alert />

        <div class="row g-0 g-md-4 g-xl-6">
            <!-- Left col -->
            <div class="col-md-5 col-lg-5 col-xl-4">
                <div class="sticky-leads-sidebar">
                    <div class="lead-details-offcanvas bg-soft scrollbar phoenix-offcanvas phoenix-offcanvas-fixed"
                        id="productFilterColumn">
                        <div class="d-flex justify-content-between align-items-center d-md-none mb-2">
                            <h3 class="mb-0">{{ $tenant->name }}</h3>
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
                                            {{ $tenant->admin->name }}
                                        </h3>
                                        <p class="mb-0">Default admin,</p>
                                        <a class="fw-bold"
                                            href="{{ route('admin.tenant.impersonate', [$tenant, $tenant->admin]) }}"
                                            target="_blank">
                                            {{ __('Login as') }}
                                        </a>

                                        <hr />

                                        <!-- Quick data -->
                                        <ul
                                            class="list-group -white-space-nowrap list-group-flush fs--1 text-start align-middle">
                                            <li class="list-group-item">
                                                Registered: <i
                                                    class="text-muted">{{ $tenant->created_at->calendar() }}</i>
                                            </li>
                                            <li class="list-group-item">
                                                Database:
                                                @if ($tenant->database_exists())
                                                    <i class="text-muted">{{ $tenant->database()->getName() }}</i>
                                                @else
                                                    <button class="btn btn-sm btn-outline-primary"
                                                        data-bs-toggle="tooltip" title="Create"
                                                        wire:click='create_database'>
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

                    <div class="phoenix-offcanvas-backdrop d-lg-none top-0"
                        data-phoenix-backdrop="data-phoenix-backdrop">
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
                                data-bs-toggle="tab" href="#tab-invoices" id="invoices-tab" role="tab"
                                tabindex="-1">
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
</div>

@pushOnce('modals')
    <livewire:confirm />
@endPushOnce
