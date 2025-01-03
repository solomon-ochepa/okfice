<?php

namespace Modules\Account\App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wallet extends Component
{
    public function render()
    {
        $data = [];
        $data['user'] = $user = Auth::user();
        $data['balance'] = $user->account->balance;

        return view('account::livewire.wallet', $data);
    }
}
