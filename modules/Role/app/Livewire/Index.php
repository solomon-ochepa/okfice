<?php

namespace Modules\Role\app\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Role\App\Models\Role;

class Index extends Component
{
    use WithPagination;

    public $open = false;

    public $search = '';

    public $filter_guard = '';

    public $show_trashed = false;

    public string $edit_role = '';

    public $limit = 15;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $query = Role::query()
            ->when($this->search, fn ($query) => $query->where('name', 'like', '%'.$this->search.'%'))
            ->when($this->filter_guard, fn ($query) => $query->where('guard_name', '%'.$this->filter_guard.'%'))
            ->when($this->show_trashed, fn ($query) => $query->onlyTrashed())
            ->orderBy('name');

        $data = [];
        $data['roles'] = $query->paginate($this->limit);
        $data['trashed'] = Role::onlyTrashed()->latest()->paginate($this->limit);

        return view('role::livewire.index', $data);
    }

    public function trash(Role $role)
    {
        $role->delete();

        $this->dispatch('refresh');

        session(null)->flash('status', 'Resource trashed successfully.');
    }

    public function restore($id): void
    {
        $role = Role::onlyTrashed()->findorFail($id);

        $role->restore();

        $this->dispatch('refresh');

        session(null)->flash('status', 'Resource restored successfully.');
    }

    public function permanent($id): void
    {
        $role = Role::onlyTrashed()->findorFail($id);

        $role->forceDelete();

        $this->dispatch('refresh');

        session(null)->flash('status', 'Resource Parmanently Deleted.');
    }

    public function edit($id)
    {
        $this->dispatch('role.edit', $id);

        $this->open = true;
    }

    #[On('close')]
    public function close()
    {
        $this->open = false;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingGuard()
    {
        $this->resetPage();
    }

    public function updatingShowTrashed()
    {
        $this->resetPage();
    }
}
