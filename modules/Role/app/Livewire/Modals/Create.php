<?php

namespace Modules\Role\app\Livewire\Modals;

use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Modules\Role\App\Http\Requests\CreateRoleRequest;
use Modules\Role\App\Models\Role;

class Create extends Component
{
    public $class;

    public $style;

    #[Validate()]
    public $name;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        return view('role::livewire.modals.create');
    }

    public function getRules()
    {
        $request = new CreateRoleRequest;

        return $request->rules();
    }

    #[On('open-modal')]
    public function open()
    {
        $this->class = 'show';
        $this->style = 'display: block;';
    }

    public function close()
    {
        $this->reset();
        $this->dispatch('refresh');
    }

    public function store()
    {
        $this->validate();

        Role::firstOrCreate([
            'name' => Str::slug($this->name, '.'),
        ]);

        $this->close();
    }
}
