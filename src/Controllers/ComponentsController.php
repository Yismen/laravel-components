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
            1 => 'Here I am',
            2 => 'Change the cable',
            3 => 'This is crazy'
        ];
    }
}
