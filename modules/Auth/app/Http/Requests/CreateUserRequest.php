<?php

namespace Modules\Auth\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

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
            'phone' => ['required', 'string', 'max:16', 'unique:users'],
            'username' => ['nullable', 'string', 'min:3', 'max:32', 'unique:users'],
            'email' => ['nullable', 'email', 'string', 'max:128', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
