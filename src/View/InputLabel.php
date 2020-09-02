<?php

namespace Dainsys\Components\View;

use Illuminate\View\Component;

class InputLabel extends Component
{
    public $fieldName;

    public $label;

    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldName, $label, $required = true)
    {
        $this->fieldName = $fieldName;
        $this->label = $label;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dainsys_components::components.input-label');
    }
}
