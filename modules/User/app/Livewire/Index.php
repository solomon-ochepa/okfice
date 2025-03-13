<?php

namespace Modules\User\app\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\User\App\Models\User;

class Index extends Component
{
    use WithPagination;

    public $limit = 30;

    public ?string $search = '';

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount()
    {
        $this->search = request('search');
    }

    public function render()
    {
        $data = [];
        $data['users'] = User::search($this->search)->paginate($this->limit);

        return view('user::livewire.index', $data);
    }

    #[On('page.search')]
    public function search(array $data): void
    {
        $this->search = $data['search'];
    }
}
