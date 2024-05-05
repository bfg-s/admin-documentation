# Radios

A simple field for selecting one value from a list of checkboxes provides users with the option to choose a single item from a predefined set of choices. This input method is useful when you want users to select one option from multiple available options. It ensures that only one selection is allowed, providing clarity and simplicity in user interactions.
```php
$form->radios('roles', 'User roles')->options(Roles::pluck('id', 'name'))
```
