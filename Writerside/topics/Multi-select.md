# Multi select

This feature offers a complex multi-select data field represented by a drop-down list, allowing users to select multiple items from the list.
```php
$form->multi_select('roles[]', 'User roles')->options(Roles::pluck('id', 'name'))
// OR
$form->multi_select('roles[]', 'User roles')->load(Roles::class)
```
The loading rules for this field function in the same way as the rules for a basic selector. This means that they follow similar principles and behaviors, ensuring consistency and familiarity for users.
Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
