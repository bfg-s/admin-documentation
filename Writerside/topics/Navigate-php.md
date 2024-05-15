# Navigate.php

Parent navigation class. This class is responsible for creating the navigation menu in the admin panel.

### Property: $items
A global list of menu items from which navigation is based.
```php
public static array $items
```

### Property: $router
Current application router.
```php
public static Router $router
```

### Property: $extension
Extension provider.
```php
public static \Admin\ExtendProvider|null $extension
```

### Method: do
Execute a callback on the current navigation instance.
```php
public static function do(...$calls): static
```

### Method: instance
Get the current navigator instance.
```php
public function instance(): static
```

### Method: menu_header
Add a title to the menu.
```php
public function menu_header(string $title): static
```

### Method: nav_bar_view
Add a template that will be displayed in the navigation which is in the header.
```php
public function nav_bar_view(string $view, array $params = [], bool $prepend = false): static
```

### Method: nav_bar_vue
Add a Vue component that will be displayed in the navigation which is in the header.
```php
public function nav_bar_vue(string $class, array $params = [], bool $prepend = false): static
```

### Method: left_nav_bar_view
Add a template that will be displayed in the left navigation which is in the header.
```php
public function left_nav_bar_view(string $view, array $params = []): static
```

### Method: left_nav_bar_vue
Add a Vue component that will be displayed in the left navigation which is in the header.
```php
public function left_nav_bar_vue(string $class, array $params = []): static
```

### Method: group
Create a group of menu items.
```php
public function group(string $title = null, $route = null, $cb = null): \Admin\Core\NavGroup
```

### Method: includeAfterGroup
Integrate extension navigation.
```php
protected function includeAfterGroup($name): void
```

### Method: item
Add a menu item.
```php
public function item(string $title = null, string $route = null, $action = null): \Admin\Core\NavItem
```

### Method: get
Get all the menu items that exist.
```php
public function get(): array
```

### Method: getRawItems
Get all the menu items in their raw form as they are stored.
```php
public function getRawItems(): array
```

### Method: channel
Register a channel authenticator.
```php
public function channel(string $channel, callable|string|array $callback, array $options = []): static
```

### Method: __call
Magic method that adds support for calling extensions by slug.
```php
public function __call($name, $arguments)
```
