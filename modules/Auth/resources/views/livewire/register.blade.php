<div>
    <x-auth::page.header :description="__('Create an account for free!')" :title="__('Register now')" />

    {{-- @slot('title', 'Register') --}}
    <x-themes.app.header class="no-border transparent position-absolute">
        @slot('back', 'home')
        @slot('title', '')
        @slot('right')
            <a class="headerButton" href="{{ route('login') }}">
                Login
            </a>
        @endslot
    </x-themes.app.header>

    <div class="section mb-5 p-2">
        <form wire:submit="register">
            <div class="card">
                <div class="card-body">
                    <!-- Names -->
                    <div class="row">
                        <!-- First Name -->
                        <div class="col-sm-4">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="first_name">{{ __('First Name') }}
                                        <x-input.required /></label>
                                    <input autocomplete="first_name" autofocus class="form-control" id="first_name"
                                        name="first_name" required type="text" wire:model="form.first_name" />

                                    <x-input.clear />
                                    <x-input.error name="form.first_name" />
                                </div>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="col-sm-4">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="last_name">{{ __('Last Name') }}
                                        <x-input.required /></label>
                                    <input class="form-control" id="last_name" name="last_name" required type="text"
                                        wire:model="form.last_name" />

                                    <x-input.clear />
                                    <x-input.error name="form.last_name" />
                                </div>
                            </div>
                        </div>

                        <!-- Other Name -->
                        <div class="col-sm-4">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="other_name">{{ __('Other Name') }}</label>
                                    <input class="form-control" id="other_name" name="other_name" type="text"
                                        wire:model="form.other_name" />

                                    <x-input.clear />
                                    <x-input.error name="form.other_name" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="row">
                        <!-- Phone -->
                        <div class="col-sm-4">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="phone">{{ __('Phone') }}
                                        <x-input.required /></label>
                                    <input class="form-control" id="phone" name="phone" required type="tel"
                                        wire:model="form.phone" />

                                    <x-input.clear />
                                    <x-input.error name="form.phone" />
                                </div>
                            </div>
                        </div>

                        <!-- E-mail -->
                        <div class="col-sm-8">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email">{{ __('Email') }}</label>
                                    <input class="form-control" id="email" name="email" type="email"
                                        wire:model="form.email" />

                                    <x-input.clear />
                                    <x-input.error name="form.email" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="password">{{ __('Password') }}
                                        <x-input.required /></label>
                                    <input autocomplete="off" class="form-control" id="password" name="password"
                                        required type="password" wire:model="form.password" />

                                    <x-input.clear />
                                    <x-input.error name="form.password" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="password-confirmation">{{ __('Confirm Password') }}
                                        <x-input.required /></label>
                                    <input autocomplete="off" class="form-control" id="password-confirmation"
                                        name="password_confirmation" type="password"
                                        wire:model="form.password_confirmation">

                                    <x-input.clear />
                                    <x-input.error name="form.password_confirmation" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mb-1 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" id="customCheckb1" required type="checkbox"
                                wire:model="form.terms">
                            <label class="form-check-label" for="customCheckb1">
                                I agree to the <a data-bs-target="#termsModal" data-bs-toggle="modal" href="#">
                                    terms and conditions
                                </a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-button-group transparent">
                <button class="btn btn-primary btn-block btn-lg" type="submit">{{ __('Register') }}</button>
            </div>
        </form>
    </div>

    @pushOnce('modals')
        <!-- Terms and Conditions -->
        <div class="modal fade modalbox" id="termsModal" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Terms and Conditions</h5>
                        <a data-bs-dismiss="modal" href="#">Close</a>
                    </div>

                    <div class="modal-body">
                        <p>
                            ...
                        </p>
                        <p>
                            ...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endPushOnce
</div>
