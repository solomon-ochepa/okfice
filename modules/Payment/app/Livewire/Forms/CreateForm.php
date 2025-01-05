<?php

namespace Modules\Payment\app\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Modules\Payment\App\Models\Payment;
use Modules\Payment\App\Models\PaymentMethod;
use Modules\User\App\Models\User;

class CreateForm extends Form
{
    #[Validate]
    public $bank = [
        'name' => '',
        'code' => '',
        'logo' => '',
    ];

    #[Validate]
    public $account = [
        'number' => '',
        'first_name' => '',
        'last_name' => '',
        'other_name' => '',
    ];

    protected function rules()
    {
        return [
            'bank.code' => ['required', 'numeric'],
            'account.number' => ['required', 'numeric', 'digits:10'],
        ];
    }

    /**
     * Store the record in the database.
     */
    public function store()
    {
        $this->validate();

        DB::transaction(function () {
            $user = User::find(Auth::id());

            $payment_method = PaymentMethod::firstOrCreate([
                'slug' => 'bank-transfer',
            ], [
                'name' => 'Bank Transfer',
            ]);

            $data = $this->all();
            $query = [
                'user_id' => $user->id,
                'method_id' => $payment_method->slug,
                'details' => $data,
            ];

            $payment = Payment::where([
                'details->bank->code' => $this->bank['code'],
                'details->account->number' => $this->account['number'],
                'method_id' => $payment_method->slug,
            ]);

            if ($payment->exists()) {
                $payment = $payment->first();
            } else {
                $payment = Payment::firstOrCreate($query);
            }

            if ($user->payments->count() == 1) {
                $payment->default = true;
                $payment->save();
            }
        });
    }
}
