<?php

namespace Modules\Tenancy\app\Livewire\Forms;

use Livewire\Form;
use Modules\Tenancy\App\Http\Requests\TenantRequest;
use Modules\Tenancy\App\Models\Tenant;
use Modules\User\App\Models\User;

class CreateForm extends Form
{
    /**
     * A tenant object.
     */
    public ?Tenant $tenant;

    /**
     * Indicate if the form is being edited.
     */
    public bool $editing = false;

    /**
     * The primary admin user for the tenant.
     */
    public ?string $user;

    /**
     * The tenant name.
     */
    public ?string $name = '';

    /**
     * The tenant default subdomain.
     */
    public ?string $subdomain = '';

    /**
     * The tenant domain.
     */
    public ?string $domain = '';

    public function rules()
    {
        return (new TenantRequest($this->tenant->toArray()))->rules();
    }

    /**
     * Save a new tenant.
     */
    public function save()
    {
        $this->validate();

        // Check for unique tenant [name, user_id].
        $exists = Tenant::where([
            'name' => $this->name,
            'user_id' => $this->user,
        ])->exists();

        if ($exists) {
            // Add an error message to the form name field.
            $this->addError('name', 'Tenant already exists.');

            return;
        }

        // Create a new tenant.
        $tenant = Tenant::create([
            'name' => $this->name,
            'user_id' => $this->user,
        ]);

        // Create a new subdomain.
        $tenant->domains()->create([
            'domain' => $this->subdomain,
        ]);

        // Create a new domain.
        if ($this->domain) {
            $tenant->domains()->create([
                'domain' => $this->domain,
            ]);
        }

        $user = User::find($this->user);

        // Create tenant's default admin user account.
        $tenant->run(function () use ($user) {
            $user = $user->replicate()->save();
        });
    }

    /**
     * Update a tenant record.
     */
    public function update()
    {
        $this->validate();

        // Update tenant's information.
        $this->tenant->update([
            'name' => $this->name,
            'user_id' => $this->user,
        ]);

        // Update tenant's subdomain.
        if ($this->tenant->subdomain->domain !== $this->subdomain) {
            $this->tenant->subdomain->domain = $this->subdomain;
            $this->tenant->subdomain->save();
        }

        // Update tenant's primary domain.
        if ($this->tenant->domain and $this->tenant->domain->domain !== $this->domain) {
            $this->tenant->domain->domain = $this->domain;
            $this->tenant->domain->save();
        }
    }
}
