<div>
    <x-auth::page.header :description="__('Access the full app as a user')" :title="__('Log in')" />
    <x-layouts.app.sections.header back='home' class="no-border transparent position-absolute">
        @slot('title', config('app.name'))
        @slot('links')
            <div>
                @if (Route::has('register'))
                    <i aria-hidden="true" class="fa fa-user-plus"></i>
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </div>
        @endslot
    </x-layouts.app.sections.header>

    <div class="section mb-5 p-2">
        <form wire:submit="login">
            <div class="card">
                <div class="card-body pb-1">
                    <!-- Username -->
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="username">Username</label>
                            <input :value="old('email')" autocomplete="username" autofocus class="form-control"
                                id="username" name="username" placeholder="username, email, phone, ..." required
                                type="text" wire:model="username">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            @error('username')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password">{{ __('Password') }}</label>
                            <input autocomplete="current-password" class="form-control" id="password" name="password"
                                required type="password" wire:model="password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            @error('password')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="mt-1 block">
                        <label class="" for="remember_me">
                            <input class="" id="remember_me" name="remember" type="checkbox"
                                wire:model="remember">
                            <span class="ms-1">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-links mt-2">
                @if (Route::has('password.request'))
                    <div>
                        <a class="text-muted" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif
            </div>

            <div class="form-button-group transparent">
                <button class="btn btn-primary btn-block btn-lg" type="submit">Log in</button>
            </div>
        </form>
    </div>
</div>
