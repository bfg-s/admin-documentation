# Model table extending

To extend a table component and add a column modifier, you can follow these steps:

1. Create a new class that extends the `ModelTableExtension` class.
1. Implement the desired methods in your extension class, each of which will serve as a table extender.
1. Add your extension class to the list of extendable component classes in the `boot` method of the `Config` class.

Here's an example of how you can do this:
```php
use App\Admin\Extensions\ModelTableExtension;
...
public function boot()
{
	parent::boot();
	
	$this->registerModelTableExtensionClass(ModelTableExtension::class);
}
...
```
In this example, `CustomModelTableExtension` is a custom class that extends `ModelTableExtension`. You can implement any custom logic or methods in this class to extend the functionality of the table component. Then, in the `boot` method of the `Config`, you add your extension class to the list of extendable component classes using the `registerModelTableExtensionClass` method. This makes your extension available for use in the table components throughout your application.

The `ModelTableExtension` class provides several default extenders for the table component. Each of these extenders offers different functionalities to enhance the behavior and appearance of the table. Here's a brief overview of the default extenders:

1. **Decorations:** This extender allows you to add decorations or styling to the table columns, such as badges, icons, or custom CSS classes.
1. **Display:** The Display extender enables you to modify how the data is displayed in the table, such as formatting dates, truncating long text, or displaying custom content based on certain conditions.
1. **Editables:** With the Editables extender, you can make table columns editable, allowing users to modify the data directly within the table interface.
1. **Formatter:** The Formatter extender provides advanced formatting options for table data, such as converting timestamps to human-readable formats, formatting numbers, or applying custom formatting rules.

These default extenders offer a wide range of functionalities to customize and enhance the behavior and appearance of the table component in your application. You can use them individually or in combination to meet your specific requirements.

### Extend with Closure
There's no need to register an entire class when you aim to extend table columns; instead, you can utilize a method that allows the registration of a new method through a Closure:
```php
...
public function boot()
{
	parent::boot();
	
	$this->registerModelTableExtension('model_table_extension_name', function () {
		return 'model_table_extension'; // do something
	});
}
...
```
