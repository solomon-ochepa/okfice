<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Confirm extends Component
{
    public array $data;

    public function mount(): void
    {
        $this->init();
    }

    /**
     * Initialize default data.
     */
    public function init(): void
    {
        $this->data = [
            'id' => null,
            'icon' => null,
            'title' => null,
            'description' => null,
            'detail' => null,
            'button_label' => null,
            'color' => null,
            'action' => null,
        ];
    }

    /**
     * Render the component.
     */
    public function render()
    {
        return view('livewire.confirm');
    }

    /**
     * Close the modal and reset the data.
     */
    public function close()
    {
        $this->init();
    }

    /**
     * Open the confirmation modal.
     */
    #[On('confirm')]
    public function confirm(array $data): void
    {
        $this->data = $data;

        $this->dispatch('confirm-modal');
    }
}
