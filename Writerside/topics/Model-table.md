# Model table

The table is generated based on the model that you passed to it. It paginates, sorts, and creates a table based on your rules. This component is a separate delegate class `\Admin\Delegates\ModelTable`. Additionally, it offers helpers such as `colDefault` for constructing pre-defined tables.
```php
use App\Admin\Delegates\ModelTable;

public function index(
	Page $page,
	Card $card,
	ModelTable $modelTable
): Page {
	return $page->card(
		$card->model_table(
			$modelTable->id(),
			...,
			$modelTable->at(),
		),
	);
	//OR
	return $page->card(
		$card->model_table(
			$modelTable->colDefault(
				$modelTable->col_name->sort
				...,
			),
		)
	);
}
```
Each column is configured separately and has many display variations.

There is a magical addition: when a property or method starts with `col_*`, you have the option to specify a name in the model or property name, such as `col_name`. If this is a method, then the first parameter will be the label, setting `->col_name('Name of the row')`.

#### colDefault
To maintain consistency and adhere to standard practices, you can utilize the default columns `ID` and `AT` in your table. These columns serve as fundamental identifiers and timestamps, respectively, ensuring uniformity across your data representation. Additionally, you can populate the table with relevant information between these standard columns to provide comprehensive insights into your dataset.
```php
$modelTable->id(),
...,
$modelTable->at()
```

### perPage
To enhance user experience and accommodate varying data needs, you can define the number of entries displayed per page. This feature allows users to control the density of information presented on each page, facilitating easier navigation and analysis of data.
```php
$modelTable->perPage(int perPage)
```

### perPages
To provide users with flexibility in viewing data, you can define the available options for the number of entries displayed per page. This allows users to customize their viewing experience based on their preferences and the amount of data they need to analyze at once.
```php
$modelTable->perPages(array perPages)
```

### orderBy
To ensure a consistent and intuitive user experience, you can set the default sorting configuration for the table. By specifying the default sorting criteria, you define how the table data should be initially presented to users, offering them a structured and easily navigable interface from the moment they access the table.
```php
$modelTable->orderBy(string $field, string $type = "asc")
```

### sort
To facilitate data organization and enhance user interaction, you can enable sorting functionality for a specific column in the table. This feature allows users to easily sort the table data based on the values in the chosen column, providing a more organized and customizable viewing experience.
```php
$modelTable->sort(string field = null)
```

### to_hide
To enhance user experience, you can temporarily hide a column in the table, making it hidden from view while still retaining the option to display it as needed. This feature provides flexibility in managing the visibility of columns based on user preferences or specific requirements.
```php
$modelTable->to_hide()
```
> To display a column within your table, you can access the actions menu and select the desired column name. By doing so, you can easily toggle the visibility of the column, ensuring that the necessary data is readily accessible for analysis and interpretation.

### info
To include additional information within a column, you can enhance it with relevant data that provides context or details about the displayed content. This can help users better understand the information presented in the column and make informed decisions based on it.
```php
$modelTable->info(string $infoString)
```

### not_trash
This function prevents the selected column from appearing in the bin, so it won't show up in the list of deleted items.
```php
$modelTable->not_trash()
```

### to_prepend
This function moves the next column to the front, making it the first column in the table.
```php
    $modelTable->to_prepend()
```

## Default Tools
Bulk control buttons to control which are added to each line.
Editing, Deleting, Information.
They can be disabled, for this the table has special methods.

### controlGroup
This function enables the display control of all auxiliary elements of the table in general.
```php
$modelTable->controlGroup(callable|bool)
```

### controlInfo
This function manages the visibility of the information button in the table. When enabled, the info button typically provides additional details or context about the table content or specific entries.
```php
$modelTable->controlInfo(callable|bool)
```

### controlEdit
This function governs the visibility of the edit button in the table. When activated, the edit button allows users to modify or update entries directly from the table interface.
```php
$modelTable->controlEdit(callable|bool)
```

### controlDelete

This function regulates the visibility of the delete button in the table. When enabled, the delete button allows users to remove entries directly from the table interface.
```php
$modelTable->controlDelete(callable|bool)
```


### controlForceDelete
This function governs the visibility of the forced delete button in the table. When activated, the forced delete button permits users to permanently remove entries from the table interface.
```php
$modelTable->controlForceDelete(callable|bool)
```


### controlRestore
This function regulates the visibility of the restore button in the table, which enables users to recover previously deleted entries.
```php
$modelTable->controlRestore(callable|bool)
```

### controlSelect
This function determines whether the checkbox for bulk actions is displayed in the table.
```php
$modelTable->controlSelect(callable|bool)
```

### checkDelete
This function controls whether the bulk delete action is displayed or not. If enabled, users can select multiple items and delete them all at once. If disabled, this action will not be available to users.
```php
$modelTable->checkDelete(callable|bool)
```

### disableChecks
This function disables all checkboxes for mass control actions. When disabled, users won't be able to select multiple items for bulk actions such as deletion or restoration.
```php
$modelTable->disableChecks(callable|bool)
```

## Actions
This function controls bulk actions on selected table rows. When users select multiple rows in the table, this function enables actions such as deletion or restoration to be performed on all selected items at once.

When at least one column is set to be hidden, the column selection mode becomes available. This mode allows users to select which columns they want to display by toggling their visibility.

### action
When adding your own action, this method will return a special `\Admin\Core\ModelTableAction` class for configuration, which provides the following methods:
```php
$modelTable->action(callable $callback, array $parameters = [])
```

### title
When specifying the title of the action, the default header is `Action`.
```php
$modelTable->action(callable $callback)->title(string $title): static
```

### icon
When setting an action icon, the default icon is `fas fa-dot-circle`.
```php
$modelTable->action(callable $callback)->icon(string $icon): static
```
Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).

### confirm
When specifying an arbitrary message to confirm the action, such as "Delete 2 rows?", by default, no message is used. If no message is provided, no confirmation will be requested.
```php
$modelTable->action(callable $callback)->confirm(string $confirmMessage): static
```

### warning
By default, an action call cannot be dispatched unless at least one element from the table is selected. The method allows you to specify an arbitrary warning message that the action will not be sent. By default, the system uses the message “Select at least one element”.
```php
$modelTable->action(callable $callback)->warning(string $warningMessage): static
```

### nullable
Disabling the action from requiring fields to be selected means that the action can be performed without selecting any specific fields.
```php
$modelTable->action(callable $callback)->nullable(): static
```

## Column

A controlled table column refers to a column in the table that is managed or governed in some way, typically through predefined settings or actions.

```php
$modelTable->col(string|callable $label, string|callable $field)
//OR
$modelTable->column(string|callable $label, string|callable $field)
```
Adding a new column to the table involves incorporating an additional column into the existing table structure, thereby expanding the displayed data or functionality.

## Column with a group of buttons

Frequently, there arises a necessity to append supplementary control buttons to the table, and the table offers us the capability to do so:
```php
$modelTable->buttons(
	$buttons->success()->title('Test button')
)
```
Similarly, all buttons and their associated model dispatches adhere to the global regulations outlined in the "Buttons" section.

## Column Modifiers

Table columns support special modifiers for more convenient display.

### Inputs

- `input_switcher(string $on = null, string $off = null, string $label = null)` - Makes a state switch from a column.
- `input_editable()` - Makes an editable input from a column.
- `textarea_editable()` - Makes an editable field from a column.
- `input_select(array $options, bool $first_default = false)` - Makes simple select.
- `input_select(string $class, string $format = 'id:name', $where = null)` - Makes an loaded select.
- `input_radios(array $options, bool $first_default = false)` - Makes an simple radios.

{columns="2"}

### Modificators

- `rating_stars()` - Generates rating stars.
- `password_stars(string $symbol = "•")` - Replaces data with closing characters.
- `true_data()` -Display direct data (if it's null, it will display "null")
- `uploaded_file(int $previewWidth = 30)` - Treat column data as a file link.
- `avatar(int $previewWidth = 30)` - Treat column data as a link to an image and show it with a thumbnail.
- `copied(callable $dataGenerator = null)` - Copied column value, will add a button to copy.
- `copied_right(callable $dataGenerator = null)` - Copied column value, will add a copy button (on the right side).
- `badge_number()` - Read the column data as a number and display it in the badge.
- `badge(string $type = "info")` - Wrap column data value in a badge.
- `pill(string $type = "info")` - Wrap column data value in a pill.
- `yes_no()` - If your data is `true/false`, it will display as `yes/no`.
- `on_off()` - If your data is `true/false`, it will display as `on/off`.
- `fa_icon(int $fontSize = 22)` - Read column data as icon name.
- `badge_tags(int $wisibleCount = 5)` - Read column data as an array and display it in badges.
- `color_cube(int $cubeFontSize = 22)` - Read column data as color value.
- `hide_om_mobile()` - Makes the column hidden for mobile devices.
- `str_limit(int $num = 20)` - Limit the number of characters in a column.
- `strip_tags()` - Strip all tags from a column value.
- `to_html()` - Converts HTML entities to their corresponding characters.
- `admin_resource_route(string $routeName, string $urlParamName = null, string $modelParamName = null)` - Add control buttons to a third-party resource.
- `admin_resource_route_edit(string $routeName, string $urlParamName = null, string $modelParamName = null)` - Add third party resource edit button.
- `admin_resource_route_show(string $routeName, string $urlParamName = null, string $modelParamName = null)` - Add info button to third party resource.
- `to_append(callable|string $data)` - Append data at the end of the column value.
- `to_prepend(callable|string $data)` - Add data at the beginning of the column value.
- `to_append_link(string $icon = "fas fa-link", string $link = null, string $title = null)` - Treat column data as a link. Adds a navigation button.
- `to_prepend_link(string $icon = "fas fa-link", string $link = null, string $title = null)` - Treat column data as a link. Add a navigation button to the beginning.
- `number_format(int $dec = 0, string $dec_point = ".", string $sep = ",", string $end = " ")` - Formats a number with group separation.
- `money(string $symbol = "$")` - Format number to currency.
- `percent(string $symbol = "%")` - Format number to percent.
- `to_lang()` - Read column data of language variable.
- `to_string()` - No matter what data is in the column, cast its type to a string.
- `has_lang()` - Assume data has references to language variables.
- `trim(string $characters = " \n\r\t\v\x00")` - Removes spaces (or other characters) from the beginning and end of the column data.
- `carbon_format(string $format = "Y-m-d H:i:s")` - Treat column data as a date and format the date.
- `carbon_time(string $format = "H:i:s")` - Read column data as date and format time.
- `explode(string $delimiter, string|int $key = 0)` - Splits a string into substrings as an array and returns the specified value.
- `beautiful_date` - Beautiful date string
- `beautiful_date_time` - Beautiful date and time string
- `progress_complete(string $word = 'Complete'|false)` - Derive progress bar from value

{columns="2"}

## Import to spreadsheets (.excel or .csv)
Table description rules for the possibility of exporting this data to an `Excel` or `CSV` table.

- `to_export(callable $callback = null)` - Take a column to generate in the document.
- `only_export(callable $callback = null)` - Take column only for document generation.
  
{columns="2"}
> If a column is hidden, it will also not participate in the generation.

## Control
For full-fledged `CRUD` and not only, there is a button group component that is embedded as default tools in the table. The controller has a default delegation to all maps including them. As a result, additional control buttons appear in the map header.
