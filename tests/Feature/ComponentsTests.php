<?php

namespace Dainsys\Components\Tests\Feature;

use Dainsys\Components\Tests\AppTestCase;
use Dainsys\Components\View\Form;
use Dainsys\Components\View\InputField;
use Dainsys\Components\View\InputFieldAddon;
use Dainsys\Components\View\InputLabel;
use Dainsys\Components\View\SelectField;
use Dainsys\Components\View\TextArea;
use Illuminate\View\Component;

class ComponentsTests extends AppTestCase
{
    /** @test */
    public function it_renders_input_label_tests()
    {
        $this->withoutExceptionHandling();
        $component = new InputLabel('name', 'Your Name');

        tap($component, function (Component $view) {
            $this->assertInstanceOf(InputLabel::class, $view);
            $this->assertEquals('dainsys_components::components.input-label',  $view->render()->getName());
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
            $this->assertEquals('dainsys_components::components.input-field',  $view->render()->getName());
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
            $this->assertEquals('dainsys_components::components.input-field-addon',  $view->render()->getName());
            $this->assertEquals($view->data()['fieldName'], 'name');
            $this->assertEquals($view->data()['labelName'], 'Name:');
            $this->assertEquals($view->data()['fieldValue'], 'Your Name');
            $this->assertEquals($view->data()['type'], 'text');
            $this->assertEquals($view->data()['required'], true);
            $this->assertEquals($view->data()['buttonAction'], 'SAVE');
            $this->assertEquals($view->data()['btnClass'], 'btn-primary');
        });
    }

    /** @test */
    public function it_renders_form_tests()
    {
        $component = new Form('some_define_route');

        tap($component, function (Component $view) {
            $this->assertInstanceOf(Form::class, $view);
            $this->assertEquals('dainsys_components::components.form',  $view->render()->getName());
            $this->assertEquals($view->data()['route'], 'some_define_route');
            $this->assertEquals($view->data()['method'], 'POST');
            $this->assertEquals($view->data()['autocomplete'], 'off');
        });
    }

    /** @test */
    public function it_renders_select_field_tests()
    {
        $component = new SelectField('Your Name', 'name', 'Name:', []);

        tap($component, function (Component $view) {
            $this->assertInstanceOf(SelectField::class, $view);
            $this->assertEquals('dainsys_components::components.select-field',  $view->render()->getName());
            $this->assertEquals($view->data()['fieldName'], 'name');
            $this->assertEquals($view->data()['labelName'], 'Name:');
            $this->assertEquals($view->data()['fieldValue'], 'Your Name');
            $this->assertEquals($view->data()['required'], true);
            $this->assertEquals($view->data()['multiple'], false);
        });
    }

    /** @test */
    public function it_renders_text_area_tests()
    {
        $component = new TextArea('Your Name', 'name', 'Name:');

        tap($component, function (Component $view) {
            $this->assertInstanceOf(TextArea::class, $view);
            $this->assertEquals('dainsys_components::components.text-area',  $view->render()->getName());
            $this->assertEquals($view->data()['fieldName'], 'name');
            $this->assertEquals($view->data()['labelName'], 'Name:');
            $this->assertEquals($view->data()['fieldValue'], 'Your Name');
            $this->assertEquals($view->data()['required'], true);
            $this->assertEquals($view->data()['rows'], 5);
        });
    }
}
