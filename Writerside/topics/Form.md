# Form

The data entry form accommodates a diverse array of input fields. It constitutes a distinct component within the delegate class `\Admin\Delegates\Form`. Moreover, the delegate offers supplementary aids such as `tabGeneral` to facilitate the construction of pre-configured tables.

```php
use App\Admin\Delegates\Card;
use App\Admin\Delegates\Form;
use App\Admin\Delegates\Tab;
use Admin\Page;

public function matrix(Page $page, Card $card, Form $form, Tab $tab)
{
	return $page->card(
		$card->form(
			$form->ifEdit()->info_id(),
			...
			$form->ifEdit()->info_updated_at(),
			$form->ifEdit()->info_created_at(),
		),
		$card->footer_form(),
	);
	//OR
	return $page->card(
		$card->form(
			$form->tabGeneral(
				$tab->input_name,
				...
			)
		),
		$card->footer_form(),
	);
}
```
When a property or method begins with `[input method]_*`, an option emerges to designate a name within the model or property name, such as `input_name`. In case of a method, the initial parameter pertains to the label configuration, set as `->input_name('Name of row')`.

> Inputs can be embedded not only in the form, so you can create new tabs inside the form or combine them with other components.

The following enumerates all available input options that can be integrated.
The form facilitates mass methods, which are individually accessible for all inputs as well.


### Vertical form mode
This setting adjusts the layout of the group title to be displayed vertically instead of horizontally.
```php
$form->vertical()
```

### Horizontal form mode
This setting adjusts the layout of the group title to be displayed horizontally instead of vertically.
```php
$form->horizontal()
```

### Reversed form
This setting flips the orientation of the group title.
```php
$form->reversed()
```

### Set form label width
This setting determines the number of columns in the header when the group is displayed horizontally.
```php
$form->label_width(int $width)
```

## Input field abstraction
This abstraction class is the main class from which all inputs are inherited.
All methods that this abstract class supports are the same for all other inputs.

### Vertical
This setting specifies that the group with the title should be displayed vertically.
```php
$form->input(...)->vertical()
```

### Horizontal
This setting specifies that the group with the title should be displayed horizontally.
```php
$form->input(...)->horizontal()
```

### Label width
This setting allows you to specify the number of header columns to display in horizontal mode.
```php
$form->input(...)->label_width(int $width)
```


### Queryable
This feature enables you to retrieve the value of an input from the `Request` parameters using the input name.
```php
$form->input(...)->queryable()
```

### Value
This functionality permits you to set a predetermined value for the input field.
```php
$form->input(...)->value($value)
```

### default
This feature enables you to establish a default value for the input field.
```php
$form->input(...)->default($value)
```

### Default from model
This functionality allows you to set a default value for an input field from an existing model, even if the name of the model differs from the input name.
```php
$form->input(...)->defaultFromModel(string $path)
```

### Crypt
This functionality encrypts the value of a field before storing it, providing an additional layer of security for sensitive data.
```php
$form->input(...)->crypt()
```

### Info
This feature allows adding additional information to the input field, providing users with guidance or context about the expected input.
```php
$form->input(...)->info(string $info)
```

### Value to
This feature enables processing the value of an input field with a custom function after it has been generated or retrieved. It allows for further customization or manipulation of the input value before it is displayed or used.
```php
$form->input(...)->value_to(callable $call)
```

### Nullable
This functionality makes the fields optional for input, meaning they are not required to be filled out. Additionally, it adds the corresponding rule to the validation, ensuring that if the field is left blank, it will pass validation without an error.
```php
$form->input(...)->nullable()
```

### Disabled
This feature disables the input, preventing users from entering or modifying its value. It renders the input non-editable, essentially locking its current value.
```php
$form->input(...)->disabled()
```

### Mask
This functionality applies a mask to the input, enforcing a specific format for user input. Masks are patterns that define how data should be formatted as it is entered into an input field. They can be used, for example, to enforce consistent formatting for phone numbers, dates, or credit card numbers.
```php
$form->input(...)->mask(string $mask)
```
[https://github.com/RobinHerbots/Inputmask](https://github.com/RobinHerbots/Inputmask)

### Duplication how slug
This function constantly copies its value as a slug into the input whose ID was specified. It is designed to automatically generate a slug based on the input value and its unique identifier.
```php
$form->input(...)->duplication_how_slug('#input_slug')
```

### Duplication
This function continually duplicates its value into the input field with the specified ID. It's useful for automatically populating one input field with the value of another input field identified by its ID.
```php
$form->input(...)->duplication('#input_slug')
```

### Slugable
This function converts the input string into a slug format. A slug is a URL-friendly version of a string, typically used in URLs to represent the title of a resource. It removes special characters, replaces spaces with hyphens, and converts all characters to lowercase.
```php
$form->input(...)->slugable()
```

## jQuery validation methods

- is_required()
- is_email()
- is_url()
- is_date()
- is_number()
- is_digits()
- is_equal_to(string $field)
- is_max_length(int $max)
- is_min_length(int $min)
- is_range_length(int $min, int $max)
- is_range(int $min, int $max)
- is_max(int $max)
- is_min(int $min)

{columns="2"}

Supports all `Laravel` validation methods. The available list of validation methods can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/RulesBackTrait.php).
