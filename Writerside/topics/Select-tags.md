# Select tags

A complex input for entering an unlimited number of sequential data allows users to input multiple data entries in a structured and sequential manner.
```php
$form->select_tags('tags', 'Post tags')
// OR
$form->select_tags('tags', 'Post tags')->options(MyTags::pluck('name', 'id'))
// OR
$form->select_tags('tags', 'Post tags')->load(MyTags::class)
```
The loading rules for this field function in the same way as the rules for a basic selector. This means that they follow similar principles and behaviors, ensuring consistency and familiarity for users.
Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
