# Register new form component

To enhance your forms with additional components, you can make use of the `registerFormComponent` method within your `App\Admin\Config` class.
This involves specifying the name and the class of your input component.
Here is an example to illustrate this process:

```php
...
public function boot()
{
	parent::boot();
	
	$this->registerFormComponent('form_component_name', FormComponentClass::class);
}
...
```
All form components must inherit from the `Admin\Components\FormGroupComponent` class to ensure they are properly integrated and function as intended within the administrative framework.
