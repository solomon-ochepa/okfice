<x-app-layout>
    @slot('breadcrumbs')
        <nav aria-label="breadcrumb" class="mb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('role.index') }}">{{ __('Roles') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __($title ?? '') }}</li>
            </ol>
        </nav>
    @endslot

    <div class="pb-9">
        <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-12 col-md-auto">
                <h2 class="mb-0">{{ __('Role details') }}</h2>
            </div>
        </div>

        <div class="bg-soft dark__bg-1100 rounded-2 mb-4 p-4">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="row g-4">
                        <div class="col-12 col-lg-8">
                            <h2 class="mb-2"> {{ $role->name }} </h2>

                            <h4 class="mb-2"> Permissions </h4>
                            <div class="fs--4 text-900 fw-semi-bold mb-0">
                                <ul>
                                    @forelse ($permissions ?? [] as $permission)
                                        <li>{{ $permission->name }}</li>
                                    @empty
                                        <li>No permissions found for this role</li>
                                    @endforelse
                                </ul>
                            </div>

                             <h4 class="mb-2"> Users </h4>
                            <div class="fs--4 text-900 fw-semi-bold mb-0">
                                <ul>
                                    @forelse ($users ?? [] as $user)
                                        <li>{{ $user->name }}</li>
                                    @empty
                                        <li>No user found for this role</li>
                                    @endforelse
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
