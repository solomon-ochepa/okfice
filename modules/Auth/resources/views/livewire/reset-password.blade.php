<div>
    <x-auth::page.header :description="__('Please enter your new password below')" :title="__('Reset password')" />
    <x-themes.app.header back='login' class="no-border transparent position-absolute">
        @slot('title', 'Reset password')
        @slot('right')
            <a class="headerButton" href="{{ route('login') }}">
                Login
            </a>
        @endslot
    </x-themes.app.header>

    <div class="section mb-5 p-2">
        <form wire:submit="resetPassword">
            <div class="card">
                <div class="card-body pb-1">
                    <!-- Email Address -->
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email">{{ __('Email') }}</label>
                            <input autocomplete="email" autofocus class="form-control" id="email" required
                                type="text" wire:model="email">
                            <x-input.clear />
                            <x-input.error name="email" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password">{{ __('Password') }}</label>
                            <input autocomplete="new-password" class="form-control" id="password" required
                                type="password" wire:model="password">
                            <x-input.clear />
                            <x-input.error name="password" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password_confirmation">{{ __('Confirm Password') }}</label>
                            <input autocomplete="new-password" class="form-control" id="password_confirmation" required
                                type="password" wire:model="password_confirmation">
                            <x-input.clear />
                            <x-input.error name="password_confirmation" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-button-group transparent">
                <button class="btn btn-primary btn-block btn-lg" type="submit">{{ __('Reset password') }}</button>
            </div>
        </form>
    </div>
</div>
