<?php

namespace Modules\Tenancy\app\Livewire\Client;

use App\Features\ClientDelete;
use Laravel\Pennant\Feature;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Tenancy\App\Models\Client;

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
        $data['clients'] = Client::paginate();
        if (Feature::active(ClientDelete::class)) {
            $data['trashed'] = Client::onlyTrashed()->paginate();
        }

        return view('tenancy::livewire.client.index', $data);
    }

    #[On('client.trash')]
    public function trash(string $id)
    {
        Client::find($id)->delete();

        $this->dispatch('close-modal');

        session(null)->flash('status', 'Record trashed successfully.');

        $this->redirect(request(null)->header('referer'));
    }

    #[On('client.restore')]
    public function restore(string $id)
    {
        Client::onlyTrashed()->find($id)->restore();

        $this->dispatch('close-modal');

        session(null)->flash('status', 'Record restored successfully.');

        $this->redirect(request(null)->header('referer'));
    }

    #[On('client.delete')]
    public function delete(string $id)
    {
        Client::onlyTrashed()->find($id)->forceDelete();

        $this->dispatch('close-modal');

        session(null)->flash('status', 'Record deleted permanently.');

        $this->redirect(request(null)->header('referer'));
    }
}
