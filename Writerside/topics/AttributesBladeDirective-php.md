# AttributesBladeDirective.php

The class that is responsible for the `@attributes` blade directive.

### Method: directive
A function is a directive that is processed by the Blade template engine.
```php
public static function directive($expression): string
```

### Method: attributesBuild
A function that is responsible for generating attributes.
```php
public static function attributesBuild(array $arrayOfAttributes): string
```
