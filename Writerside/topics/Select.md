# Select

A complex drop-down list with sorting functionality provides users with a list of options to choose from, with the added feature of sorting the options. This type of input field typically displays a list of items in a dropdown menu, allowing users to select one option. However, it also includes the ability to sort the items within the dropdown menu, making it easier for users to find and select the desired option. Sorting functionality can be based on various criteria such as alphabetical order, numerical order, or custom sorting rules. This enhances the usability of the dropdown list, especially when dealing with a large number of options.
```php
$form->select('city_id', 'User city')->options(City::pluck('id', 'name'))
// OR
$form->select('city_id', 'User city')->load(City::class)
```
It is also possible to link downloads to each other if you have multiple selectors that can depend on each other. For example, selecting a city based on the selected country:
```php
$form->select('country_id', 'User country')->load(Country::class)
    
$form->select('city_id', 'User city')->load(City::class, '{id}) {name}', function ($builder, array $form) {
	return $builder->where('country_id', $form['country_id'] ?? 0);
})
// OR
$form->select('city_id', 'User city')->load(
	City::class, 
	'{id}) {name}', 
	fn ($q, array $form) => $q->where('country_id', $form['country_id'] ?? 0)
)
```
Option format seated like variables. Format `{id}) {name}` show some sing like that `5) test name`. Where `id` and `name` is fields of model. You can set also first level of relations like this `{id}) {name} {relationName.relationField}`.

Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
