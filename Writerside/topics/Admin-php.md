# Admin.php

The main class of the admin panel facade.

### Property: $version
Additional version if the main one is not calculated.
```php
public static string $version
```

### Property: $themes
Main list of admin panel themes.
```php
public static \Admin\Themes\Theme[] $themes
```

### Property: $nav_extensions
Extensions that participate in navigation.
```php
public static \Admin\ExtendProvider[] $nav_extensions
```

### Property: $installed_extensions
Installed extensions.
```php
public static \Admin\ExtendProvider[] $installed_extensions
```

### Property: $not_installed_extensions
Uninstalled extensions.
```php
public static \Admin\ExtendProvider[] $not_installed_extensions
```

### Property: $extensions
A list of installed admin panel extensions obtained from a static file.
```php
public static bool[] $extensions
```

### Property: $lang_select
To record the selected language of the admin panel.
```php
public static string|null $lang_select
```

### Property: $theme
Current theme name.
```php
public string $theme
```

### Method: addTheme
Method for adding a theme to the admin panel.
```php
public function addTheme(string $class): void
```

### Method: getTheme
Method for getting the admin panel theme.
```php
public function getTheme(): \Admin\Themes\Theme|null
```

### Method: getThemes
Method for getting a list of admin panel topics.
```php
public function getThemes(): \Admin\Themes\Theme[]|string[]
```

### Method: user
Method for getting the current user of the admin panel.
```php
public function user(): \Admin\Models\AdminUser|\Illuminate\Auth\Authenticatable|null
```

### Method: guest
Method for checking a guest.
```php
public function guest(): bool
```

### Method: version
Method for getting the admin panel version.
```php
public function version(): string
```

### Method: registerExtension
Method for registering an admin panel extension (Used under the hood of the extension provider).
```php
public function registerExtension(\Admin\ExtendProvider $provider): bool
```

### Method: extension
Method for getting the installed admin panel extension.
```php
public function extension(string $name): \Admin\ExtendProvider|bool
```

### Method: extensions
Method for getting a list of installed admin panel extensions.
```php
public function extensions(): \Admin\ExtendProvider[]
```

### Method: getExtension
Method for getting installed or not installed admin panel extension.
```php
public function getExtension(string $name): \Admin\ExtendProvider|null
```

### Method: extensionProviders
Method for obtaining a list of admin panel extension providers.
```php
public function extensionProviders(): string[]
```

### Method: nowLang
Method for getting the current language of the admin panel.
```php
public function nowLang(): string
```
