# SystemCssBladeDirective.php

The class responsible for the blade directive `@adminSystemCss`

### Property: $componentCss
Property for storing custom admin panel styles.
```php
protected static array $componentCss
```

### Method: directive
A function is a directive that is processed by the Blade template engine.
```php
public static function directive(): string
```

### Method: buildStyles
A function that is responsible for generating styles.
```php
public static function buildStyles(): string
```

### Method: addComponentCss
Add a custom style to the admin panel.
```php
public static function addComponentCss(string $css): void
```
