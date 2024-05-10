# Search form

This is a form containing inputs with the signature of the search query string. Additionally, it generates custom build options. It's a separate component of the delegate class `\Admin\Delegates\SearchForm`. The delegate also includes assistants like `inDefault` for building ready-made tables.
```php
use App\Admin\Delegates\SearchForm;

return $page->card(
	$card->search_form(
		$searchForm->id(),
		...,
		$searchForm->at(),
	),
)
//OR
return $page->card(
	$card->search_form(
		$searchForm->inDefault(
			...,
		),
	),
)
```
For convenient searching, a small set of inputs is supported. Each input inherits the functionality of form inputs and therefore works almost identically to them. However, there's a distinction: after the input name and its label, the third parameter indicates the type of comparison or the function that will process the builder.

When a property or method starts with `in_[input method]_*`, a magical addition occurs, allowing you to specify a name in the model or property name, such as `in_input_name`. If this is a method, then the first parameter will be the label setting, like so: `->in_input_name('Name of row', string|callable $condition)`.

### Supported fields

- **input** - A simple text field. Default type: `=%`.
- **email** - Text field for entering email. Default type: `=%`.
- **number** - A field for selecting a number. Default type: `=`.
- **numeric** - A field for entering a number. Default type: `=`.
- **amount** - Amount input field. Default type: `>=`.
- **switcher** - Switch between states. Default type: `=`.
- **date_range** - Date range selection field. Default type: `between`.
- **date_time_range** - Date and time range selection field. Default type: `between`.
- **date** - Date selection field. Default type: `>=`.
- **date_time** - Date and time selection field. Default type: `>=`.
- **time** - Time selection field. The default type is `=`.
- **icon** - `FontAwesome` icon selection field. Default type: `=%`.
- **color** - Color selection field. Default type: `=`.
- **select** - Dropdown list. Default type: `=`.
- **multi_select** - Multiple selection. Default type: `in`.
- **select_tags** - Multiple entry options. Default type: `in`.
- **checks** - Fields with checkboxes. Default type: `in`.
- **radios** - Fields with radio buttons. Default type: `=`.

{columns="2"}

### Comparison Types

- `=` - Equal to input value
- `!=` - Not equal to input value
- `>=` - Greater than or equal to input value
- `<=` - Less than or equal to input value
- `>` - More input value
- `<` - Less input value
- `%=` - Search starts with input value
- `=%` - The search term ends with the input value
- `%=%` - Search may contain an input value
- `null` - Lookup must be `null`
- `not_null` - Search must not be `null`
- `in` - Search must contain one of the options
- `not_in` - Search must not contain any of the options
- `between` - The search must be between the input value
- `not_between` - The search must not be between the input value

{columns="2"}

### Custom comparison
You can define your own input behavior by passing a Closure instead of the comparison type:
```php
$card->search_form(
	$searchForm->input('name', 'Search by name', function ($builder, $value, $key) {
		return $builder->where('name', 'like', '%' . $value . '%');
	}),
)
```
