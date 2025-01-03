<div class="modal fade action-sheet" id="deposit" role="dialog" tabindex="-1" wire:ignore>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Deposit') }}</h5>
            </div>

            <div class="modal-body">
                <div class="action-sheet-content">
                    <form wire:submit="store">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="account">To</label>
                                <select class="form-control custom-select" id="account" required
                                    wire:model.change="form.account">
                                    <option value="">Account</option>
                                    @foreach ($accounts ?? [] as $account)
                                        <option value="{{ $account->id }}">
                                            {{ $account->name }} ({{ $account->number }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label" for="deposit-amount">Amount</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addona1">N</span>
                                <input class="form-control" id="deposit-amount" min="0.01"
                                    placeholder="Enter an amount" required step="0.01" type="number"
                                    wire:model="form.amount">
                            </div>
                        </div>

                        <div class="form-group basic">
                            <button class="btn btn-primary btn-block btn-lg" type="submit">
                                Deposit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
