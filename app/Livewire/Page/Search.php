<?php

namespace App\Livewire\Page;

use App\Features\PageSearch;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\User\App\Models\User;

class Search extends Component
{
    public User $user;

    public ?string $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        // if ($this->user->features()->inactive(PageSearch::class)) {
        //     return <<<'HTML'
        //         <div></div>
        //     HTML;
        // }

        return view('livewire.page.search');
    }

    public function updatedSearch()
    {
        $this->query();
    }

    public function query()
    {
        $data = [];
        $data['search'] = $this->search;

        $this->dispatch('page.search', $data);
    }
}
