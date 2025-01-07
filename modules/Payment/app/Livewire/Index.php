<?php

namespace Modules\Payment\app\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;
use Modules\Payment\App\Models\Payment;
use Modules\User\App\Models\User;

class Index extends Component
{
    protected $listeners = ['refresh' => 'refresh'];

    public function render()
    {
        $data = [];
        $data['payments'] = User::find(Auth::id())->payments()->withTrashed()->get();

        return view('payment::livewire.index', $data);
    }

    public function close()
    {
        $this->dispatch('refresh');
    }

    #[On('payments.trash')]
    public function trash(Payment $payment)
    {
        DB::transaction(function () use ($payment) {
            $payment->update(['default' => null]);
            if (($p = $payment->user->payments->reject(fn ($i) => $i->id === $payment->id))->count()) {
                $p->first()->update(['default' => 1]);
            }

            $payment->delete();
        });

        $this->close();
    }

    #[On('payments.restore')]
    public function restore($payment)
    {
        DB::transaction(function () use ($payment) {
            $payment = Payment::onlyTrashed()->find($payment);
            $payment->restore();

            if ($payment->user->payments->count() == 1) {
                $payment->update(['default' => 1]);
            }
        });

        $this->close();
    }

    #[On('payments.delete')]
    public function delete($payment)
    {
        Payment::onlyTrashed()->find($payment)->forceDelete();

        $this->close();
    }

    public function name(Payment $payment)
    {
        $cache_key = "account.name.{$payment->id}";
        if (Cache::missing($cache_key)) {
            $name['first_name'] = $payment->details['account']['first_name'] ?? '';
            $name['other_name'] = $payment->details['account']['other_name'] ?? '';
            $name['last_name'] = $payment->details['account']['last_name'] ?? '';

            Cache::add($cache_key, implode(' ', array_filter($name)), now()->addMinute());
        }

        return Cache::get($cache_key);
    }
}
