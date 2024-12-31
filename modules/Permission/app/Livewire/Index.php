<?php

namespace Modules\Permission\app\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Permission\App\Models\Permission;

class Index extends Component
{
    use WithPagination;

    public $limit = 15;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $data['permissions'] = Permission::paginate($this->limit);
        $data['trashed'] = Permission::onlyTrashed()->latest()->paginate($this->limit);

        return view('permission::livewire.index', $data);
    }

    public function delete($id)
    {
        $permission = Permission::findOrFail($id);

        $permission->delete();

        $this->dispatch('refresh');

        session(null)->flash('status', 'Resource trashed successfully.');
    }

    public function restore($id)
    {
        $permission = Permission::onlyTrashed()->findOrFail($id);

        $permission->restore();

        $this->dispatch('refresh');

        session(null)->flash('status', 'Resource restored successfully.');
    }

    public function permanent($id)
    {
        $permission = Permission::onlyTrashed()->findOrFail($id);

        $permission->forceDelete();

        $this->dispatch('refresh');

        session(null)->flash('status', 'Resource parmanently deleted.');
    }
}
