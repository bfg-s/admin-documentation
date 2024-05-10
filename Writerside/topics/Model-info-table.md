# Model info table

The table component, which allows for the manual assembly of rows from a specified model, serves as an independent component within the delegator class `\Admin\Delegates\ModelInfoTable`. This delegation mechanism also incorporates helper methods, such as `rowDefault`, to facilitate the construction of ready-made tables.
```php
return $page->card(
	$card->model_info_table(
		$modelInfoTable->id(),
		...
		$modelInfoTable->at(),
	)
)
// OR
return $page->card(
	$card->model_info_table(
		$modelInfoTable->rowDefault(
			$modelInfoTable->row_name,
			...,
		),
	)
)
```

In the system, there's a special feature designed to streamline the process of working with models and their properties or methods. When you prefix a property or method with `row_*`, such as `row_name`, you unlock the ability to directly link to a specific name within the model or to a property name. This nomenclature convention is not just for organizational clarity but also enhances functionality.

For instance, when you utilize a method prefixed with `row_`, you gain the capability to define a label for that row directly through the method call. Specifically, if you have a method named row_name, you can set its label by calling `->row_name('Name of row')`. In this scenario, 'Name of row' becomes a user-friendly label associated with that particular row. This approach facilitates a more intuitive and customizable way to manage and display information within the system, allowing for a clearer presentation and easier understanding of data.

Used same modifiers as in [Model table](Model-table.md#column-modifiers).

### Methods

#### row
The method utilized for constructing a table row is designed with flexibility in mind, accommodating both modifiers and columns within a "Sortable table." This feature extends beyond simple row creation, enabling the integration of dynamic elements that can significantly enhance user interaction and data representation.
```php
$modelInfoTable->row(string $label, string|Closure|array $field): static
```

#### info
Incorporating line information refers to the process of adding specific details or attributes associated with individual lines or entries within a dataset, document, or application interface. This process is crucial for enhancing clarity, providing context, or offering additional insights into the data or content being presented.
```php
$modelInfoTable->row(...)->info(string $info): static
```

### Helpers

```php
$modelInfoTable->id(): static
```
```php
$modelInfoTable->at(): static
```
