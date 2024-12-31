<div class="mb-9">
    @slot('breadcrumbs')
        <nav aria-label="breadcrumb" class="mb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __($title ?? 'Roles') }}</li>
            </ol>
        </nav>
    @endslot

    <!-- Header -->
    <div class="row g-2 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">{{ __($title ?? 'Roles') }}</h2>
        </div>
    </div>

    <x-alert />

    <!-- Stats Tabs -->
    <ul class="nav nav-links mb-lg-2 mx-n3 mb-3" id="myTab" role="tablist">
        <li class="nav-item">
            <a aria-controls="all" aria-current="page" aria-selected="true" class="nav-link active" data-bs-toggle="tab"
                href="javascript://#all" id="all-tab" role="tab">
                <span>All</span>
                <span class="text-700 fw-semi-bold">({{ k_number_format($roles->count() ?? 0) }})</span>
            </a>
        </li>

        <li class="nav-item">
            <a aria-controls="trashed" aria-current="page" aria-selected="false" class="nav-link" data-bs-toggle="tab"
                href="#trashed" id="trashed-tab" role="tab">
                <span>{{ __('Trashed') }}</span>
                <span class="text-700 fw-semi-bold">({{ k_number_format($trashed?->count() ?? 0) }})</span>
            </a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <!-- Search, Filters & Quick Actions -->
        <div class="mb-4">
            <div class="row g-3">
                <!-- Search -->
                <livewire:search.page />

                <!-- Quick Actions -->
                <div class="col-auto">
                    @can('roles.delete')
                        <button class="btn btn-primary me-3" data-bs-target="#add-role" data-bs-toggle="modal"
                            type="button" wire:click="$dispatch('open-modal')">
                            <span class="fas fa-plus-circle me-2"></span>
                            Add
                        </button>
                        @push('modals')
                            <livewire:role::modals.create />
                        @endpush
                    @endcan

                    <button class="btn btn-link text-900 me-3 px-0" disabled>
                        <span class="fa-solid fa-file-import fs--1 me-2"></span>Import
                    </button>

                    <button class="btn btn-link text-900 px-0" disabled>
                        <span class="fa-solid fa-file-export fs--1 me-2"></span>Export
                    </button>
                </div>
            </div>
        </div>

        <div aria-labelledby="all-tab" class="tab-pane fade show active"
            data-list='{"valueNames":["name","guard_name"],"page":100,"pagination":true}' id="all"
            role="tabpanel">
            <div
                class="mx-n4 mx-lg-n6 px-lg-6 border-top border-bottom border-200 position-relative top-1 bg-white px-4">
                <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                    <table class="table-sm fs--1 mb-0 table">
                        <thead class="text-uppercase">
                            <tr>
                                <th class="white-space-nowrap fs--1 ps-0 align-middle">
                                    <div class="form-check fs-0 mb-0">
                                        <input class="form-check-input"
                                            data-bulk-select='{"body":"customers-table-body"}'
                                            id="checkbox-bulk-customers-select" type="checkbox" />
                                    </div>
                                </th>

                                <th class="sort -text-end align-middle" data-sort="total-orders" scope="col">
                                    Name
                                </th>

                                <th class="sort -text-end align-middle" data-sort="total-orders" scope="col">
                                    Guard
                                </th>

                                <th class="text-end align-middle" scope="col"></th>
                            </tr>
                        </thead>

                        <tbody class="list" id="customers-table-body">
                            @foreach ($roles ?? [] as $role)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                    wire:key="{{ $role->name }}">
                                    <td class="fs--1 py-3 ps-0 align-middle">
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select-row='@json($role)' type="checkbox" />
                                        </div>
                                    </td>

                                    <td class="name white-space-nowrap pe-5 align-middle">
                                        <a class="d-flex align-items-center text-1100"
                                            href="{{ route('role.show', $role->name) }}">
                                            <div class="avatar avatar-m">
                                                <i aria-hidden="true" class="fa fa-cog rounded-circle"></i>
                                            </div>
                                            <p class="text-1100 fw-bold mb-0 ms-3">
                                                {{ $role->name }}
                                            </p>
                                        </a>
                                    </td>

                                    <td class="guard_name white-space-nowrap text-1000 -text-end align-middle">
                                        {{ $role->guard_name }}
                                    </td>

                                    <td class="white-space-nowrap text-end pe-0 align-middle">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button aria-expanded="false" aria-haspopup="true"
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none btn-reveal fs--2 transition-none"
                                                data-boundary="window" data-bs-reference="parent"
                                                data-bs-toggle="dropdown" type="button">
                                                <span class="fas fa-ellipsis-h fs--2"></span>
                                            </button>

                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                @can('roles.show')
                                                    <a __wire:navigate class="dropdown-item"
                                                        href="{{ route('role.show', $role->name) }}">
                                                        {{ __('View') }}
                                                    </a>
                                                @endcan

                                                @can('roles.update')
                                                    <a __wire:navigate class="dropdown-item" data-bs-target="#edit-role"
                                                        data-bs-toggle="modal" href="javascript://" type="button"
                                                        wire:click="edit(@js($role->name))">
                                                        {{ __('Edit') }}
                                                    </a>
                                                @endcan

                                                @can('roles.delete')
                                                    <div class="dropdown-divider"></div>

                                                    <!-- Delete -->
                                                    <a class="dropdown-item text-danger" href="javascript://"
                                                        onclick="event.preventDefault();"
                                                        wire:click="trash(@js($role->name))">
                                                        {{ __('Trash') }}
                                                    </a>
                                                @endcan
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                {{ $roles->links() }}
            </div>
        </div>

        <!-- Trashed -->
        <div aria-labelledby="trashed-tab" class="tab-pane fade"
            data-list='{"valueNames":["donor","finder_id","amount","total-spent","city","last-seen","last-order"],"page":100,"pagination":true}'
            id="trashed" role="tabpanel">
            <div
                class="mx-n4 mx-lg-n6 px-lg-6 border-top border-bottom border-200 position-relative top-1 bg-white px-4">
                <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                    <table class="table-sm fs--1 mb-0 table">
                        <thead class="text-uppercase">
                            <tr>
                                <th class="white-space-nowrap fs--1 ps-0 align-middle">
                                    <div class="form-check fs-0 mb-0">
                                        <input class="form-check-input"
                                            data-bulk-select='{"body":"customers-table-body"}'
                                            id="checkbox-bulk-customers-select" type="checkbox" />
                                    </div>
                                </th>

                                <th class="sort -text-end align-middle" data-sort="total-orders" scope="col">
                                    Name
                                </th>

                                <th class="sort -text-end align-middle" data-sort="total-orders" scope="col">
                                    Guard
                                </th>

                                <th class="text-end align-middle" scope="col"></th>
                            </tr>
                        </thead>

                        <tbody class="list" id="customers-table-body">
                            @foreach ($trashed ?? [] as $role)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                    wire:key="{{ $role->name }}">
                                    <td class="fs--1 py-3 ps-0 align-middle">
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select-row='@json($role)' type="checkbox" />
                                        </div>
                                    </td>

                                    <td class="name white-space-nowrap pe-5 align-middle">
                                        <a class="d-flex align-items-center text-1100"
                                            href="{{ route('role.show', $role->name) }}">
                                            <div class="avatar avatar-m">
                                                <i aria-hidden="true" class="fa fa-cog rounded-circle"></i>
                                            </div>
                                            <p class="text-1100 fw-bold mb-0 ms-3">
                                                {{ $role->name }}
                                            </p>
                                        </a>
                                    </td>

                                    <td class="guard_name white-space-nowrap text-1000 -text-end align-middle">
                                        {{ $role->guard_name }}
                                    </td>

                                    <td class="white-space-nowrap text-end pe-0 align-middle">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            @can('roles.restore')
                                                <button class="btn btn-sm btn-reveal fs--2" data-bs-toggle="tooltip"
                                                    title="Restore" type="button"
                                                    wire:click="restore(@js($role->name))">
                                                    <span class="fas fa-undo fs--2"></span>
                                                </button>
                                            @endcan

                                            @can('roles.delete.permanent')
                                                <button class="btn btn-sm btn-reveal fs--2" data-bs-toggle="tooltip"
                                                    title="Permanently delete" type="button"
                                                    wire:click="permanent(@js($role->name))">
                                                    <span class="fas fa-trash-alt fs--2"></span>
                                                </button>
                                            @endcan
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

    @push('modals')
        <livewire:role::modals.edit />
    @endpush
</div>
