<div class="modal fade action-sheet" id="payment" role="dialog" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Payment Method') }}</h5>
            </div>

            <div class="modal-body">
                <div class="action-sheet-content">
                    <form wire:submit="store">
                        <section class="row">
                            <div class="col-md-6">
                                <!-- Payment Method -->
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="payment-method">Payment Method</label>
                                        <select @readonly(true) class="form-control custom-select" disabled
                                            id="payment-method">
                                            <option selected value="bank-deposit">Bank Deposit</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Bank -->
                                <div class="form-group basic">
                                    <label class="label" for="bank_code">Bank</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addona1">
                                            <i class="fa fa-bank" aria-hidden="true"></i>
                                        </span>
                                        <select class="form-control custom-select" id="bank_code" required
                                            wire:model.change="form.bank.code">
                                            <option value="">Bank</option>
                                            @foreach ($banks ?? [] as $code => $name)
                                                <option value="{{ $code }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('form.bank.code')
                                        <div class="form-text text-danger mt-0">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Account Number -->
                                <div class="form-group basic">
                                    <label class="label" for="account-number">Account Number</label>
                                    <input @disabled(empty($form->bank['code'])) class="form-control" id="account-number"
                                        placeholder="" required type="number"
                                        wire:model.live.debounce.3000ms="form.account.number">
                                    @error('form.account.number')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                @if (!empty($form->account['first_name']))
                                    <!-- Account Name -->
                                    <div class="form-group basic">
                                        <label class="label" for="account-name">Account Name</label>
                                        <span class="form-control">
                                            <span data-bs-tongle="tooltip"
                                                title="First name">{{ $form->account['first_name'] ?? '' }}</span>
                                            <span data-bs-tongle="tooltip"
                                                title="Other name">{{ $form->account['other_name'] ?? '' }}</span>
                                            <span data-bs-tongle="tooltip"
                                                title="Last name">{{ $form->account['last_name'] ?? '' }}</span>
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group basic">
                                <button class="btn btn-primary btn-block btn-lg" type="submit">
                                    Save
                                </button>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
