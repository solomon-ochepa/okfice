<x-tenancy::layouts.app>
    @slot('title', __('Admin Dashboard'))
    <x-tenancy::layouts.app.sections.header class="bg-primary text-light">
        @slot('title', __('Admin Dashboard'))

        @slot('links')
            <x-header.notification-link />
            <x-header.user-link />
        @endslot
    </x-tenancy::layouts.app.sections.header>

    <div id="appCapsule">
        <div class="listview-title mt-2">Menu</div>
        <ul class="listview image-listview inset">
            @can('admin.user.index')
                <li>
                    <x-a route="admin.user.index">
                        <i aria-hidden="true" class="fa fa-users fa-lg me-3"></i>
                        <div class="in">
                            <div>{{ __('Users') }}</div>
                            {{-- <span class="badge badge-primary">3</span> --}}
                        </div>
                    </x-a>
                </li>
            @endcan

            @can('admin.organization.index')
                <li>
                    <x-a route="admin.organization.index">
                        <i aria-hidden="true" class="fas fa-network-wired fa-lg me-3"></i>
                        <div class="in">
                            <div>{{ __('Organizations') }}</div>
                            {{-- <span class="badge badge-primary">3</span> --}}
                        </div>
                    </x-a>
                </li>
            @endcan

            @can('admin.transaction.index')
                <li>
                    <x-a route="admin.transaction.index">
                        <i aria-hidden="true" class="fa fa-users fa-lg me-3"></i>
                        <div class="in">
                            <div>{{ __('Transactions') }}</div>
                            {{-- <span class="badge badge-primary">3</span> --}}
                        </div>
                    </x-a>
                </li>
            @endcan
        </ul>
    </div>
</x-tenancy::layouts.app>
