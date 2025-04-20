<?php

namespace Modules\Auth\app\Livewire;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class ForgotPassword extends Component
{
    public string $username = '';

    public function render()
    {
        return view('auth::livewire.forgot-password');
    }

    /**
     * Send a password reset link to the provided username.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'username' => ['required', 'string', 'min:3'],
        ]);

        Password::sendResetLink(username($this->username));

        session()->flash('status', __('A reset link will be sent if the account exists.'));
    }
}
