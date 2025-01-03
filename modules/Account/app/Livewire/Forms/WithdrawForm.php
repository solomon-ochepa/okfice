<?php

namespace Modules\Account\app\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Form;
use Modules\Account\App\Models\Account;
use Modules\Transaction\App\Models\Transaction;
use Modules\Transaction\App\Models\TransactionType;

/**
 * Withdrawal from Savings
 * Members withdraw money from their savings.
 *
 * Debit: Members' Savings  (Liability ↓)
 * Credit: Cash/Bank        (Asset ↓)
 */
class WithdrawForm extends Form
{
    public string $account;

    public string $payment;

    public float $amount;

    public function __construct()
    {
        // ...
    }

    public function rules()
    {
        return [
            'account' => ['required', 'uuid', 'exists:accounts,number'],
            'amount' => ['required', 'numeric', 'min:0.01'],
        ];
    }

    public function store()
    {
        // Create a unique transaction session
        if (! request()->session()->has('transaction.session_id')) {
            session(['transaction.session_id' => Str::uuid()->toString()]);
        }

        DB::transaction(function () {
            // Set the transaction type
            $type_id = (TransactionType::firstOrCreate(['name' => 'Withdraw']))->id;

            // Store the transaction
            $transaction = Transaction::firstOrCreate([
                'type_id' => $type_id,
                'session_id' => session('transaction.session_id'),
                'created_by' => Auth::id(),
            ], [
                'description' => 'Withdraw from Savings account.',
            ]);

            // Debit: Members' Savings  (Liability ↓)
            $transaction->entries()->firstOrCreate([
                'account_id' => $this->account,
            ], [
                'amount' => $this->amount,
                'type' => 'dr',
            ]);

            // Credit: Cash/Bank    (Asset ↓)
            $cash_account = (Account::firstWhere(['name' => 'cash', 'primary' => 1]))->id;
            $transaction->entries()->firstOrCreate([
                'account_id' => $cash_account,
            ], [
                'type' => 'cr',
                'amount' => $this->amount,
            ]);
        });

        Session::forget('transaction.session_id');
    }
}
