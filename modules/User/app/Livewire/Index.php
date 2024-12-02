<?php

namespace Modules\User\app\Livewire;

use Modules\User\App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $users;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('user::livewire.index');
    }
}
