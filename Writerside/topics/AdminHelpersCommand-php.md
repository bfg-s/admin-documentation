# AdminHelpersCommand.php

This class is designed to process the command that creates admin panel assistants for the IDE.

### Property: $executors
Default help executor list.
```php
protected static array $executors
```

### Property: $signature
The name and signature of the console command.
```php
protected $signature
```

### Property: $description
The console command description.
```php
protected $description
```

### Method: addToExecute
Add class in to handle execute.
```php
public static function addToExecute(string $class): void
```

### Method: addObjToExecute
Add object in to handle execute.
```php
public static function addObjToExecute(object|string $obj, string $method): void
```

### Method: handle
Execute the console command.
```php
public function handle(): void
```
