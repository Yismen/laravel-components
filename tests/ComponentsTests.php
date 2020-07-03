<?php

namespace Dainsys\Components\Tests;

use Dainsys\Components\View\Form;
use Dainsys\Components\View\InputField;
use Dainsys\Components\View\InputFieldAddon;
use Dainsys\Components\View\InputLabel;
use Illuminate\View\Component;

class ComponentsTests extends TestCase
{
    /** @test */
    public function it_renders_input_label_tests()
    {
        $component = new InputLabel('name', 'Your Name');

        tap($component, function (Component $view) {
            $this->assertInstanceOf(InputLabel::class, $view);
            $this->assertEquals('dainsys_components::input-label',  $view->render()->getName());
            $this->assertEquals($view->data()['fieldName'], 'name');
            $this->assertEquals($view->data()['label'], 'Your Name');
        });
    }

    /** @test */
    public function it_renders_input_field_tests()
    {
        $component = new InputField('Your Name', 'name', 'Name:');

        tap($component, function (Component $view) {
            $this->assertInstanceOf(InputField::class, $view);
            $this->assertEquals('dainsys_components::input-field',  $view->render()->getName());
            $this->assertEquals($view->data()['fieldName'], 'name');
            $this->assertEquals($view->data()['labelName'], 'Name:');
            $this->assertEquals($view->data()['fieldValue'], 'Your Name');
            $this->assertEquals($view->data()['type'], 'text');
            $this->assertEquals($view->data()['required'], true);
        });
    }

    /** @test */
    public function it_renders_input_field_addons_tests()
    {
        $component = new InputFieldAddon('Your Name', 'name', 'Name:');

        tap($component, function (Component $view) {
            $this->assertInstanceOf(InputFieldAddon::class, $view);
            $this->assertEquals('dainsys_components::input-field-addon',  $view->render()->getName());
            $this->assertEquals($view->data()['fieldName'], 'name');
            $this->assertEquals($view->data()['labelName'], 'Name:');
            $this->assertEquals($view->data()['fieldValue'], 'Your Name');
            $this->assertEquals($view->data()['type'], 'text');
            $this->assertEquals($view->data()['required'], true);
            $this->assertEquals($view->data()['buttonAction'], 'CREATE');
            $this->assertEquals($view->data()['btnClass'], 'btn-primary');
        });
    }

    /** @test */
    public function it_renders_form_tests()
    {
        $component = new Form('some_define_route');

        tap($component, function (Component $view) {
            $this->assertInstanceOf(Form::class, $view);
            $this->assertEquals('dainsys_components::form',  $view->render()->getName());
            $this->assertEquals($view->data()['route'], 'some_define_route');
            $this->assertEquals($view->data()['method'], 'POST');
            $this->assertEquals($view->data()['autocomplete'], 'off');
        });
    }
}
