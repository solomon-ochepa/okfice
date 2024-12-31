<x-app-layout>
    @slot('breadcrumbs')
        <nav aria-label="breadcrumb" class="mb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('permission.index') }}">{{ __('Permissions') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __($title ?? '') }}</li>
            </ol>
        </nav>
    @endslot

    <!-- Header -->
    <div class="row g-2 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">{!! __($title ? $title . ' &middot; Permission' : 'Permissions') !!}</h2>
        </div>
    </div>

    <div class="pb-9">
        <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="bg-soft dark__bg-1100 rounded-2 mb-4 p-4">
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="row g-4">
                            <div class="col-12 col-lg-8">
                                <h4 class="mb-2"> {{ $permission->name }} </h4>
                                <div class="fs--4 text-900 fw-semi-bold mb-0">
                                    <ul>
                                        @if ($permission->roles->isNotEmpty())
                                            @foreach ($permission->roles as $role)
                                                <li>{{ $role->name }}</li>
                                            @endforeach
                                        @else
                                            <li>No roles found for this permission</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-12 col-lg-8">
                                <h5 class="mb-2">Permission Users</h5>
                                <div class="fs--4 text-900 fw-semi-bold mb-0">
                                    <ul>
                                        @if ($permission->users->isNotempty())
                                            @foreach ($permission->users as $user)
                                                <li>{{ $user->name }}</li>
                                            @endforeach
                                        @else
                                            <li>No users found for this permission</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
