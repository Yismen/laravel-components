<?php

namespace Dainsys\Components\View;

use Illuminate\View\Component;

class InputField extends Component
{
    public $fieldValue;

    public $fieldName;

    public $type;

    public $labelName;

    public $required;

    /**
     * Create a new component instance
     *
     * @param string $fieldValue
     * @param string $fieldName
     * @param string $labelName
     * @param string $type, field type. Options are HTML5 input fields (text, number, date, etc.). Default 'text'
     * @param boolean $required, wether or not the field is required. Options true, false. Default true
     */
    public function __construct($fieldValue, $fieldName, $labelName, $type = 'text', $required = true)
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
        return view('dainsys_components::components.input-field');
    }
}
