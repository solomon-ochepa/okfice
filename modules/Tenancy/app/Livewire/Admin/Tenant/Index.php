<?php

namespace Modules\Tenancy\app\Livewire\Admin\Tenant;

use App\Features\TenantDelete;
use Laravel\Pennant\Feature;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Tenancy\App\Models\Tenant;

class Index extends Component
{
    use WithPagination;

    public $limit = 15;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $data = [];
        $data['tenants'] = Tenant::paginate();
        if (Feature::active(TenantDelete::class)) {
            $data['trashed'] = Tenant::onlyTrashed()->paginate();
        }

        return view('tenancy::livewire.admin.tenant.index', $data);
    }

    #[On('tenant.trash')]
    public function trash(string $id)
    {
        Tenant::find($id)->delete();

        $this->dispatch('close-modal');

        session(null)->flash('status', 'Record trashed successfully.');

        $this->redirect(request(null)->header('referer'));
    }

    #[On('tenant.restore')]
    public function restore(string $id)
    {
        Tenant::onlyTrashed()->find($id)->restore();

        $this->dispatch('close-modal');

        session(null)->flash('status', 'Record restored successfully.');

        $this->redirect(request(null)->header('referer'));
    }

    #[On('tenant.delete')]
    public function delete(string $id)
    {
        Tenant::onlyTrashed()->find($id)->forceDelete();

        $this->dispatch('close-modal');

        session(null)->flash('status', 'Record deleted permanently.');

        $this->redirect(request(null)->header('referer'));
    }
}
