# ApplicationConfig.php

Abstract class for application configuration. Your configuration class `app/Admin/Config.php` should inherit from this class.
This class inherits from the class [\Admin\Core\ConfigExtensionProvider](ConfigExtensionProvider-php.md).

### Method: boot
Method for initializing the configuration. Called when the configuration is loaded.
```php
public function boot(): void
```

### Method: js
Method for adding JavaScript scripts to the admin panel.
```php
public function js(): string
```

### Method: metas
Method for adding meta tags to the admin panel.
```php
public function metas(): string[]
```
