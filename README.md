* Install with `composer` by runining the command `composer require dainsys/locky`
* The package it self is a wrapper for `spatie/laravel-permission`, which will be installed as a dependency, so you MUST publish their dependencies by running `php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"` command.
* Add the `Dainsys\Components\Componentsable;` to your `User` model(s);
```javascript
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
}
```

 to you `User` model: `use Componentsable;` and also add the use statement at the top of the clase `use Dainsys\Components\Componentsable;`
 