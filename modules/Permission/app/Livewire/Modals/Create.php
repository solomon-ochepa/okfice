<?php

namespace Modules\Permission\app\Livewire\Modals;

use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Modules\Permission\App\Http\Requests\CreatePermissionRequest;
use Modules\Permission\App\Models\Permission;

class Create extends Component
{
    public string $class;

    public string $style;

    #[Validate()]
    public string $name;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        return view('permission::livewire.modals.create');
    }

    public function getRules()
    {
        $request = new CreatePermissionRequest;

        return $request->rules();
    }

    #[On('open-modal')]
    public function open()
    {
        $this->class = 'show';
        $this->style = 'display: block;';
    }

    public function refresh()
    {
        $this->reset();
        $this->dispatch('refresh');
    }

    public function store()
    {
        $this->validate();

        Permission::firstOrCreate([
            'name' => Str::slug($this->name, '.'),
        ]);

        $this->refresh();
    }
}
