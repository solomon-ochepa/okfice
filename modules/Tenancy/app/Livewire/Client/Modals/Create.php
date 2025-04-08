<?php

namespace Modules\Tenancy\app\Livewire\Client\Modals;

use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;
use Modules\Tenancy\app\Livewire\Forms\Client\CreateForm;
use Modules\Tenancy\App\Models\Client;
use Modules\User\App\Models\User;

class Create extends Component
{
    public CreateForm $form;

    public $users;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount()
    {
        $this->users = User::all();
        $this->form->client = new Client;
    }

    public function render()
    {
        $data = [];
        $data['domain'] = config('tenancy.central_domains')[0];

        return view('tenancy::livewire.client.modals.create', $data);
    }

    public function close()
    {
        $this->form->reset();
        $this->resetErrorBag();
        $this->dispatch('close-modal', 'add-client');
        $this->dispatch('refresh');
    }

    public function updatedFormName()
    {
        $this->form->subdomain = Str::slug($this->form->name);
    }

    /**
     * Edit an existing client.
     */
    #[On('client.edit')]
    public function edit(Client $client)
    {
        $this->form->editing = true;
        $this->form->client = $client;

        $this->form->fill([
            'user' => $client->user->id,
            'name' => $client->name,
            'subdomain' => $client->subdomain?->domain,
            'domain' => $client->domain?->domain,
        ]);

        $this->dispatch('open-modal', 'add-client');
    }

    public function store()
    {
        if ($this->form->editing) {
            $this->form->update();
        } else {
            $this->form->save();
        }

        $this->close();
    }
}
