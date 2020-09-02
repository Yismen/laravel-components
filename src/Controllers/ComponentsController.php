<?php

namespace Dainsys\Components\Controllers;

use Illuminate\Routing\Controller;

class ComponentsController extends Controller
{
    public function __invoke()
    {
        return view('dainsys_components::test-view');
    }
}
