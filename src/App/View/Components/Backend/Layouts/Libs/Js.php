<?php

namespace Sazumme\Packagegenerator\App\View\Components\Backend\Layouts\Libs;

use Illuminate\View\Component;

class Js extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('packagegenerator::components.backend.layouts.libs.js');
    }
}
