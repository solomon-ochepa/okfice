<div>
    <x-layouts.app.sections.header back='' class="bg-primary text-light">
        @slot('title', config('app.name'))
        @slot('links')
        @endslot
    </x-layouts.app.sections.header>

    <div class="section mt-2 text-center">
        <h1>Email Verification</h1>
        <h4 class="text-muted text-sm">
            {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
        </h4>
    </div>

    <div class="section mb-5 p-2">
        @if (session('status') == 'verification-link-sent')
            <blockquote class="text-success text-center text-sm">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </blockquote>
        @endif

        <div class="form-button-group transparent">
            <div class="col-sm-2">
                <button class="btn btn-light btn-block btn-lg" wire:click="logout">{{ __('Log out') }}</button>
            </div>
            <div class="col-sm-10">
                <button class="btn btn-primary btn-block btn-lg"
                    wire:click="sendVerification">{{ __('Resend verification email') }}</button>
            </div>
        </div>
    </div>
</div>
