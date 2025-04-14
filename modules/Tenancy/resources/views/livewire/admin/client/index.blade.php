<div id="appCapsule">
    {{-- @slot('title', 'Clients') --}}
    <x-themes.app.header class="bg-primary text-light">
        @slot('title', __('Manage Clients'))
    </x-themes.app.header>

    <div class="section -full mt-4">
        {{-- Header --}}
        <div class="section-heading -padding">
            <h2 class="title">
                <i class="fas fa-network-wired me-1"></i>
                {{ __($title ?? 'Clients') }}
            </h2>

            @feature(\App\Features\ClientCreate::class)
                <div>
                    @can('admin.clients.create')
                        <button class="btn btn-primary me-3" data-bs-target="#add-client" data-bs-toggle="modal" type="button"
                            wire:click="$dispatch('open-modal')">
                            <i class="fas fa-plus-circle"></i>
                        </button>

                        @pushOnce('modals')
                            <livewire:tenancy::admin.client.modals.create />
                            <livewire:user::admin.modals.import />
                        @endPushOnce
                    @endcan
                </div>
            @endfeature
        </div>

        @feature(\App\Features\ClientIndexSearch::class)
            <!-- Search, Filters & Quick Actions -->
            <div class="mb-4">
                <div class="row g-3">
                    <!-- Search -->
                    <div class="col">
                        <livewire:page.search />
                    </div>

                    <!-- Filters -->
                    {{-- <div class="col-auto">
                    </div> --}}
                </div>
            </div>
        @endfeature

        <x-alert />

        <div class="tab-content" id="myTabContent">
            <div aria-labelledby="all-tab" class="tab-pane fade show active" client="tabpanel"
                data-list='{"valueNames":["name"],"page":{{ $limit ?? 15 }},"pagination":true}' id="all">
                <div
                    class="mx-n4 mx-lg-n6 px-lg-6 border-top border-bottom border-200 position-relative top-1 bg-white px-4">
                    <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                        <table class="table-sm fs--1 mb-0 table">
                            <thead class="text-uppercase">
                                <tr>
                                    <th class="white-space-nowrap fs--1 ps-0 align-middle">
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select='{"body":"clients-table-body"}'
                                                id="checkbox-bulk-customers-select" type="checkbox" />
                                        </div>
                                    </th>

                                    <th class="sort align-middle" data-sort="name" scope="col">
                                        {{ __('Name') }}
                                    </th>

                                    <th class="sort align-middle" data-sort="domains" scope="col">
                                        {{ __('Domains') }}
                                    </th>

                                    <th class="text-end align-middle" scope="col"></th>
                                </tr>
                            </thead>

                            <tbody class="list" id="clients-table-body">
                                @foreach ($clients ?? [] as $client)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                        wire:key="{{ $client->id }}">
                                        <td class="fs--1 py-3 ps-0 align-middle">
                                            <div class="form-check fs-0 mb-0">
                                                <input class="form-check-input"
                                                    data-bulk-select-row='@json($client)'
                                                    type="checkbox" />
                                            </div>
                                        </td>

                                        {{-- Name --}}
                                        <td class="name white-space-nowrap pe-5 align-middle">
                                            <a class="d-flex align-items-center text-1100"
                                                href="{{ Route::has('admin.clients.show') ? route('admin.clients.show', $client->slug) : 'javascript://' }} ">
                                                <p class="text-1100 fw-bold mb-0">
                                                    <i class="fas fa-desktop me-1"></i>
                                                    {{ $client->name }}
                                                </p>
                                            </a>
                                        </td>

                                        {{-- Domains --}}
                                        <td class="domain white-space-nowrap text-1000 align-middle">
                                            @forelse ($client->domains as $domain)
                                                <span class="badge text-bg-light">
                                                    <i aria-hidden="true" class="fa fa-globe me-1"></i>
                                                    <a class="text-bg-light" href="//{{ $domain->url }}"
                                                        target="_blank">
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
                                                @if (Route::has('admin.clients.show'))
                                                    @feature(\App\Features\ClientShow::class)
                                                        @can('admin.client.show')
                                                            <a class="btn btn-sm btn-reveal fs--2"
                                                                data-bs-original-title="{{ __('View') }}"
                                                                data-bs-toggle="tooltip"
                                                                href="{{ route('admin.clients.show', $client->slug) }}">
                                                                <span class="fas fa-eye fs--2 text-muted"></span>
                                                            </a>
                                                        @endcan
                                                    @endfeature
                                                @endif

                                                @feature(\App\Features\ClientUpdate::class)
                                                    @can('admin.client.edit')
                                                        <button aria-label="{{ __('Edit') }}"
                                                            class="btn btn-sm btn-reveal fs--2"
                                                            data-bs-original-title="{{ __('Edit') }}"
                                                            data-bs-toggle="tooltip" type="button"
                                                            wire:click="$dispatch('client.edit', {'client': @js($client->slug)})">
                                                            <span class="fa-solid fa-edit fs--2"></span>
                                                        </button>
                                                    @endcan
                                                @endfeature

                                                @feature(\App\Features\ClientDelete::class)
                                                    @canAny(['admin.client.delete.trash', 'admin.client.delete'])
                                                        <button aria-label="{{ __('Trash') }}"
                                                            class="btn btn-sm btn-reveal fs--2"
                                                            data-bs-original-title="{{ __('Trash') }}"
                                                            data-bs-toggle="tooltip" type="button"
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
                    {{ $clients->links() }}
                </div>
            </div>

            <!-- Trashed -->
            <div aria-labelledby="trashed-tab" class="tab-pane fade" client="tabpanel"
                data-list='{"valueNames":["name"],"page":{{ $limit ?? 15 }},"pagination":true}' id="trashed">
                <div
                    class="mx-n4 mx-lg-n6 px-lg-6 border-top border-bottom border-200 position-relative top-1 bg-white px-4">
                    <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                        <table class="table-sm fs--1 mb-0 table">
                            <thead class="text-uppercase">
                                <tr>
                                    <th class="white-space-nowrap fs--1 ps-0 align-middle">
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select='{"body":"trashed-clients-table-body"}'
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

                            <tbody class="list" id="trashed-clients-table-body">
                                @foreach ($trashed ?? [] as $client)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                        wire:key="{{ $client->id }}">
                                        <td class="fs--1 py-3 ps-0 align-middle">
                                            <div class="form-check fs-0 mb-0">
                                                <input class="form-check-input"
                                                    data-bulk-select-row='@json($client)'
                                                    type="checkbox" />
                                            </div>
                                        </td>

                                        {{-- Name --}}
                                        <td class="name white-space-nowrap pe-5 align-middle">
                                            <a class="d-flex align-items-center text-1100" href="javascript://">
                                                <p class="text-1100 fw-bold mb-0">
                                                    <i class="fas fa-desktop me-1"></i>
                                                    {{ $client->name }}
                                                </p>
                                            </a>
                                        </td>

                                        {{-- Created By --}}
                                        <td class="user white-space-nowrap text-1000 align-middle">
                                            <a class="d-flex align-items-center text-1100"
                                                href="{{ route('user.show', $client->admin->id) }}" target="__blank">
                                                <p class="text-1100 fw-bold mb-0">
                                                    <i aria-hidden="true" class="fa fa-user-tie me-1"></i>
                                                    {{ $client->admin->name }}
                                                </p>
                                            </a>
                                        </td>

                                        {{-- Domains --}}
                                        <td class="domain white-space-nowrap text-1000 align-middle">
                                            @forelse ($client->domains->pluck('domain') as $domain)
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
                                                @canAny(['admin.client.delete.restore', 'admin.client.delete'])
                                                    <button aria-label="{{ __('Restore') }}"
                                                        class="btn btn-sm btn-reveal fs--2"
                                                        data-bs-original-title="{{ __('Restore') }}"
                                                        data-bs-toggle="tooltip" type="button"
                                                        wire:click="$dispatch('confirm', {
                                                            data: {
                                                                id: @js($client->id),
                                                                icon: '<i aria-hidden=\'true\' class=\'fa-solid fa-undo text-success\'></i>',
                                                                title: '{{ $client->name }}',
                                                                description: 'Are you sure you want to Restore this record?',
                                                                detail: '',
                                                                button_label: 'Restore',
                                                                color: 'success',
                                                                action: 'client.restore',
                                                            }
                                                        })">
                                                        <span class="fas fa-undo fs--2 text-success"></span>
                                                    </button>
                                                @endcanAny

                                                @canAny(['admin.client.delete.permanent', 'admin.client.delete'])
                                                    <button aria-label="{{ __('Permanently delete') }}"
                                                        class="btn btn-sm btn-reveal fs--2"
                                                        data-bs-original-title="{{ __('Permanently delete') }}"
                                                        data-bs-toggle="tooltip" type="button"
                                                        wire:click="$dispatch('confirm', {
                                                            data: {
                                                                id: @js($client->id),
                                                                icon: '<i aria-hidden=\'true\' class=\'fa-solid fa-trash-alt text-danger\'></i>',
                                                                title: '{{ $client->name }}',
                                                                description: 'Are you sure you want to Permanently delete this record?',
                                                                detail: '',
                                                                button_label: 'Delete Permanently',
                                                                color: 'danger',
                                                                action: 'client.delete',
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

                    @isset($trashed)
                        <!-- Pagination -->
                        {{ $trashed->links() }}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
