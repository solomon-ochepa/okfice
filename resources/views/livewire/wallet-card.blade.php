<div class="section wallet-card-section pt-1">
    <div class="wallet-card">
        <!-- Balance -->
        <div class="balance">
            <div class="left">
                <span class="title">Total Balance</span>
                <h1 class="total">$ 2,562.50</h1>
            </div>
            <div class="right">
                <a class="button" data-bs-target="#depositActionSheet" data-bs-toggle="modal" href="#">
                    <ion-icon name="add-outline"></ion-icon>
                </a>
            </div>
        </div>

        <!-- Wallet Footer -->
        <div class="wallet-footer">
            <div class="item">
                <a data-bs-target="#depositActionSheet" data-bs-toggle="modal" href="#">
                    <div class="icon-wrapper bg-primary">
                        <ion-icon name="arrow-up-outline"></ion-icon>
                    </div>
                    <strong>Deposit</strong>
                </a>
            </div>

            <div class="item">
                <a data-bs-target="#withdrawActionSheet" data-bs-toggle="modal" href="#">
                    <div class="icon-wrapper bg-danger">
                        <ion-icon name="arrow-down-outline"></ion-icon>
                    </div>
                    <strong>Withdraw</strong>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="icon-wrapper bg-success">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>
                    <strong>Cards</strong>
                </a>
            </div>
        </div>
    </div>
</div>

@push('modals')
    <!-- Deposit Action -->
    <div class="modal fade action-sheet" id="depositActionSheet" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Balance</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">From</label>
                                    <select class="form-control custom-select" id="account1">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addona1">$</span>
                                    <input class="form-control" placeholder="Enter an amount" type="text" value="100">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal"
                                    type="button">Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Withdraw Action -->
    <div class="modal fade action-sheet" id="withdrawActionSheet" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Withdraw Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2d">From</label>
                                    <select class="form-control custom-select" id="account2d">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text11d">To</label>
                                    <input class="form-control" id="text11d" placeholder="Enter IBAN" type="email">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addonb1">$</span>
                                    <input class="form-control" placeholder="Enter an amount" type="text"
                                        value="100">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal"
                                    type="button">Withdraw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
