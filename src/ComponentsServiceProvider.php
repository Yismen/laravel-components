<?php

namespace Dainsys\Components;

use App\User;
use Dainsys\Components\View\Form;
use Dainsys\Components\View\InputFieldAddon;
use Dainsys\Components\View\InputLabel;
use Dainsys\Components\View\InputField;
use Dainsys\Components\View\SelectField;
use Dainsys\Components\View\TextArea;
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
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dainsys_components');

        return $this;
    }

    protected function registerPackageComponents()
    {
        Blade::component('dc-input-label', InputLabel::class);
        Blade::component('dc-input-field', InputField::class);
        Blade::component('dc-select-field', SelectField::class);
        Blade::component('dc-input-field-addon', InputFieldAddon::class);
        Blade::component('dc-text-area', TextArea::class);
        Blade::component('dc-form', Form::class);

        return $this;
    }
}
