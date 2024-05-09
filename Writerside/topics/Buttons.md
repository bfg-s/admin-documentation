# Buttons

The "Group of Buttons" component is a comprehensive collection that encapsulates all possible interactive scenarios within an admin panel page, serving as an essential tool for administrators to manage and interact with the content effectively. This component is a distinct element of the delegator class `\Admin\Delegates\Buttons`, which is specifically designed to streamline and facilitate various administrative actions through a well-organized interface.
```php
use App\Admin\Delegates\Buttons;

return $page->modal(
	...,
	$modal->buttons()->success()->icon_save()->title('Save')->modalSubmit(),
)
// OR
return $page->card(
	$card->buttons()->dark()->title('Settings')->modal(),
)
```
Initially, a group of buttons is always available, this is a component located at the namespace `\Admin\Components\ButtonsComponent` with which you can create individual button classes `\Admin\Components\ButtonComponent`.

Grouping methods, as a rule, all components separate button groups by nesting, which means that if you need to create a group of buttons, then we wrap them in a method:
```php
$card->buttons(
	$button->success()->title('My title'),
	$button->danger()->title('My next title'),
)
```
If it is necessary to “unstick” the buttons, then they should be separate from each other:
```php
$page->card(
	$card->buttons()->success()->title('My title'),
	$card->buttons()->danger()->title('My next title'),
)
```
The button group has many different kinds of modifications.

### btn
To create a simple button with default styles and types using the provided syntax, you can use the following code:
```php
$card->buttons()->btn()->title('Button title'): ButtonComponent
```
This code creates a button component with the specified title "Button title" and applies default styles and types. You can further customize the button's appearance and behavior as needed.

### default
To create a standard button with default styles and types, you can use the following code:
```php
$card->buttons()->default()->title('Button title'): ButtonComponent
```
This code creates a button component with the specified title "Button title" and applies default styles and types. You can further customize the button's appearance and behavior as needed.

### secondary
To create a clean secondary button, you can use the following code:
```php
$card->buttons()->secondary()->title('Button title'): ButtonComponent
```
This code creates a secondary button component with the specified title "Button title" and applies clean styles. You can further customize the button's appearance and behavior as needed.

### dark
To create a clean black button, you can use the following code:
```php
$card->buttons()->dark()->title('Button title'): ButtonComponent
```
This code creates a black button component with the specified title "Button title" and applies clean styles. You can further customize the button's appearance and behavior as needed.

### info
To create a clean informative button, you can use the following code:
```php
$card->buttons()->info()->title('Button title'): ButtonComponent
```
This code creates an informative button component with the specified title "Button title" and applies clean styles. You can further customize the button's appearance and behavior as needed.

### primary
To create a clean primary button, you can use the following code:
```php
$card->buttons()->primary()->title('Button title'): ButtonComponent
```
This code creates a primary button component with the specified title "Button title" and applies clean styles. You can further customize the button's appearance and behavior as needed.

### success
To create a clean success button, you can use the following code:
```php
$card->buttons()->success()->title('Button title'): ButtonComponent
```
This code creates a success button component with the specified title "Button title" and applies clean styles. You can further customize the button's appearance and behavior as needed.

### danger
To create a clean danger button with the specified title "Button title", you can use the following code:
```php
$card->buttons()->danger()->title('Button title'): ButtonComponent
```
This code generates a danger button component with clean styles. Further customization options are available based on your requirements.

### warning
To create a clean warning button with the specified title "Button title", you can use the following code:
```php
$card->buttons()->warning()->title('Button title'): ButtonComponent
```
This code generates a warning button component with clean styles. Further customization options are available based on your requirements.

### nestable
To create a group of buttons for controlling nested models, you can use the following code:
```php
$card->buttons()->nestable(): ButtonsComponent
```
This code generates a button group specifically designed for controlling nested models and returns the corresponding `ButtonsComponent` class instance.

### reload
To create a button for reloading the page, you can use the following code:
```php
$card->buttons()->reload(): ButtonComponent
```
This code generates a reload button and returns the corresponding `ButtonComponent` class instance.

### resourceList
To create a redirect button to the main page of the resource controller, you can use the `resourceList` method like this:
```php
$card->buttons()->resourceList(
	string $link = null, string $title = null
): ButtonsComponent
```
This will generate a button labeled "Main Page" that redirects to the specified URL (`url_to_main_page`). The method returns the `ButtonsComponent` class instance for further customization if needed.

### resourceAdd
To create a redirect button to the page for adding data to the resource controller model, which is commonly used in tools by default, you can use the `resourceAdd` method like this:
```php
$card->buttons()->resourceAdd(
	string $link = null, string $title = null
): ButtonsComponent
```
This will generate a button labeled "Add Data" that redirects to the specified URL (`url_to_add_page`). The method returns the `ButtonsComponent` class instance for further customization if needed.

### resourceEdit
To create a redirect button to the data edit page in the resource controller model, commonly used in tools by default, you can use the `resourceEdit` method like this:
```php
$card->buttons()->resourceEdit(
	string $link = null, string $title = null
): ButtonsComponent
```
This will generate a button labeled "Edit Data" that redirects to the specified URL (`url_to_edit_page`). The method returns the `ButtonsComponent` class instance for further customization if needed.

### resourceInfo
To create a redirect button to the information page of the resource controller model, commonly used in tools by default, you can utilize the `resourceInfo` method like so:
```php
$card->buttons()->resourceInfo(
	string $link = null, string $title = null
): ButtonsComponent
```
This will produce a button labeled "Info" that redirects to the specified URL (`url_to_info_page`). The method returns the `ButtonsComponent` class instance for further customization if necessary.

### resourceDestroy
To create a button that sends a request to delete the resource controller model, commonly used in tools by default, you can use the `resourceDestroy` method like this:
```php
$card->buttons()->resourceDestroy(
	string $link = null, string $title = null, string $message = null, $key = null
): ButtonsComponent
```
This will generate a button labeled "Delete" that sends a request to the specified URL (`url_to_delete`) to delete the resource controller model. The confirmation message "Are you sure?" will be displayed before the deletion action. The method returns the `ButtonsComponent` class instance for further customization if necessary.

### resourceForceDestroy
To create a button that sends a request to force delete the resource controller model, commonly used in tools by default, you can use the `resourceForceDestroy` method like this:
```php
$card->buttons()->resourceForceDestroy(
	string $link = null, string $title = null, string $message = null, $key = null
): ButtonsComponent
```
This will generate a button labeled "Force Delete" that sends a request to the specified URL (`url_to_force_delete`) to force delete the resource controller model. The confirmation message "Are you sure?" will be displayed before the deletion action. The method returns the `ButtonsComponent` class instance for further customization if necessary.

### resourceRestore
To create a button that sends a request to restore the resource controller model, commonly used in tools by default, you can use the `resourceRestore` method like this:
```php
$card->buttons()->resourceRestore(
	string $link = null, string $title = null, string $message = null, $key = null
): ButtonsComponent
```
This will generate a button labeled "Restore" that sends a request to the specified URL (`url_to_restore`) to restore the resource controller model. The confirmation message "Are you sure?" will be displayed before the restoration action. The method returns the `ButtonsComponent` class instance for further customization if necessary.

## Button
The `ButtonComponent` class also provides helper methods for further customization:

### icon
Set the icon of the button, it is desirable to put it on each button, since when adapting to a mobile device (if an icon exists), the text will be hidden, thus it becomes possible to save space for control buttons on a mobile device.
```php
$card->buttons()->success()->icon('fas fa-users'): ButtonComponent
```
Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).

### title
Set the title of the button (Will be hidden when adapting on mobile if there is an icon).
```php
$card->buttons()->success()->title('Button title text'): ButtonComponent
```

### modal
Starts the loading process of the modal window and opens it. More details in the “Modal window” section.
```php
$card->buttons()->success()->modal(
	string $modalName = "modal", array $query = []
): ButtonComponent
```

### modalDestroy
Removes the current (open) modal window. It makes sense to use only in a modal window.
```php
$card->buttons()->success()->modalDestroy(): ButtonComponent
```

### modalHide
Hide the current (open) modal window. After reloading the page, it will open again. It makes sense to use only in a modal window.
```php
$card->buttons()->success()->modalHide(): ButtonComponent
```

### modalSubmit
Send the data of the current (open) modal to a callback or as `GET` parameters. It makes sense to use only in a modal window.
```php
$card->buttons()->success()->modalSubmit(): ButtonComponent
```

### query
Control `GET` parameters, the first parameter is the variables to be added to the current ones (does not remove the old ones), and the second one takes a list of keys to be excluded.
```php
$card->buttons()->success()->query(
	array $params = [], array $unset = []
): ButtonComponent
```

### unsetQuery
Control `GET` parameters, the first parameter accepts a list of keys to be excluded, and the second is the variables to be added to the current ones (does not remove the old ones). That is, like the `query` method, but only the parameters are reversed.
```php
$card->buttons()->success()->unsetQuery(
	array $unset = [], array $params = []
): ButtonComponent
```

### switchQuery
Control `GET` parameters, add if not present or remove if there is a key(s) in the variable list. The second parameter is the toggle value.
```php
$card->buttons()->success()->switchQuery(
	string|array $name, $value = 1
): ButtonComponent
```

### setQuery
Control `GET` parameters, add key(s) to variable list. The second parameter is the value to be set.
```php
$card->buttons()->success()->setQuery(
	string|array $name, $value = 1
): ButtonComponent
```

### forgetQuery
Control `GET` parameters, remove key(s) from variable list.
```php
$card->buttons()->success()->forgetQuery(
	string|array $name
): ButtonComponent
```
