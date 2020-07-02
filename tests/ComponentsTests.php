<?php

namespace Dainsys\Components\Tests;

use Dainsys\Components\View\Components\InputField;
use Dainsys\Components\View\Components\InputLabel;
use Illuminate\View\Component;

class ComponentsTests extends TestCase
{
    /** @test */
    public function it_renders_input_label_tests()
    {
        // dd(view('dainsys_components::input-field')->render());
        $component = (new InputLabel('fieldName', 'label'));
    }
}
