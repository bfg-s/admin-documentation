# Component

All components within the extension derive from a specialized abstract component of the admin panel. This foundational component is inherently equipped with an array of helper methods, designed to streamline the development process and enhance the functionality of the extension's components by default.

### model
This operation assigns a specific model to the component and its subsequent child elements, effectively establishing a unified data model across these interconnected components.
```php
$component->model(User::find(1)): static
```

### withCollection
This process involves applying a collection to the component, wherein a callback function is anticipated to yield the delegations associated with the component. This mechanism allows for dynamic integration and manipulation of data within the component's scope.
```php
$component->withCollection(User::all(), fn (User $user) => [
		$component->buttons()->success()->title($user->name)
]): static
```

### with
This procedure entails executing a callback function on a component, where the function is designed to produce the component's delegations. This approach enables targeted modifications and enhancements to the component through the callback's logic.
```php
$component->with(callable $callback): static
```

### click, dblclick, hover
This method facilitates the execution of a specified callback when the component it is attached to is interacted with through a click, double-click, or hover action. It allows for dynamic response and functionality based on user interactions with the component.
```php
$component->click(callable $callback, array $parameters = []): static
```
This method allows for the passing of a callback as the initial parameter, with a subsequent array of data designated for transmission to the method following as the second parameter. The organization of parameters adheres to specific rules: for associative arrays, the key-value pairing functions in the anticipated manner, allowing us to interpret the key as the variable name within the method. In instances where there's a necessity to forward model data, it's possible to specify data without an explicit key; such entries will be interpreted based on the key from the model associated with the current component.
```php
$component->click(function (?int $id, ?string $name) {
	if ($name == 'send') {
		...
	}
}, array $parameters = [
	'id', // Send model id with key id
	'action' => 'send', // Easy data transfer
]): static
```

Also, don't forget what [callable](https://www.php.net/manual/ru/language.types.callable.php) [type](https://www.php.net/manual/ru/language.types.callable.php).

### setTitle
This function allows you to attach a `tooltip` to the component. This tooltip, a concise and informative message, becomes visible when the user hovers over the component that incorporates this method, providing additional context or guidance.
```php
$component->setTitle(string $title): static
```

### withoutRealtime
This method is used to disable the real-time update of the component. By default, the component is set to update in real-time, but this function allows for the deactivation of this feature.
```php
$component->withoutRealtime(): static
```
