<?php

namespace Modules\Auth\app\Livewire;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Modules\Role\App\Models\Role;
use Modules\User\App\Models\User;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    #[Validate('required|string')]
    public string $username = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    public function render()
    {
        return view('auth::livewire.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->credentials(), $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'username' => __('auth.failed'),
            ]);
        }

        $this->permissions(Auth::user());

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'username' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->username).'|'.request()->ip());
    }

    private function credentials()
    {
        $phonePattern = '/^\+?[1-9]\d{1,14}$/';
        switch ($this->username) {
            case filter_var($this->username, FILTER_VALIDATE_EMAIL):
                return [
                    'email' => $this->username,
                    'password' => $this->password,
                ];
                break;

            case preg_match($phonePattern, $this->username):
                return [
                    'phone' => $this->username,
                    'password' => $this->password,
                ];
                break;

            default:
                return [
                    'username' => $this->username,
                    'password' => $this->password,
                ];
                break;
        }
    }

    public function permissions(User $user)
    {
        $user->assignRole(Role::findOrCreate('user'));
    }
}
