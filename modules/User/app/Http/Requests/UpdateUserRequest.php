<?php

namespace Modules\User\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\User\App\Models\User;

class UpdateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'form.first_name' => ['required', 'string', 'min:1', 'max:32'],
            'form.last_name' => ['required', 'string', 'min:1', 'max:32'],
            'form.username' => ['required', 'string', 'min:3', 'max:16', "unique:users,username,{$this->username},username"],
            'form.phone' => ['required', 'string', 'max:14'],
            'form.email' => ['required', 'email', 'string', 'max:128', "unique:users,email,{$this->email},email"],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        $user = User::find(auth()->id());

        return $user->can('users.create');
    }
}
