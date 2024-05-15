# Page.php

The main file of the page where all components are placed. 
The main page container class.

### Property: $models
Has models on process.
```php
protected static array $models
```

### Property: $menu
The menu item that is currently active or selected.
```php
public \Admin\Core\MenuItem|null $menu
```

### Property: $menus
List of all menu items present on the page.
```php
public \Illuminate\Support\Collection|null $menus
```

### Property: $controller
The current application controller.
```php
public \App\Admin\Controllers\Controller|null $controller
```

### Property: $controllerClassName
The current name of the application controller class.
```php
public string|null $controllerClassName
```

### Property: $resource_type
The application's current operation type (add, edit, view, index...).
```php
public string|null $resource_type
```

### Property: $classes
Child classes that should be displayed on the page
```php
protected array $classes
```

### Property: $explanations
List of explanations for nested child classes.
```php
protected array $explanations
```

### Property: $router
Current application router.
```php
protected Router $router
```

### Property: $content
The last content component.
```php
protected string $content
```

### Property: $model
The main current model to which the page belongs.
```php
protected Model|null $model
```

### Property: $model_class
The class name of the main current model to which the page belongs.
```php
protected string|null $model_class
```

### Property: $firstExplanation
Explanations of what should be done first after creating a component on a page.
```php
protected mixed $firstExplanation
```

### Method: __construct
Page constructor.
```php
public function __construct(\Illuminate\Routing\Router $router)
```

### Method: model
Install your model or get the current model.
```php
public function model($model = null)
```

### Method: menu
Get and assign the current menu item.
```php
public function menu(): \Admin\Core\MenuItem|null
```

### Method: findModelMenu
Find a menu item that belongs to the specified model class.
```php
public function findModelMenu(string $model): mixed
```

### Method: getModelName
Get the unique name of the page model.
```php
public function getModelName($model = null): string
```

### Method: getModel
Get the current page model.
```php
public function getModel(): Model|null
```

### Method: next
Follow these steps with explanations.
```php
public function next(...$delegates): static
```

### Method: explanation
Add an explanation to the list with explanations.
```php
public function explanation(\Admin\Explanation|callable $extend): static
```

### Method: forgetClass
Forget the specified children's class.
```php
public function forgetClass(string $class): static
```

### Method: hasClass
Check if the specified child class exists.
```php
public function hasClass(string $class): bool
```

### Method: callCallBack
Apply a callback to the current page.
```php
public function callCallBack(callable $callback = null, object $registerBefore = null): static
```

### Method: registerClass
Register your children's class.
```php
public function registerClass(object $class): object
```

### Method: applyExplanations
Applies existing explanations to the specified class.
```php
protected function applyExplanations(string $class, object $instance): void
```

### Method: __call
A magic method that is responsible for filling this page with content when we magically write the name of our component.
```php
public function __call($name, $arguments)
```

### Method: explainForClasses
Apply delegations to all classes that are currently present on the page.
```php
protected function explainForClasses(array $delegates = []): static
```

### Method: getContent
Get the latest content component.
```php
public function getContent(): \Admin\Components\Component|string|null
```

### Method: getClass
Get the specified child class.
```php
public function getClass(string $class, mixed $default = null): mixed
```
