# SystemJsBladeDirective.php

The class is responsible for the `@adminSystemJs` blade directive.

### Property: $componentJs
Property for storing custom admin panel scripts.
```php
protected static array $componentJs
```

### Method: directive
A function is a directive that is processed by the Blade template engine.
```php
public static function directive(): string
```

### Method: buildScripts
A function that is responsible for generating scripts.
```php
public static function buildScripts(bool $tag = true): string
```

### Method: addComponentJs
Add a custom script to the admin panel.
```php
public static function addComponentJs(string $js): void
```
