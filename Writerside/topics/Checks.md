# Checks

This feature provides a straightforward group of checkboxes intended to activate or deactivate certain elements within an array property of the model.
```php
$form->checks('roles[]', 'User roles')->options(Roles::pluck('id', 'name'))
```
