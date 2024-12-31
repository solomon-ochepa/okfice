<?php

namespace Modules\Role\app\Livewire\Modals;

use Livewire\Attributes\On;
use Livewire\Component;
use Modules\Role\app\Livewire\Forms\CreateForm;
use Modules\Role\App\Models\Role;

class Edit extends Component
{
    public CreateForm $form;

    public $role;

    public $class;

    public $style;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount(Role $role)
    {
        $this->role = $role;

        $this->form->setRole($role);
    }

    public function render()
    {
        return view('role::livewire.modals.edit');
    }

    #[On('role.edit')]
    public function open(Role $role)
    {
        $this->role = $role;

        $this->form->setRole($role);

        $this->class = 'show';
        $this->style = 'display: block;';
    }

    public function close()
    {
        // $this->reset();

        $this->dispatch('refresh');

        $this->dispatch('modal.close', 'editing.role');
    }

    public function update()
    {
        $this->validate();

        $this->form->update();

        session(null)->flash('status', 'Updated successful');

        $this->close();
    }
}
