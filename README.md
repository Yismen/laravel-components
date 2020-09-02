# Dainsys Laravel Components  
A laravel components UI for Bootstrap 4!
## Installation
* Install with `composer` by runining the command `composer require dainsys/components`
## Ussage:
### Form
* route="", the route or action where the form will be submitted
* method="POST", the form method. Options 'GET', 'POST'. Default is 'POST'
* autocomplete="off", form autocomplete. Default 'off'. Options ('on', 'off')
````html
<x-dc-form route="{{ route('employee.store') }}">        
</x-dc-form> 
````
### Input Field
* type="text". Field type.  Options are HTML5 input fields (text, number, date, etc.). Default 'text'
* :required="true". wether or not the field is required. Options true, false. Default true
````html
<x-dc-input-field 
    :field-value="old('value', optional($user ?? null)->value)" 
    field-name="value" 
    label-name="Label"
/>
````
### Input field with add-on
* type="text", field type. Options are HTML5 input fields (text, number, date, etc.). Default 'text'
* :required="true", wether or not the field is required. Options true, false. Default true
* btn-class="btn-primary", bootstrap btn color class. default is btn-primary
````html    
<x-dc-input-field-addon
    :field-value="old('value', optional($user ?? null)->value)" 
    field-name="value" 
    label-name="Label"
    button-action="SAVE"
/>
````
### Select Field
* :required="true", determine of the field is required. Default true
* :multiple="false", whether or not to treat the select as multiple. Default false
````html    
<x-dc-select-field
    :field-value="old('value', optional($user ?? null)->value)" 
    field-name="value" 
    label-name="Label"
    :data-array="[]"
/>
````
### Text Area
* :required="true", wether or not the field is required. Options true, false. Default true
* rows="5", the number of rows on render. Default is 5
````html    
<x-dc-input-field-addon
    :field-value="old('value', optional($user ?? null)->value)" 
    field-name="value" 
    label-name="Label"
/>
