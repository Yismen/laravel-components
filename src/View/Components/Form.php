<?php

namespace Dainsys\Components\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $route;

    public $method;

    public $autocomplete;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $method = 'POST', $autocomplete = 'off')
    {
        $this->route = $route;
        $this->method = $method;
        $this->autocomplete = $autocomplete;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dainsys_components::form');
    }
}
