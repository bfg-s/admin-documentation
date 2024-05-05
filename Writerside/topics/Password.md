# Password

A simple password input field provides a secure way for users to input sensitive information. This input type typically masks characters to prevent others from viewing the entered text. It's essential for protecting user accounts and ensuring data security.
```php
$form->password('password', 'User password')
```
If you require an additional confirmation field, you can utilize the helper function to add an extra layer of security. This is commonly used in scenarios where sensitive actions are involved, such as changing passwords or deleting accounts. Adding a confirmation field ensures that users perform the action intentionally, reducing the risk of accidental changes.
```php
$form->password('password', 'User password')->confirm()
```
Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
