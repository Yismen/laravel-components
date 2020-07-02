# Dainsys Laravel Components  
A laravel components UI for Bootstrap 4!
## Installation
* Install with `composer` by runining the command `composer require dainsys/components`
## Ussage:
* Input Field
````html
<x-dc-input-field 
    type="name"
    :field-value="old('name', $user->name)" 
    field-name="name" 
    label-name="Name"
/>
````
* Input field with add-on
````html    
<x-dc-input-field-addon
    type="text"
    :field-value="old('name', $permission->name)" 
    field-name="name" 
    label-name="Permission Name:"
/>
````
### Options
* You can set html properties to PHP variables to change the behaviours:
- `field-name="Some Name"` or `:field-name="$someName"`: field name and id properties.
-  `:required="true"`: Determines if the field is required.
- `type="text"`: Sets field type (text, email, date, password, etc.).
- `field-value="Some Value"` or `:field-value="$someValue"`: Sets the default field value on initial payload.
