# Explanation.php

Main explanation class. Designed for field management.

### Property: $delegates
List of declarations added to the explanation.
```php
public \Admin\Core\Delegate[] $delegates
```

### Property: $router
Current application router.
```php
protected \Illuminate\Routing\Router $router
```

### Method: new
Method for creating a new explanation instance.
```php
public static function new(...$delegates): static
```

### Method: with
Method for adding delegations to the current list of delegations.
```php
public function with(\Admin\Core\Delegate|array $delegate = null): static
```

### Method: index
Add delegations only if there is an index on the router.
```php
public function index(...$delegates): static
```

### Method: form
Add delegations only if there is editing or adding on the router.
```php
public function form(...$delegates): static
```

### Method: create
Add delegations only if you are creating a router.
```php
public function create(...$delegates): static
```

### Method: edit
Add delegations only if you are editing on the router.
```php
public function edit(...$delegates): static
```

### Method: show
Add delegations only if shown on the router.
```php
public function show(...$delegates): static
```

### Method: applyFor
Apply delegations to the specified implementation.
```php
public function applyFor(string $class, object $instance): static
```

### Method: apply
Apply delegation to the specified implementation.
```php
protected function apply(Delegate $delegate, object $instance): static
```

### Method: isEmpty
Check if delegations are empty.
```php
public function isEmpty(): bool
```
