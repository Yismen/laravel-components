<?php

namespace Dainsys\Components\View;

use Illuminate\View\Component;

class InputFieldAddon extends Component
{
    public $fieldValue;

    public $fieldName;

    public $type;

    public $labelName;

    public $required;

    public $buttonAction;

    public $btnClass;

    /**
     * Create a new component intance
     *
     * @param string $fieldValue
     * @param string $fieldName
     * @param string $labelName
     * @param string $type, field type. Options are HTML5 input fields (text, number, date, etc.). Default 'text'
     * @param boolean $required, wether or not the field is required. Options true, false. Default true
     * @param string $buttonAction, Button label
     * @param string $btnClass
     */

    public function __construct($fieldValue, $fieldName, $labelName, $type = 'text', $required = true, $buttonAction = "SAVE", $btnClass = 'btn-primary')
    {
        $this->fieldValue = $fieldValue;
        $this->fieldName = $fieldName;
        $this->type = $type;
        $this->labelName = $labelName;
        $this->required = $required;
        $this->buttonAction = $buttonAction;
        $this->btnClass = $btnClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dainsys_components::components.input-field-addon');
    }
}
