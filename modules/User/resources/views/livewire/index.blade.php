<div id="appCapsule">
    <div class="section -full mt-4">
        <div class="section-heading -padding">
            <h2 class="title">Users Management</h2>
            <a class="link" href="#">Add New</a>
        </div>

        <div class="mb-3">
            <input class="form-control" name="search" placeholder="Search user ..." type="search" />
        </div>

        <div class="row g-3 mb-4">
            @forelse ($users ?? [] as $user)
                <div class="col-sm-2">
                    <a href="{{ route('admin.user.show', ['user' => $user->id]) }}">
                        <div class="user-card">
                            <img alt="img" class="imaged w-100"
                                src="{{ asset('assets/app') }}/img/sample/avatar/avatar2.jpg">
                            <strong>{{ $user->name }}</strong>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-sm-2">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar2.jpg">
                        <strong>Jurrien</strong>
                    </div>
                </div>
            @endforelse

            {{-- <div class="col-sm-2">
                <a href="#">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar3.jpg">
                        <strong>Elwin</strong>
                    </div>
                </a>
            </div> --}}

            {{-- <div class="col-sm-2">
                <a href="#">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar4.jpg">
                        <strong>Alma</strong>
                    </div>
                </a>
            </div> --}}

            {{-- <div class="col-sm-2">
                <a href="#">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar5.jpg">
                        <strong>Justine</strong>
                    </div>
                </a>
            </div> --}}

            {{-- <div class="col-sm-2">
                <a href="#">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar6.jpg">
                        <strong>Maria</strong>
                    </div>
                </a>
            </div> --}}

            {{-- <div class="col-sm-2">
                <a href="#">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar7.jpg">
                        <strong>Pamela</strong>
                    </div>
                </a>
            </div> --}}

            {{-- <div class="col-sm-2">
                <a href="#">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar8.jpg">
                        <strong>Neville</strong>
                    </div>
                </a>
            </div> --}}

            {{-- <div class="col-sm-2">
                <a href="#">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar9.jpg">
                        <strong>Alex</strong>
                    </div>
                </a>
            </div> --}}

            {{-- <div class="col-sm-2">
                <a href="#">
                    <div class="user-card">
                        <img alt="img" class="imaged w-100"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar10.jpg">
                        <strong>Stina</strong>
                    </div>
                </a>
            </div> --}}
        </div>
    </div>

    {{-- <div class="section full mb-2 mt-1">
        <div class="section-title">
            <h1>Users</h1>
        </div>

        <div id="myTabContent">
            <div aria-labelledby="all-tab" class="wide-block p-0"
                data-list='{"valueNames":["name","username", "phone", email],"page","pagination":true}' id="all"
                user="tabpanel">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-uppercase">
                            <tr>
                                <th class="white-space-nowrap fs--1 ps-0 align-middle">
                                    <div class="form-check fs-0 mb-0">
                                        <input class="form-check-input" data-bulk-select='{"body":"users-table-body"}'
                                            id="checkbox-bulk-customers-select" type="checkbox" />
                                    </div>
                                </th>

                                <th data-sort="name" scope="col">
                                    {{ __('Name') }}
                                </th>

                                <th data-sort="username" scope="col">
                                    {{ __('Username') }}
                                </th>

                                <th data-sort="phone" scope="col">
                                    {{ __('Phone') }}
                                </th>

                                <th data-sort="email" scope="col">
                                    {{ __('Email') }}
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users ?? [] as $user)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static"
                                    wire:key="{{ $user->id }}">
                                    <td>
                                        <div class="form-check fs-0 mb-0">
                                            <input class="form-check-input"
                                                data-bulk-select-row='@json($user)' type="checkbox" />
                                        </div>
                                    </td>

                                    <td class="name white-space-nowrap text-1000 align-middle">
                                        {{ $user->name }}
                                    </td>

                                    <td class="username white-space-nowrap text-1000 align-middle">
                                        {{ $user->username }}
                                    </td>

                                    <td class="phone white-space-nowrap text-1000 align-middle">
                                        {{ $user->phone }}
                                    </td>

                                    <td class="email white-space-nowrap text-1000 align-middle">
                                        {{ $user->email ?? '' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="section full mb-2 mt-2 text-right">
                    <button class="btn btn-icon btn-lg btn-primary mb-1 me-1" data-bs-target="#ModalForm"
                        data-bs-toggle="modal" type="button" wire:click="$dispatch('open-modal')">
                        <ion-icon name="add-outline"></ion-icon>
                    </button>
                    @push('modals')
                        <livewire:user::modals.create />
                    @endpush
                </div>
            </div>
        </div>
    </div> --}}
</div>
