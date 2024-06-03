# ServiceProvider.php

The main class of the service provider of the admin panel in which all additional features of the admin panel are connected, such as publishing assets, declaring commands, middleware, and so on.

### Property: $commands
List of admin panel commands.
```php
protected array $commands
```

### Property: $routeMiddleware
The application's route middleware.
```php
protected array $routeMiddleware
```

### Method: boot
Bootstrap services.
```php
public function boot(): void
```

### Method: makeRouter
Create a router admin panel.
```php
protected function makeRouter(): \Illuminate\Routing\RouteRegistrar
```

### Method: redirectebleRoute
Create a router for redirecting from a language for the admin panel.
```php
public function redirectebleRoute(): void
```

### Method: viewVariables
Make view variables.
```php
private function viewVariables(): void
```

### Method: register
Register services.
```php
public function register(): void
```

### Method: registerRouteMiddleware
Register the route middleware.
```php
protected function registerRouteMiddleware(): void
```

### Method: loadAuthAndDiscConfig
Setup auth and disc configuration.
```php
private function loadAuthAndDiscConfig(): void
```
