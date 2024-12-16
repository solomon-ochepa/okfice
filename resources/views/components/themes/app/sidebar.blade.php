<div class="modal fade panelbox panelbox-left" id="sidebarPanel" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pb-2 pt-2">
                    <div class="image-wrapper">
                        <img alt="image" class="imaged w36"
                            src="{{ asset('assets/guest') }}/img/sample/avatar/avatar1.jpg">
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
                        <h1 class="amount">N 2,562.50</h1>
                    </div>
                </div>

                <!-- action group -->
                <div class="action-group">
                    <a class="action-button" href="#">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                            Deposit
                        </div>
                    </a>
                    <a class="action-button" href="#">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            Withdraw
                        </div>
                    </a>
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
                                Home
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
                        <div class="item">
                            <div class="in">
                                <div>
                                    Dark Mode
                                </div>
                                <div class="form-check form-switch ms-2">
                                    <input class="form-check-input dark-mode-switch" id="darkmodeSwitch"
                                        type="checkbox">
                                    <label class="form-check-label" for="darkmodeSwitch"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="item" href="#">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Settings
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item" href="#">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Log out
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
