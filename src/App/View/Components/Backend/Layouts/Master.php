<?php

namespace Sazumme\Packagegenerator\App\View\Components\Backend\Layouts;

use Illuminate\View\Component;

class Master extends Component
{

    public function __construct()
    {

    }

    public function render()
    {
        return view('packagegenerator::components.backend.layouts.master');
    }
}
