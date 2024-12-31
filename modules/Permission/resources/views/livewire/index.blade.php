<div class="mb-9">
    @slot('breadcrumbs')
        <nav aria-label="breadcrumb" class="mb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __($title ?? 'Permissions') }}</li>
            </ol>
        </nav>
    @endslot

    <!-- Header -->
    <div class="row g-2 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">{{ __($title ?? 'Permissions') }}</h2>
        </div>
    </div>

    <x-alert />

    <!-- Stats Tabs -->
    <ul class="nav nav-links mb-lg-2 mx-n3 mb-3" id="myTab" role="tablist">
        <li class="nav-item">
            <a aria-controls="all" aria-current="page" aria-selected="true" class="nav-link active" data-bs-toggle="tab"
                href="javascript://#all" id="all-tab" role="tab">
                <span>All</span>
                <span class="text-700 fw-semi-bold">({{ k_number_format($permissions->count() ?? 0) }})</span>
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
                    <button class="btn btn-primary me-3" data-bs-target="#add-permission" data-bs-toggle="modal"
                        type="button" wire:click="$dispatch('open-modal')">
                        <span class="fas fa-plus-circle me-2"></span>
                        Add
                    </button>
                    @push('modals')
                        <livewire:permission::modals.create />
                    @endpush
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
                            @foreach ($permissions ?? [] as $permission)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                    wire:key="{{ $permission->id }}">
                                    <td class="fs--1 py-3 ps-0 align-middle">
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select-row='@json($permission)' type="checkbox" />
                                        </div>
                                    </td>

                                    <td class="name white-space-nowrap pe-5 align-middle">
                                        <a class="d-flex align-items-center text-1100"
                                            href="{{ route('permission.show', $permission->id) }}">
                                            <div class="avatar avatar-m">
                                                <i aria-hidden="true" class="fa fa-cog rounded-circle"></i>
                                            </div>
                                            <p class="text-1100 fw-bold mb-0 ms-3">
                                                {{ $permission->name }}
                                            </p>
                                        </a>
                                    </td>

                                    <td class="guard_name white-space-nowrap text-1000 text-end align-middle">
                                        {{ $permission->guard_name }}
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
                                                @can('permissions.show')
                                                    <a __wire:navigate class="dropdown-item"
                                                        href="{{ route('permission.show', $permission->id) }}">
                                                        {{ __('View') }}
                                                    </a>
                                                @endcan

                                                @can('permissions.delete')
                                                    <div class="dropdown-divider"></div>

                                                    <!-- Delete -->
                                                    <a class="dropdown-item text-danger" href="javascript://"
                                                        onclick="event.preventDefault();"
                                                        wire:click="delete(@js($permission->id))">
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
                <div class="row align-items-center justify-content-between fs--1 py-2 pe-0">
                    <div class="d-flex col-auto">
                        <p class="d-none d-sm-block fw-semi-bold text-900 mb-0 me-3" data-list-info="data-list-info">
                        </p>
                        <a class="fw-semi-bold" data-list-view="*" href="#!">View all
                            <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                        </a>
                        <a class="fw-semi-bold d-none" data-list-view="less" href="#!">View Less
                            <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                        </a>
                    </div>

                    <div class="d-flex col-auto">
                        <button class="page-link" data-list-pagination="prev">
                            <span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="pagination mb-0"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <span class="fas fa-chevron-right"></span>
                        </button>
                    </div>
                </div>
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
                            @foreach ($trashed ?? [] as $permission)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                    wire:key="{{ $permission->id }}">
                                    <td class="fs--1 py-3 ps-0 align-middle">
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select-row='@json($permission)' type="checkbox" />
                                        </div>
                                    </td>

                                    <td class="name white-space-nowrap pe-5 align-middle">
                                        <a class="d-flex align-items-center text-1100"
                                            href="{{ route('role.show', $permission->id) }}">
                                            <div class="avatar avatar-m">
                                                <i aria-hidden="true" class="fa fa-cog rounded-circle"></i>
                                            </div>
                                            <p class="text-1100 fw-bold mb-0 ms-3">
                                                {{ $permission->name }}
                                            </p>
                                        </a>
                                    </td>

                                    <td class="guard_name white-space-nowrap text-1000 -text-end align-middle">
                                        {{ $permission->guard_name }}
                                    </td>

                                    <td class="white-space-nowrap text-end pe-0 align-middle">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            @can('permissions.restore')
                                                <button class="btn btn-sm btn-reveal fs--2" data-bs-toggle="tooltip"
                                                    title="Restore" type="button"
                                                    wire:click="restore(@js($permission->id))">
                                                    <span class="fas fa-undo fs--2"></span>
                                                </button>
                                            @endcan

                                            @can('permissions.delete.permanent')
                                                <button class="btn btn-sm btn-reveal fs--2" data-bs-toggle="tooltip"
                                                    title="Permanently delete" type="button"
                                                    wire:click="permanent(@js($permission->id))">
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
                <div class="row align-items-center justify-content-between fs--1 py-2 pe-0">
                    <div class="d-flex col-auto">
                        <p class="d-none d-sm-block fw-semi-bold text-900 mb-0 me-3" data-list-info="data-list-info">
                        </p>
                        <a class="fw-semi-bold" data-list-view="*" href="#!">View all
                            <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                        </a>
                        <a class="fw-semi-bold d-none" data-list-view="less" href="#!">View Less
                            <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                        </a>
                    </div>

                    <div class="d-flex col-auto">
                        <button class="page-link" data-list-pagination="prev">
                            <span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="pagination mb-0"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <span class="fas fa-chevron-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
