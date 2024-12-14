<?php

namespace Modules\User\App\Http\Requests;

use Modules\User\App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'min:1', 'max:32'],
            'last_name' => ['required', 'string', 'min:1', 'max:32'],
            'username' => ['required', 'string', 'min:3', 'max:32', 'unique:users'],
            'email' => ['required', 'email', 'string', 'max:128', 'unique:users'],
            'phone' => ['required', 'string', 'max:16'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = User::find(auth()->id());

        return $user->can('users.create');
    }
}
