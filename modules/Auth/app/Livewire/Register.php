<?php

namespace Modules\Auth\app\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Auth\app\Livewire\Forms\RegistrationForm;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public RegistrationForm $form;

    public function render()
    {
        return view('auth::livewire.register');
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $this->validate();

        $this->form->store();

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}
