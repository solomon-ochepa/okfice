<div class="modal fade panelbox panelbox-left" id="sidebarPanel" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <x-sidebar.profile />

                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a class="item" href="{{ route('dashboard') }}">
                            <div class="icon-box bg-primary">
                                <ion-icon name="home"></ion-icon>
                            </div>
                            <div class="in">
                                Dashboard
                                <span class="badge badge-primary"></span>
                            </div>
                        </a>
                    </li>

                    @if (Route::has('settings'))
                        <li>
                            <x-a route="settings">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Settings
                                </div>
                            </x-a>
                        </li>
                    @endif
                </ul>

                @can('admin.dashboard')
                    <div class="listview-title mt-1">{{ __('Management') }}</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a class="item" href="{{ route('admin.dashboard') }}">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home"></ion-icon>
                                </div>
                                <div class="in">
                                    Admin
                                    <span class="badge badge-primary"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                @endcan

                <!-- others -->
                <div class="appBottomMenu d-block px-0">
                    {{-- <div class="listview-title mt-1">
                        <hr />
                    </div> --}}
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <form action="{{ route('logout') }}" class="" method="POST">
                                @csrf

                                <a class="item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <div class="icon-box bg-primary">
                                        <ion-icon class="text-light" name="log-out-outline"></ion-icon>
                                    </div>
                                    <div class="in text-small">
                                        {{ __('Log Out') }}
                                    </div>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
