<div class="section wallet-card-section pt-1">
    <div class="wallet-card">
        <!-- Balance -->
        <div class="balance">
            <div class="left">
                <span class="title">Total Balance</span>
                <h1 class="total">N {{ number_format($balance, 2) }}</h1>
            </div>

            <div class="right">
                @can('accounts.deposit')
                    <a class="button" data-bs-target="#deposit" data-bs-toggle="modal" href="#">
                        <ion-icon name="add-outline"></ion-icon>
                    </a>
                @endcan
            </div>
        </div>

        <!-- Wallet Footer -->
        <div class="wallet-footer">
            @can('accounts.deposit')
                <div class="item">
                    <a data-bs-target="#deposit" data-bs-toggle="modal" href="#">
                        <div class="icon-wrapper bg-primary">
                            <ion-icon name="arrow-up-outline"></ion-icon>
                        </div>
                        <strong>Deposit</strong>
                    </a>
                </div>
            @endcan

            @can('accounts.withdraw')
                <div class="item">
                    <a data-bs-target="#withdraw" data-bs-toggle="modal" href="#">
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Withdraw</strong>
                    </a>
                </div>
            @endcan

            {{-- <div class="item">
                <a href="#">
                    <div class="icon-wrapper bg-success">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>
                    <strong>Cards</strong>
                </a>
            </div> --}}
        </div>
    </div>
</div>
