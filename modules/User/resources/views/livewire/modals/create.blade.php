
<div aria-hidden="true" class="modal fade{{ $class ? ' ' . $class : '' }} modalbox" data-bs-backdrop="static" id="ModalForm"
    style="{{ $style ?? 'display: none;' }}" role="dialog" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a data-bs-dismiss="modal" href="#">{{ __('Close') }}</a>
            </div>

            <form class="" wire:submit="store">
                <div class="modal-body">
                    <div class="login-form">

                        <div class="section mt-2">
                            <h1>{{ __('Create User') }}</h1>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input class="form-control" id="first_name" placeholder="{{ __('First Name') }}"
                                    type="text" wire:model="first_name" name="first_name">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            @error('first_name')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input class="form-control" id="last_name" placeholder="{{ __('Last Name') }}"
                                    type="text" wire:model="last_name" name="last_name">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            @error('last_name')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="form-control" id="username"
                                    placeholder="{{ __('Username') }}" type="text" wire:model="username" name="username">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            @error('username')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="form-control" id="phone"
                                    placeholder="{{ __('Phone') }}" type="number" wire:model="phone" name="phone">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            @error('phone')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="form-control" id="email"
                                    placeholder="{{ __('Email') }}" type="email" wire:model="email" name="email">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>

                            @error('email')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" wire:loading.attr="disabled">
                                <i aria-hidden="true" class="fa fa-paper-plane"></i>
                                {{ __('Submit') }}
                            </button>

                            <button class="btn btn-outline-primary" data-bs-dismiss="modal" type="button"
                                wire:click="refresh()">
                                {{ __('Cancel') }}
                            </button>
                        </div>
                    </div>
                </div>

                @csrf
            </form>
        </div>
    </div>
</div>

@pushIf($user == null, 'js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.addEventListener('focus-first_name', event => {
            document.getElementById('first_name').focus();
        });
    });
</script>
@endpushIf
