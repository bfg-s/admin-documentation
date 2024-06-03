# UpdateWithPjaxBladeDirective.php

The class is responsible for the blade directive `@updateWithPjax`.

### Property: $_lives
List of live tags that are updated.
```php
public static array $_lives
```

### Method: directive
A function is a directive that is processed by the Blade template engine.
```php
public static function directive(): string
```

### Method: buildAttribute
A function that is responsible for generating data attribute.
```php
public static function buildAttribute(): string
```
