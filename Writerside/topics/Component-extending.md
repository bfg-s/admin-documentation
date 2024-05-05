# Register new component

To register a new component, you can utilize the `registerComponent` method found in your `Config` class. Here is an example demonstrating how to use this method:
```php
...
public function boot()
{
	parent::boot();
	
	$this->registerComponent('component_name', ComponentClass::class);
}
...
```
All components must inherit from the `Admin\Components\Component` class to ensure they are properly integrated and function as intended within the administrative framework.
