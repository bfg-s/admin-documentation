# AdminControllerCommand.php

This class is designed to process a command that creates a controller for the admin panel.

### Property: $name
The name and signature of the console command.
```php
protected $name
```

### Property: $description
The console command description.
```php
protected $description
```

### Method: handle
Execute the console command.
```php
public function handle(): int
```

### Method: getArguments
Get the console command arguments.
```php
protected function getArguments(): array
```

### Method: getOptions
Get the console command options.
```php
protected function getOptions(): array
```
