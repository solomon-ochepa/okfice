<?php

namespace Modules\User\app\Livewire\Settings\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Form;
use Modules\User\App\Models\User;

class ProfileForm extends Form
{
    public ?string $first_name = '';

    public ?string $last_name = '';

    public ?string $username = '';

    public ?string $email = '';

    public ?string $phone = '';

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:32'],
            'last_name' => ['required', 'string', 'max:32'],
            'username' => ['required', 'string', 'max:16', 'alpha_dash', Rule::unique(User::class)->ignore(Auth::id())],
            'phone' => ['nullable', 'string', 'max:16', Rule::unique(User::class)->ignore(Auth::id())],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore(Auth::id()),
            ],
        ];
    }

    public function update()
    {
        $validated = $this->validate();
        $user = Auth::user();

        $user->fill($validated);

        // If the email address is changed, we need to set the email_verified_at field to null
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();
    }
}
