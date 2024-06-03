# AlpineStoreBladeDirective.php

The class that is responsible for the `@alpineStore` blade directive

### Method: oneGenerator
Generate javascript directives for one store.
```php
public static function oneGenerator($name = null, array $attributes = [], bool $needleEventListener = true): string
```

### Method: manyGenerator
Generate javascript directives for several stores.
```php
public static function manyGenerator(array $stores = [], bool $needleEventListener = true): string
```

### Method: generator
Generate javascript directives.
```php
public static function generator(string $name = null, array $attributes = []): string
```

### Method: directive
A function is a directive that is processed by the Blade template engine.
```php
public static function directive($expression): string
```
