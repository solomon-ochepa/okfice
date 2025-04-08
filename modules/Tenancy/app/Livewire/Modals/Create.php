<?php

namespace Modules\Tenancy\app\Livewire\Modals;

use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;
use Modules\Tenancy\app\Livewire\Forms\CreateForm;
use Modules\Tenancy\App\Models\Tenant;
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
        $this->form->tenant = new Tenant;
    }

    public function render()
    {
        $data = [];
        $data['domain'] = config('tenancy.central_domains')[0];

        return view('tenancy::livewire.modals.create', $data);
    }

    public function close()
    {
        $this->form->reset();
        $this->resetErrorBag();
        $this->dispatch('close-modal', 'add-tenant');
        $this->dispatch('refresh');
    }

    public function updatedFormName()
    {
        $this->form->subdomain = Str::slug($this->form->name);
    }

    /**
     * Edit an existing tenant.
     */
    #[On('tenant.edit')]
    public function edit(Tenant $tenant)
    {
        $this->form->editing = true;
        $this->form->tenant = $tenant;

        $this->form->fill([
            'user' => $tenant->user->id,
            'name' => $tenant->name,
            'subdomain' => $tenant->subdomain?->domain,
            'domain' => $tenant->domain?->domain,
        ]);

        $this->dispatch('open-modal', 'add-tenant');
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
