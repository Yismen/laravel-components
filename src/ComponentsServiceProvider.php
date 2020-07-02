<?php

namespace Dainsys\Components;

use App\User;
use Dainsys\Components\View\Components\InputFieldAddon;
use Dainsys\Components\View\Components\InputLabel;
use Dainsys\Components\View\Components\InputField;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ComponentsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerPublishables()
            ->bootConfigurations()
            ->registerPackageComponents();
    }

    public function register()
    {
    }

    protected function registerPublishables()
    {
        $this->publishes([
            __DIR__ . '/..' => resource_path('views/vendor/dainsys/components')
        ], 'dainsys-components-views');

        return $this;
    }

    protected function bootConfigurations()
    {
        $this->loadViewsFrom(__DIR__ . '/../components', 'dainsys_components');

        return $this;
    }

    protected function registerPackageComponents()
    {
        Blade::component('dc-input-label', InputLabel::class);
        Blade::component('dc-input-field', InputField::class);
        Blade::component('dc-input-field-addon', InputFieldAddon::class);

        return $this;
    }
}
