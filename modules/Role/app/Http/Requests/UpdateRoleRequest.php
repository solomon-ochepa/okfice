<?php

namespace Modules\Role\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'form.name' => [
                'required',
                'string',
                'min:3',
                'max:16',
                Rule::unique('roles', 'name')
                    ->where(fn ($query) => $query->where('guard_name', $this->guard_name))
                    ->ignore($this->id),
            ],
            'form.guard_name' => ['nullable', 'string', 'max:16', 'in:web,api'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()->can('roles.update');
    }
}
