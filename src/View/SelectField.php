<?php

namespace Dainsys\Components\View;

use Illuminate\View\Component;

class SelectField extends Component
{
    public $fieldValue;

    public $fieldName;

    public $type;

    public $labelName;

    public $required;

    public $dataArray;

    public $multiple;

    /**
     * Create a new instance
     *
     * @param string $fieldValue
     * @param string $fieldName 
     * @param string $labelName
     * @param array $dataArray, key-value array of the options
     * @param boolean $required, determine of the field is required. Default true
     * @param boolean $multiple, whether or not to treat the select as multiple. Default false
     */
    public function __construct($fieldValue, $fieldName, $labelName, $dataArray, bool $required = true, bool $multiple = false)
    {
        $this->fieldValue = $fieldValue;
        $this->fieldName = $fieldName;
        $this->labelName = $labelName;
        $this->required = (bool) $required;
        $this->dataArray = (array) $dataArray;
        $this->multiple = (bool) $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dainsys_components::components.select-field');
    }
}
