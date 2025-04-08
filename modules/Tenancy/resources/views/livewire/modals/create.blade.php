<div aria-hidden="true" aria-labelledby="staticBackdropLabel" class="modal fade" data-bs-backdrop="static" id="add-client"
    tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="staticBackdropLabel">
                    <i aria-hidden="true" class="fa fa-desktop"></i>
                    {{ __($form->editing ? 'Edit Client' : 'Create Client') }}
                </h5>

                <button aria-label="{{ __('Close') }}" class="btn p-1" data-bs-dismiss="modal" type="button"
                    wire:click="close()">
                    <span class="fas fa-times fs--1 text-white"></span>
                </button>
            </div>

            <form class="form" wire:submit="store">
                <div class="modal-body">
                    <x-alert />

                    <div class="row g-3">
                        {{-- User --}}
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <label data-bs-toggle="tooltip" for="user" title="{{ __('User') }}">
                                        <i aria-hidden="true" class="fa fa-user-tie"></i>
                                    </label>
                                </span>

                                <select class="form-select" id="user" name="user" required
                                    wire:model="form.user">
                                    <option value="">Select User</option>
                                    @foreach ($users ?? [] as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('form.user')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Name --}}
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <label data-bs-toggle="tooltip" for="name" title="{{ __('Business Name') }}">
                                        <i aria-hidden="true" class="fa fa-desktop"></i>
                                    </label>
                                </span>
                                <input class="form-control" id="name" name="name"
                                    placeholder="{{ __('Name') }}" required type="text"
                                    wire:model.change="form.name" />
                            </div>
                            @error('form.name')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Subdomain --}}
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <label data-bs-toggle="tooltip" for="subdomain" title="{{ __('Subdomain') }}">
                                        <i aria-hidden="true" class="fa fa-globe"></i>
                                    </label>
                                </span>

                                <input class="form-control" id="subdomain" name="subdomain"
                                    placeholder="{{ __('Subdomain') }}" required type="text"
                                    wire:model="form.subdomain" />

                                <label class="input-group-text">.{{ $domain ?? 'localhost' }}</label>
                            </div>
                            @error('form.subdomain')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Domain --}}
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <label data-bs-toggle="tooltip" for="domain" title="{{ __('Domain') }}">
                                        <i aria-hidden="true" class="fa fa-globe"></i></label>
                                </span>

                                <input class="form-control" id="domain" name="domain"
                                    placeholder="{{ __('Domain (optional)') }}" type="text"
                                    wire:model="form.domain" />
                            </div>
                            @error('form.domain')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-bs-dismiss="modal" type="button" wire:click="close()"
                        wire:loading.attr="disabled">
                        <i aria-hidden="true" class="fa fa-times-circle"></i>
                        {{ __('Cancel') }}
                    </button>

                    <button class="btn btn-primary" type="submit" wire:loading.attr="disabled">
                        <i aria-hidden="true" class="fa fa-paper-plane"></i>
                        {{ __($form->editing ? 'Update' : 'Submit') }}
                    </button>
                </div>

                @csrf
            </form>
        </div>
    </div>
</div>
