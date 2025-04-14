<?php

namespace Modules\Tenancy\app\Livewire\Admin\Client;

use Livewire\Attributes\On;
use Livewire\Component;
use Modules\Tenancy\App\Models\Client;
use Stancl\Tenancy\Events\TenantCreated;

class Show extends Component
{
    public $client;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount(Client $client)
    {
        $this->client = $client;
    }

    public function render()
    {
        return view('tenancy::livewire.admin.client.show');
    }

    #[On('client.trash')]
    public function trash(string $id, array $data)
    {
        Client::find($id)->delete();

        $this->dispatch('close-modal');

        session(null)->flash('status', 'Record trashed successfully.');

        $url = isset($data['redirect']) ? $data['redirect'] : route('admin.client.index');
        $this->redirect($url);
    }

    public function create_database(): void
    {
        event(new TenantCreated($this->client));

        session()->flash('status', 'Client updated!');
    }
}
