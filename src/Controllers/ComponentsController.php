<?php

namespace Dainsys\Components\Controllers;

use Illuminate\Routing\Controller;

class ComponentsController extends Controller
{
    public function __invoke()
    {
        return view('dainsys_components::test-view', [
            'array_data' => $this->mockedData()
        ]);
    }

    protected function mockedData()
    {
        return [
            1 => 'Select Option 1',
            2 => 'Select Option 2',
            3 => 'Select Option 3',
            4 => 'Select Option 4',
        ];
    }
}
