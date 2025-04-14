<div aria-hidden="true" aria-labelledby="add_client_label" class="modal fade action-sheet" data-bs-backdrop="static"
    id="add-client" role="dialog" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_client_label">
                    <i aria-hidden="true" class="fa fa-desktop"></i>
                    {{ __($form->editing ? 'Edit Client' : 'Create Client') }}
                </h5>
            </div>

            <form class="form" wire:submit="store">
                <div class="modal-body">
                    <x-alert />

                    <div class="action-sheet-content">
                        {{-- Admin --}}
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="admin">{{ __('Admin') }}</label>
                                <select class="form-control custom-select form-select" id="admin" name="admin"
                                    required wire:model="form.admin">
                                    <option value="">{{ __('Select Admin') }}</option>
                                    @foreach ($admins ?? [] as $admin)
                                        <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                    @endforeach
                                </select>
                                @error('form.admin')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Name --}}
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="name">{{ __('Name') }}</label>
                                <input class="form-control" id="name" name="name"
                                    placeholder="{{ __('Name') }}" required type="text"
                                    wire:model.change="form.name" />
                                @error('form.name')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Subdomain --}}
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="subdomain">{{ __('Subdomain') }}</label>
                                <div class="input-group">
                                    <input class="form-control" id="subdomain" name="subdomain"
                                        placeholder="{{ __('Subdomain') }}" required type="text"
                                        wire:model="form.subdomain" />

                                    <label class="label" class="input-group-text">.{{ $domain ?? 'localhost' }}</label>
                                </div>
                                @error('form.subdomain')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Domain --}}
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="domain">Domain</label>
                                <input class="form-control" id="domain" name="domain"
                                    placeholder="{{ __('Domain (optional)') }}" type="text"
                                    wire:model="form.domain" />
                                @error('form.domain')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button" wire:click="close()"
                        wire:loading.attr="disabled">
                        <i aria-hidden="true" class="fa fa-times-circle me-1"></i>
                        {{ __('Cancel') }}
                    </button>

                    <button class="btn btn-primary" type="submit" wire:loading.attr="disabled">
                        <i aria-hidden="true" class="fa fa-paper-plane me-1"></i>
                        {{ __($form->editing ? 'Update' : 'Submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
