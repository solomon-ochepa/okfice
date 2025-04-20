<?php

namespace Modules\Auth\app\Livewire\Forms;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Form;
use Modules\Role\App\Models\Role;
use Modules\User\App\Models\User;

class RegistrationForm extends Form
{
    public string $first_name = '';

    public string $last_name = '';

    public string $other_name = '';

    public string $phone = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public bool $terms = false;

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'other_name' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users,phone'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'terms' => ['accepted'],
        ];
    }

    public function store(): void
    {
        $this->password = Hash::make($this->password);

        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'other_name' => $this->other_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $user->assignRole(Role::findOrCreate('user'));

        event(new Registered($user));

        Auth::login($user);
    }
}
