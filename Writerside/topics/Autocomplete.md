# Autocomplete

This input field provides a sophisticated data entry experience with auto-completion functionality. As users input data, the field dynamically loads additional relevant information to facilitate quick and accurate completion of the entry. This feature enhances user productivity by reducing the need for manual input and streamlining the data entry process.

```php
$form->autocomplete('tags[]', 'Post tags')->options(PostTag::pluck('id', 'name'))
// OR
$form->autocomplete('tags[]', 'Post tags')->load(PostTag::class)
```
The loading rules for this field function in the same way as the rules for a basic selector. This means that they follow similar principles and behaviors, ensuring consistency and familiarity for users.

Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
