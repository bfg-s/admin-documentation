# Dual select

This functionality provides a sophisticated double list for selecting multiple items.
```php
$form->dual_select('categories[]', 'Prodict categories')->options(Category::pluck('id', 'name'))
```
