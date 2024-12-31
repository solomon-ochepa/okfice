<?php

namespace Modules\Role\app\Livewire\Forms;

use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Modules\Role\App\Http\Requests\UpdateRoleRequest;
use Modules\Role\App\Models\Role;

class CreateForm extends Form
{
    public ?Role $role;

    #[Validate]
    public ?string $name;

    #[Validate]
    public ?string $guard_name;

    public function setRole(Role $role)
    {
        $this->role = $role;

        $this->name = $role->name;
        $this->guard_name = $role->guard_name;
    }

    public function getRules()
    {
        $request = new UpdateRoleRequest($this->role->only(['id', 'name', 'guard_name']));

        return $request->rules();
    }

    public function update()
    {
        $this->validate();

        $this->role->update([
            'name' => Str::slug($this->name, '.'),
            'guard_name' => $this->guard_name,
        ]);
    }
}
