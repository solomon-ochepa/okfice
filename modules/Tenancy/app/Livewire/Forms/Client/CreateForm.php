<?php

namespace Modules\Tenancy\app\Livewire\Forms\Client;

use Livewire\Form;
use Modules\Tenancy\App\Http\Requests\ClientRequest;
use Modules\Tenancy\App\Models\Client;
use Modules\User\App\Models\User;

class CreateForm extends Form
{
    /**
     * A client object.
     */
    public ?Client $client;

    /**
     * Indicate if the form is being edited.
     */
    public bool $editing = false;

    /**
     * The primary admin user for the client.
     */
    public ?string $user;

    /**
     * The client name.
     */
    public ?string $name = '';

    /**
     * The client default subdomain.
     */
    public ?string $subdomain = '';

    /**
     * The client domain.
     */
    public ?string $domain = '';

    public function rules()
    {
        return (new ClientRequest($this->client->toArray()))->rules();
    }

    /**
     * Save a new client.
     */
    public function save()
    {
        $this->validate();

        // Check for unique client [name, user_id].
        $exists = Client::where([
            'name' => $this->name,
            'user_id' => $this->user,
        ])->exists();

        if ($exists) {
            // Add an error message to the form name field.
            $this->addError('name', 'Client already exists.');

            return;
        }

        // Create a new client.
        $client = Client::create([
            'name' => $this->name,
            'user_id' => $this->user,
        ]);

        // Create a new subdomain.
        $client->domains()->create([
            'domain' => $this->subdomain,
        ]);

        // Create a new domain.
        if ($this->domain) {
            $client->domains()->create([
                'domain' => $this->domain,
            ]);
        }

        $user = User::find($this->user);

        // Create client's default admin user account.
        $client->run(function () use ($user) {
            $user = $user->replicate()->save();
        });
    }

    /**
     * Update a client record.
     */
    public function update()
    {
        $this->validate();

        // Update client's information.
        $this->client->update([
            'name' => $this->name,
            'user_id' => $this->user,
        ]);

        // Update client's subdomain.
        if ($this->client->subdomain->domain !== $this->subdomain) {
            $this->client->subdomain->domain = $this->subdomain;
            $this->client->subdomain->save();
        }

        // Update client's primary domain.
        if ($this->client->domain and $this->client->domain->domain !== $this->domain) {
            $this->client->domain->domain = $this->domain;
            $this->client->domain->save();
        }
    }
}
