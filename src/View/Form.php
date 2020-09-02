<?php

namespace Dainsys\Components\View;

use Illuminate\View\Component;

class Form extends Component
{
    public $route;

    public $method;

    public $autocomplete;

    /**
     * Create a new component intance
     *
     * @param string $route, the route or action where the form will be submitted
     * @param string $method, the form method. Options 'GET', 'POST'. Default is 'POST'
     * @param string $autocomplete, form autocomplete. Default 'off'. Options ('on', 'off')
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
        return view('dainsys_components::components.form');
    }
}
