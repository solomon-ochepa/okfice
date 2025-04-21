<x-layouts.app>
    @slot('title', __('Admin Dashboard'))
    <x-themes.app.header class="bg-primary text-light">
        @slot('title', __('Admin Dashboard'))

        @slot('right')
            <a class="headerButton" href="#">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                {{-- <span class="badge badge-danger">0</span> --}}
            </a>

            <a class="headerButton" href="#">
                <img alt="image" class="imaged w32" src="{{ asset('assets/app') }}/img/sample/avatar/avatar1.jpg">
                {{-- <span class="badge badge-danger">0</span> --}}
            </a>
        @endslot
    </x-themes.app.header>

    <div id="appCapsule">
        <div class="listview-title mt-2">Links</div>
        <ul class="listview image-listview inset">
            @can('admin.tenant.index')
                <li>
                    <x-a class="item" route="admin.tenant.index">
                        <i aria-hidden="true" class="fas fa-network-wired image"></i>
                        <div class="in">
                            <div>{{ __('Clients') }}</div>
                            {{-- <span class="badge badge-primary">3</span> --}}
                        </div>
                    </x-a>
                </li>
            @endcan

            @can('admin.user.index')
                <li>
                    <x-a class="item" route="admin.user.index">
                        <i aria-hidden="true" class="fa fa-users image"></i>
                        <div class="in">
                            <div>{{ __('Users') }}</div>
                            {{-- <span class="badge badge-primary">3</span> --}}
                        </div>
                    </x-a>
                </li>
            @endcan

            @can('admin.transactions.index')
                <li>
                    <x-a class="item" route="admin.transaction.index">
                        <i aria-hidden="true" class="fa fa-users image"></i>
                        <div class="in">
                            <div>{{ __('Transactions') }}</div>
                            {{-- <span class="badge badge-primary">3</span> --}}
                        </div>
                    </x-a>
                </li>
            @endcan

        </ul>
    </div>
</x-layouts.app>
