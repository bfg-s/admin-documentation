# ExtendProvider.php

Class for extending the extension provider.

### Property: $name
Extension ID name.
```php
public static string $name
```

### Property: $slug
Extension call slug.
```php
public static string $slug
```

### Property: $description
Extension description.
```php
public static string $description
```

### Property: $after
Set extension routes after all other extensions.
```php
public static string|null $after
```

### Property: $commands
Built-in expansion commands.
```php
protected array $commands
```

### Property: $routeMiddleware
The application's route middleware.
```php
protected array $routeMiddleware
```

### Property: $bind
Simple bind in app service provider.
```php
protected array $bind
```

### Property: $navigator
Navigator class for extension.
```php
protected string $navigator
```

### Property: $install
The installer class for the extension.
```php
protected string $install
```

### Property: $uninstall
Removal class for extension.
```php
protected string $uninstall
```

### Property: $permissions
Access extension class for extension.
```php
protected string $permissions
```

### Property: $config
Extension configuration class.
```php
protected \Admin\Core\ConfigExtensionProvider|string $config
```

### Method: boot
Method for initializing the configuration. Called when the configuration is loaded.
```php
public function boot(): void
```

### Method: register
A method that is executed immediately after registering a service provider.
```php
public function register(): void
```

### Method: getNameAndDescription
Get name and description from composer.json.
```php
protected function getNameAndDescription(): void
```

### Method: generateSlug
Generate extension slug.
```php
protected function generateSlug(): void
```

### Method: registerRouteMiddleware
Register the route middleware.
```php
protected function registerRouteMiddleware(): void
```

### Method: included
A method that determines whether the extension will participate in the navigation of the admin panel.
```php
public function included(): bool
```

### Method: navigator
Extension navigator element.
```php
public function navigator(\Admin\Interfaces\NavigateInterface $navigate): void
```

### Method: install
Extension install process.
```php
public function install(\Illuminate\Console\Command $command): void
```

### Method: uninstall
Extension uninstall process.
```php
public function uninstall(\Illuminate\Console\Command $command): void
```

### Method: permissions
Extension permission process.
```php
public function permission(\Illuminate\Console\Command $command, string $type): void
```

### Method: config
Get extension config class.
```php
public function config(): \Admin\Core\ConfigExtensionProvider|string
```
