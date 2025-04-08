<div class="mb-9">
    {{-- Breadcrumbs --}}
    @slot('breadcrumbs')
        <nav aria-label="breadcrumb" class="mb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </li>

                <li class="breadcrumb-item active">
                    <i class="fas fa-network-wired"></i>
                    {{ __($title ?? 'Tenants') }}
                </li>
            </ol>
        </nav>
    @endslot

    <!-- Header -->
    <div class="row g-2 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">
                <i class="fas fa-network-wired me-1"></i>
                {{ __($title ?? 'Tenants') }}
            </h2>
        </div>
    </div>

    <x-alert />

    <!-- Stats Tabs -->
    <ul class="nav nav-links mb-lg-2 mx-n3 mb-3" id="myTab" tenant="tablist">
        <li class="nav-item">
            <a aria-controls="all" aria-current="page" aria-selected="true" class="nav-link active" data-bs-toggle="tab"
                href="#all" id="all-tab" tenant="tab">
                <span>{{ __('All') }}</span>
                <span class="text-700 fw-semi-bold">({{ k_number_format($tenants?->count() ?? 0) }})</span>
            </a>
        </li>

        @feature(App\Features\TenantDelete::class)
            <li class="nav-item">
                <a aria-controls="trashed" aria-current="page" aria-selected="false" class="nav-link" data-bs-toggle="tab"
                    href="#trashed" id="trashed-tab" tenant="tab">
                    <span>{{ __('Trashed') }}</span>
                    <span class="text-700 fw-semi-bold">({{ k_number_format($trashed?->count() ?? 0) }})</span>
                </a>
            </li>
        @endfeature
    </ul>

    <div class="tab-content" id="myTabContent">
        @featureany(\App\Features\TenantIndexSearch::class, \App\Features\TenantCreate::class)
            <!-- Search, Filters & Quick Actions -->
            <div class="mb-4">
                <div class="row g-3">
                    @feature(\App\Features\TenantIndexSearch::class)
                        <!-- Search -->
                        <livewire:page.search />
                    @endfeature

                    <!-- Quick Actions -->
                    <div class="col-auto">
                        @feature(\App\Features\TenantCreate::class)
                            <button class="btn btn-primary me-3" data-bs-target="#add-tenant" data-bs-toggle="modal"
                                type="button" wire:click="$dispatch('open-modal')">
                                <span class="fas fa-plus me-2"></span>Add
                            </button>
                            @push('modals')
                                <livewire:tenancy::modals.create />
                            @endpush
                        @endfeature
                    </div>
                </div>
            </div>
        @endfeatureany

        <div aria-labelledby="all-tab" class="tab-pane fade show active"
            data-list='{"valueNames":["name"],"page":{{ $limit ?? 15 }},"pagination":true}' id="all"
            tenant="tabpanel">
            <div
                class="mx-n4 mx-lg-n6 px-lg-6 border-top border-bottom border-200 position-relative top-1 bg-white px-4">
                <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                    <table class="table-sm fs--1 mb-0 table">
                        <thead class="text-uppercase">
                            <tr>
                                <th class="white-space-nowrap fs--1 ps-0 align-middle">
                                    <div class="form-check fs-0 mb-0">
                                        <input class="form-check-input" data-bulk-select='{"body":"tenants-table-body"}'
                                            id="checkbox-bulk-customers-select" type="checkbox" />
                                    </div>
                                </th>

                                <th class="sort align-middle" data-sort="name" scope="col">
                                    {{ __('Name') }}
                                </th>

                                <th class="sort align-middle" data-sort="user" scope="col">
                                    {{ __('Created By') }}
                                </th>

                                <th class="sort align-middle" data-sort="domains" scope="col">
                                    {{ __('Domains') }}
                                </th>

                                <th class="text-end align-middle" scope="col"></th>
                            </tr>
                        </thead>

                        <tbody class="list" id="tenants-table-body">
                            @foreach ($tenants ?? [] as $tenant)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                    wire:key="{{ $tenant->id }}">
                                    <td class="fs--1 py-3 ps-0 align-middle">
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select-row='@json($tenant)' type="checkbox" />
                                        </div>
                                    </td>

                                    {{-- Name --}}
                                    <td class="name white-space-nowrap pe-5 align-middle">
                                        <a class="d-flex align-items-center text-1100"
                                            href="{{ Route::has('admin.tenants.show') ? route('admin.tenants.show', $tenant->slug) : 'javascript://' }} ">
                                            <p class="text-1100 fw-bold mb-0">
                                                <i class="fas fa-desktop me-1"></i>
                                                {{ $tenant->name }}
                                            </p>
                                        </a>
                                    </td>

                                    {{-- Created By --}}
                                    <td class="user white-space-nowrap text-1000 align-middle">
                                        <a class="d-flex align-items-center text-1100"
                                            href="{{ route('user.show', $tenant->user->id) }}">
                                            <p class="text-1100 fw-bold mb-0">
                                                <i aria-hidden="true" class="fa fa-user-tie me-1"></i>
                                                {{ $tenant->user->name }}
                                            </p>
                                        </a>
                                    </td>

                                    {{-- Domains --}}
                                    <td class="domain white-space-nowrap text-1000 align-middle">
                                        @forelse ($tenant->domains as $domain)
                                            <span class="badge text-bg-light">
                                                <i aria-hidden="true" class="fa fa-globe me-1"></i>
                                                <a class="text-bg-light" href="//{{ $domain->url }}" target="_blank">
                                                    {{ $domain->url }}
                                                </a>
                                            </span>
                                        @empty
                                            <span class="">-</span>
                                        @endforelse
                                    </td>

                                    {{-- Actions --}}
                                    <td class="white-space-nowrap pe-0 text-end align-middle">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            @if (Route::has('admin.tenants.show'))
                                                @feature(\App\Features\TenantShow::class)
                                                    @can('admin.tenant.show')
                                                        <a class="btn btn-sm btn-reveal fs--2"
                                                            data-bs-original-title="{{ __('View') }}"
                                                            data-bs-toggle="tooltip"
                                                            href="{{ route('admin.tenants.show', $tenant->slug) }}">
                                                            <span class="fas fa-eye fs--2 text-muted"></span>
                                                        </a>
                                                    @endcan
                                                @endfeature
                                            @endif

                                            @feature(\App\Features\TenantUpdate::class)
                                                @can('admin.tenant.edit')
                                                    <button aria-label="{{ __('Edit') }}"
                                                        class="btn btn-sm btn-reveal fs--2"
                                                        data-bs-original-title="{{ __('Edit') }}" data-bs-toggle="tooltip"
                                                        type="button"
                                                        wire:click="$dispatch('tenant.edit', {'tenant': @js($tenant->slug)})">
                                                        <span class="fa-solid fa-edit fs--2"></span>
                                                    </button>
                                                @endcan
                                            @endfeature

                                            @feature(\App\Features\TenantDelete::class)
                                                @canAny(['admin.tenant.delete.trash', 'admin.tenant.delete'])
                                                    <button aria-label="{{ __('Trash') }}"
                                                        class="btn btn-sm btn-reveal fs--2"
                                                        data-bs-original-title="{{ __('Trash') }}" data-bs-toggle="tooltip"
                                                        type="button"
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
                                                        <span class="fas fa-trash fs--2 text-danger"></span>
                                                    </button>
                                                @endcan
                                            @endfeature
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                {{ $tenants->links() }}
            </div>
        </div>

        <!-- Trashed -->
        <div aria-labelledby="trashed-tab" class="tab-pane fade"
            data-list='{"valueNames":["name"],"page":{{ $limit ?? 15 }},"pagination":true}' id="trashed"
            tenant="tabpanel">
            <div
                class="mx-n4 mx-lg-n6 px-lg-6 border-top border-bottom border-200 position-relative top-1 bg-white px-4">
                <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                    <table class="table-sm fs--1 mb-0 table">
                        <thead class="text-uppercase">
                            <tr>
                                <th class="white-space-nowrap fs--1 ps-0 align-middle">
                                    <div class="form-check fs-0 mb-0">
                                        <input class="form-check-input"
                                            data-bulk-select='{"body":"trashed-tenants-table-body"}'
                                            id="checkbox-bulk-customers-select" type="checkbox" />
                                    </div>
                                </th>

                                <th class="sort align-middle" data-sort="name" scope="col">
                                    {{ __('Name') }}
                                </th>

                                <th class="sort align-middle" data-sort="user" scope="col">
                                    {{ __('Created By') }}
                                </th>

                                <th class="sort align-middle" data-sort="domains" scope="col">
                                    {{ __('Domains') }}
                                </th>

                                <th class="text-end align-middle" scope="col"></th>
                            </tr>
                        </thead>

                        <tbody class="list" id="trashed-tenants-table-body">
                            @foreach ($trashed ?? [] as $tenant)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                    wire:key="{{ $tenant->id }}">
                                    <td class="fs--1 py-3 ps-0 align-middle">
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select-row='@json($tenant)' type="checkbox" />
                                        </div>
                                    </td>

                                    {{-- Name --}}
                                    <td class="name white-space-nowrap pe-5 align-middle">
                                        <a class="d-flex align-items-center text-1100" href="javascript://">
                                            <p class="text-1100 fw-bold mb-0">
                                                <i class="fas fa-desktop me-1"></i>
                                                {{ $tenant->name }}
                                            </p>
                                        </a>
                                    </td>

                                    {{-- Created By --}}
                                    <td class="user white-space-nowrap text-1000 align-middle">
                                        <a class="d-flex align-items-center text-1100"
                                            href="{{ route('user.show', $tenant->user->id) }}" target="__blank">
                                            <p class="text-1100 fw-bold mb-0">
                                                <i aria-hidden="true" class="fa fa-user-tie me-1"></i>
                                                {{ $tenant->user->name }}
                                            </p>
                                        </a>
                                    </td>

                                    {{-- Domains --}}
                                    <td class="domain white-space-nowrap text-1000 align-middle">
                                        @forelse ($tenant->domains->pluck('domain') as $domain)
                                            @php
                                                $url = Str::contains($domain, '.')
                                                    ? $domain
                                                    : $domain . '.' . Str::after(config('app.url'), '://');
                                            @endphp
                                            <span class="badge text-bg-light">
                                                <i aria-hidden="true" class="fa fa-globe me-1"></i>
                                                <a class="text-bg-light" href="//{{ $url }}"
                                                    target="_blank">
                                                    {{ $url }}
                                                </a>
                                            </span>
                                        @empty
                                            <span class="">-</span>
                                        @endforelse
                                    </td>

                                    <td class="white-space-nowrap pe-0 text-end align-middle">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            @canAny(['admin.tenant.delete.restore', 'admin.tenant.delete'])
                                                <button aria-label="{{ __('Restore') }}"
                                                    class="btn btn-sm btn-reveal fs--2"
                                                    data-bs-original-title="{{ __('Restore') }}" data-bs-toggle="tooltip"
                                                    type="button"
                                                    wire:click="$dispatch('confirm', {
                                                            data: {
                                                                id: @js($tenant->id),
                                                                icon: '<i aria-hidden=\'true\' class=\'fa-solid fa-undo text-success\'></i>',
                                                                title: '{{ $tenant->name }}',
                                                                description: 'Are you sure you want to Restore this record?',
                                                                detail: '',
                                                                button_label: 'Restore',
                                                                color: 'success',
                                                                action: 'tenant.restore',
                                                            }
                                                        })">
                                                    <span class="fas fa-undo fs--2 text-success"></span>
                                                </button>
                                            @endcanAny

                                            @canAny(['admin.tenant.delete.permanent', 'admin.tenant.delete'])
                                                <button aria-label="{{ __('Permanently delete') }}"
                                                    class="btn btn-sm btn-reveal fs--2"
                                                    data-bs-original-title="{{ __('Permanently delete') }}"
                                                    data-bs-toggle="tooltip" type="button"
                                                    wire:click="$dispatch('confirm', {
                                                            data: {
                                                                id: @js($tenant->id),
                                                                icon: '<i aria-hidden=\'true\' class=\'fa-solid fa-trash-alt text-danger\'></i>',
                                                                title: '{{ $tenant->name }}',
                                                                description: 'Are you sure you want to Permanently delete this record?',
                                                                detail: '',
                                                                button_label: 'Delete Permanently',
                                                                color: 'danger',
                                                                action: 'tenant.delete',
                                                            }
                                                        })">
                                                    <span class="fas fa-trash-alt fs--2 text-danger"></span>
                                                </button>
                                            @endcanAny
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                {{ $trashed->links() }}
            </div>
        </div>
    </div>
</div>
