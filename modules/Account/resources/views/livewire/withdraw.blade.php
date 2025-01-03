<div class="modal fade action-sheet" id="withdraw" role="dialog" tabindex="-1" wire:ignore>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Withdraw') }}</h5>
            </div>

            <div class="modal-body">
                <div class="action-sheet-content">
                    <form wire:submit="store">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="withdraw-from-account">From</label>
                                <select class="form-control custom-select" id="withdraw-from-account" required
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
                            <div class="input-wrapper">
                                <label class="label" for="withdraw-to">To</label>
                                <select class="form-control custom-select" id="withdraw-to" required
                                    wire:model.change="form.payment">
                                    <option value="">Payment method</option>
                                    @foreach ($payments ?? [] as $payment)
                                        <option value="{{ $payment->id }}">
                                            {{ $payment->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label" for="withdraw-amount">Amount</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addona1">N</span>
                                <input class="form-control" id="withdraw-amount" min="0.01"
                                    placeholder="Enter an amount" required step="0.01" type="number"
                                    wire:model="form.amount">
                            </div>
                        </div>

                        <div class="form-group basic">
                            <button class="btn btn-primary btn-block btn-lg" type="submit">
                                Withdraw
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
