<?php

namespace Modules\User\app\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\User\App\Models\User;

class Index extends Component
{
    use WithPagination;

    public $limit;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $data = [];
        $data['users'] = User::paginate($this->limit);

        return view('user::livewire.index', $data);
    }
}
