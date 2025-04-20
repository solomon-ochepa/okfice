<?php

namespace Modules\User\app\Livewire\Admin\Modals;

use Livewire\Component;
use Livewire\WithFileUploads;

class Import extends Component
{
    use WithFileUploads;

    public function render()
    {
        return view('user::livewire.admin.modals.import');
    }
}
