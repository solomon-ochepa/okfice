<div class="modal fade panelbox panelbox-left" id="sidebarPanel" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pb-2 pt-2">
                    <div class="image-wrapper">
                        <img alt="image" class="imaged w36"
                            src="{{ asset('assets/app') }}/img/sample/avatar/avatar1.jpg">
                    </div>
                    <div class="in">
                        <strong>{{ auth()->user()->name }}</strong>
                        <div class="text-muted">4029209</div>
                    </div>
                    <a class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal" href="#">
                        <ion-icon name="close-outline"></ion-icon>
                    </a>
                </div>

                <!-- balance -->
                <div class="sidebar-balance">
                    <div class="listview-title">Balance</div>
                    <div class="in">
                        <h1 class="amount">N {{ number_format(auth()->user()->balance, 2) }}</h1>
                    </div>
                </div>

                <!-- action group -->
                <div class="action-group">
                    @can('accounts.deposit')
                        <a class="action-button" data-bs-target="#deposit" data-bs-toggle="modal" href="#">
                            <div class="in">
                                <div class="iconbox">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                Deposit
                            </div>
                        </a>
                    @endcan

                    @can('accounts.withdraw')
                        <a class="action-button" data-bs-target="#withdraw" data-bs-toggle="modal" href="#">
                            <div class="in">
                                <div class="iconbox">
                                    <ion-icon name="arrow-down-outline"></ion-icon>
                                </div>
                                Withdraw
                            </div>
                        </a>
                    @endcan
                </div>

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

                    <li>
                        <a class="item" href="{{ route('payments.index') }}">
                            <div class="icon-box bg-primary">
                                <ion-icon name="cash"></ion-icon>
                            </div>
                            <div class="in">
                                Payment Methods
                                <span class="badge badge-primary"></span>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- menu -->
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

                <!-- others -->
                <div class="listview-title mt-1">
                    <hr />
                </div>
                <ul class="listview flush transparent no-line image-listview">
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

                    <li>
                        <form action="{{ route('logout') }}" class="" method="POST">
                            @csrf

                            <a class="item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
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
