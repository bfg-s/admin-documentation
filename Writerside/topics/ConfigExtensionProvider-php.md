# ConfigExtensionProvider.php

Abstract class for extending the configuration of the package.
This class is the base class for all configuration classes in the package.

### Property: $provider
Current extension provider.
```php
public ExtendProvider $provider
```

### Property: $scripts
Global extension scripts.
```php
protected string[] $scripts
```

### Property: $styles
Global extension styles.
```php
protected string[] $styles
```

### Method: boot
Method for initializing the configuration. Called when the configuration is loaded.
```php
public function boot(): void
```

### Method: routes
Register extension routers.
```php
public function routes(\Illuminate\Routing\RouteRegistrar $route)
```

### Method: registerModelTableExtension
Helper property for adding extensions to the model table.
```php
public function registerModelTableExtension(string $name, Closure $call): static
```

### Method: registerModelTableExtensionClass
Helper property for adding an extension class to a model table.
```php
public function registerModelTableExtensionClass(string $class): static
```

### Method: registerFormComponent
Helper property for adding inputs to the form.
```php
public function registerFormComponent(string $name, string $class): static
```

### Method: registerComponent
Helper property for registering a global component.
```php
public function registerComponent(string $name, string $class): static
```

### Method: getScripts
Get extension scripts.
```php
public function getScripts(): array
```

### Method: getStyles
Get extension styles.
```php
public function getStyles(): array
```

### Method: mergeScripts
Merge scripts to extension script list.
```php
public function mergeScripts(array $scripts): static
```

### Method: mergeStyles
Merge styles to extension style list.
```php
public function mergeStyles(array $styles): static
```

### Method: metas
Method for adding meta tags to the admin panel.
```php
public function metas(): string[]
```

### Method: js
Method for adding JavaScript scripts to the admin panel.
```php
public function js(): string
```

### Method: css
Method for adding CSS styles to the admin panel.
```php
public function css(): string
```

### Method: middleware
Register middleware callback.
To process the current request of the panel page at the middleware level.
```php
public function middleware(Request $request): void
```

### Method: response
Register response callback.
To process the current response of the panel page.
```php
public function response(Request $request): void
```
