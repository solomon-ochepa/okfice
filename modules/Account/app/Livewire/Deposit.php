<?php

namespace Modules\Account\app\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Account\app\Livewire\Forms\DepositForm;

/**
 * Savings Deposit
 * Members deposit money towards specific savings goals.
 *
 * Debit: Cash/Bank         (Asset ↑)
 * Credit: Members' Savings (Liability ↑)
 */
class Deposit extends Component
{
    public DepositForm $form;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $data = [];
        $data['accounts'] = Auth::user()->accounts;

        return view('account::livewire.deposit', $data);
    }

    public function store()
    {
        $this->form->store();

        $this->reset('form');
        $this->dispatch('refresh');
    }
}
