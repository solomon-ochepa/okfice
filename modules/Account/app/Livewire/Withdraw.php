<?php

namespace Modules\Account\app\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Account\app\Livewire\Forms\WithdrawForm;

/**
 * Withdrawal from Savings
 * Members withdraw money from their savings.
 *
 * Debit: Members' Savings  (Liability ↓)
 * Credit: Cash/Bank        (Asset ↓)
 */
class Withdraw extends Component
{
    public WithdrawForm $form;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $data = [];
        $data['accounts'] = Auth::user()->accounts;

        return view('account::livewire.withdraw', $data);
    }

    public function store()
    {
        $this->form->store();

        $this->reset('form');
        $this->dispatch('refresh');
    }
}
