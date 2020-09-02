<?php

namespace Dainsys\Components\View;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $fieldValue;

    public $fieldName;

    public $labelName;

    public $required;

    public $rows;

    /**
     * Create a new component instance
     *
     * @param string $fieldValue
     * @param string $fieldName
     * @param string $labelName
     * @param boolean $required, wether or not the field is required. Options true, false. Default true
     * @param integer $rows, the number of rows on render. Default is 5
     */
    public function __construct($fieldValue, $fieldName, $labelName, $required = true, int $rows = 5)
    {
        $this->fieldValue = $fieldValue;
        $this->fieldName = $fieldName;
        $this->labelName = $labelName;
        $this->required = $required;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dainsys_components::components.text-area');
    }
}
