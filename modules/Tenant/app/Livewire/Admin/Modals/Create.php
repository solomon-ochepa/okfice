<?php

namespace Modules\Tenant\app\Livewire\Admin\Modals;

use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;
use Modules\Tenant\app\Livewire\Forms\Admin\CreateForm;
use Modules\Tenant\App\Models\Tenant;
use Modules\User\App\Models\User;

class Create extends Component
{
    public CreateForm $form;

    public $admins;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount()
    {
        $this->admins = User::all();
        $this->form->tenant = new Tenant;
    }

    public function render()
    {
        $data = [];
        $data['domain'] = config('tenancy.central_domains')[0];

        return view('tenant::livewire.admin.modals.create', $data);
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
            'user' => $tenant->admin->id,
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
