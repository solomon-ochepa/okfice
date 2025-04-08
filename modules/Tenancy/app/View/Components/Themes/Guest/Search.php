<?php

namespace Modules\Tenancy\App\View\Components\Themes\Guest;

use Illuminate\View\Component;
use Illuminate\View\View;

class Search extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('tenancy::components.themes/guest/search');
    }
}
