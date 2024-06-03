# Respond.php

A class that is responsible for collecting commands that need to be executed on the front end.

### Property: $instance_glob
Global instance of respond.
```php
private static \Admin\Respond|null $instance_glob
```

### Property: $renderWithExecutor
A flag that determines whether the wrapper will be an executor function on the front end.
```php
protected bool $renderWithExecutor
```

### Method: glob
Access to global instance.
```php
public static function glob(): static
```

### Method: create
Create new respond instance.
```php
public static function create(...$attributes): static
```

### Method: location
Redirects to the specified address.
```php
public function location(string $link = null): static
```

### Method: put
Add an arbitrary command to be executed by the client.
```php
public function put($key, $value = null): static
```

### Method: redirect
Redirects to the specified address and reloads the page.
```php
public function redirect(string $link = null): static
```

### Method: reload
Reloads content on the page.
```php
public function reload(string $link = null): static
```

### Method: reboot
Reloads the page with a real page reload.
```php
public function reboot(string $link = null): static
```

### Method: toast_success
Sends a message indicating the operation was successful.
```php
public function toast_success($text, $title = null): static
```

### Method: toast
Send a toast message.
```php
public function toast($type, $text, $title = null): static
```

### Method: toast_warning
Sends a warning message.
```php
public function toast_warning($text, $title = null): static
```

### Method: toast_info
Sends an informational message.
```php
public function toast_info($text, $title = null): static
```

### Method: toast_error
Sends an error message.
```php
public function toast_error($text, $title = null): static
```

### Method: toHtml
Convert command library to string for HTML.
```php
public function toHtml(): string
```

### Method: toJson
Convert command library to Json.
```php
public function toJson($options = JSON_UNESCAPED_UNICODE): string
```

### Method: __toString
Convert command library to string.
```php
public function __toString()
```

### Method: render
Render a library of commands for execution.
```php
public function render(): string
```

### Method: renderWithExecutor
Render a library of commands with a front-end executor function.
```php
public function renderWithExecutor(): static
```
