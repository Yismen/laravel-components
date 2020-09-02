# Dainsys Laravel Components  
A laravel components UI for Bootstrap 4!
## Installation
* Install with `composer` by runining the command `composer require dainsys/components`
## Ussage:
* Input Field
- type="text". Field type. By default 'text'
- :required="true". boolean. Default True
````html
<x-dc-input-field 
    :field-value="old('value', optional($user ?? null)->value)" 
    field-name="value" 
    label-name="Label"
/>
````
* Input field with add-on
````html    
* Input Field
- type="text". Field type. By default 'text'
- :required="true". boolean. Default True
<x-dc-input-field-addon
    :field-value="old('value', optional($user ?? null)->value)" 
    field-name="value" 
    label-name="Label"
    button-action="CREATE"
/>
````
* Form
- route: destination url.
- method: "GET" or "POST"
````html
<x-dc-form route="{{ route('employee.store') }}">
        
</x-dc-form> 
````
### Options
* You can set html properties to PHP variables to change the behaviours:
- `field-name="Some Name"` or `:field-name="$someName"`: field name and id properties.
-  `:required="true"`: Determines if the field is required.
- `type="text"`: Sets field type (text, email, date, password, etc.).
- `field-value="Some Value"` or `:field-value="$someValue"`: Sets the default field value on initial payload.
