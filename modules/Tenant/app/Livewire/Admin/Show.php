<?php

namespace Modules\Tenant\app\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;
use Modules\Tenant\App\Models\Tenant;
use Stancl\Tenancy\Events\TenantCreated;

class Show extends Component
{
    public $tenant;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }

    public function render()
    {
        return view('tenant::livewire.admin.show');
    }

    #[On('tenant.trash')]
    public function trash(string $id, array $data)
    {
        Tenant::find($id)->delete();

        $this->dispatch('close-modal');

        session(null)->flash('status', 'Record trashed successfully.');

        $url = isset($data['redirect']) ? $data['redirect'] : route('admin.tenant.index');
        $this->redirect($url);
    }

    public function create_database(): void
    {
        event(new TenantCreated($this->tenant));

        session()->flash('status', 'Client updated!');
    }
}
