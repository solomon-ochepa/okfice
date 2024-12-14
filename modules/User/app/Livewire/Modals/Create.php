<?php

namespace Modules\User\app\Livewire\Modals;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Modules\User\App\Http\Requests\CreateUserRequest;
use Modules\User\App\Models\User;

class Create extends Component
{
    public $class;

    public $style;

    #[Validate()]
    public $first_name;

    #[Validate()]
    public $last_name;

    #[Validate()]
    public $username;

    #[Validate]
    public $email;

    #[Validate]
    public $phone;

    public $user;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        return view('user::livewire.modals.create');
    }

    public function getRules()
    {
        $request = new CreateUserRequest;

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

        User::firstOrCreate([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        $this->refresh();

        session()->flash('status', 'User record created sucessfully.');
    }
}
