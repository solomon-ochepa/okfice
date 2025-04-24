<div>
    <x-auth::page.header :description="__('This is a secure area of the application. Please confirm your password before continuing.')" :title="__('Confirm password')" />
    <x-layouts.app.sections.header back='dashboard' class="no-border transparent position-absolute">
        @slot('title', '')
        @slot('right')
        @endslot
    </x-layouts.app.sections.header>

    <div class="section mb-5 p-2">
        <form wire:submit="confirmPassword">
            <div class="card">
                <div class="card-body pb-1">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password">{{ __('Password') }}</label>
                            <input autocomplete="new-password" autofocus class="form-control" id="password"
                                placeholder="" required type="password" wire:model="password">
                            <x-input.clear />
                            <x-input.error name="password" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-button-group transparent">
                <button class="btn btn-primary btn-block btn-lg" type="submit">{{ __('Confirm') }}</button>
            </div>
        </form>
    </div>
</div>
