<?php

namespace Modules\Tenancy\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $subdomain = $this->subdomain['domain'] ?? null;
        $domain = $this->domain['domain'] ?? null;

        return [
            'admin' => ['required', 'exists:users,id'],
            'name' => ['required', 'string', 'max:32'],
            'subdomain' => ['required', 'string', 'regex:/^[^\.]+$/', 'max:32', "unique:domains,domain,{$subdomain},domain"],
            'domain' => ['nullable', 'string', "unique:domains,domain,{$domain},domain"],
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
