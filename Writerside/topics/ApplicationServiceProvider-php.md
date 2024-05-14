# ApplicationServiceProvider.php

Basic package configuration class. It registers all service providers, facades and aliases, as well as configures the package configuration.
Your admin panel provider is `App\Providers\AdminServiceProvider`.
Your application in `app` is the same extension for the admin panel as any other extension, it’s just that this extension is the main one.

### Property: $slug
Extension call slug.
```php
public static $slug
```

### Property: $defaultScripts
Standard admin panel scripts.
```php
protected string[] $defaultScripts
```

### Property: $defaultStyles
Standard admin panel styles.
```php
protected string[] $defaultStyles
```

### Method: register
A method that is executed immediately after registering a service provider.
```php
public function register(): void
```

### Method: boot
Method for initializing the configuration. Called when the configuration is loaded.
```php
public function boot(): void
```

### Method: included
A method that determines whether the extension will participate in the navigation of the admin panel.
```php
public function included(): bool
```
