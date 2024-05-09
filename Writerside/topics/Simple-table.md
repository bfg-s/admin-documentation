# Simple table

Is a separate component of the deligator class `\Admin\Delegates\Table`. To create a table with arbitrary columns and rows using the `Table` component, you can follow either of these examples:
```php
return $page->card(
	$card->table(
		$table->rows([
			'Left row' => 'Right row'
		]),
	),
)
```
OR
```php
return $page->card(
	$card->table(
		$table->rows([
			['First row line 1', 'Second row line 1', 'Third row line 1'],
			['First row line 2', 'Second row line 2', 'Third row line 2'],
		]),
	),
)
```
These examples demonstrate how to set up a table with arbitrary columns and rows using the Table component in Bfg Admin. You can customize the data and structure of the table as needed for your application.
