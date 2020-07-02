<?php

namespace Dainsys\Components\View\Components;

use Illuminate\View\Component;

class InputField extends Component
{
    public $fieldValue;

    public $fieldName;

    public $type;

    public $labelName;

    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldValue, $fieldName, $labelName, $type = null, $required = true)
    {
        $this->fieldValue = $fieldValue;
        $this->fieldName = $fieldName;
        $this->type = $type;
        $this->labelName = $labelName;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dainsys_components::input-field');
    }
}
