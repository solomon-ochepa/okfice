<?php

namespace Modules\Payment\app\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = [];
        $data['payments'] = Auth::user()->payments;

        return view('payment::livewire.index', $data);
    }
}
