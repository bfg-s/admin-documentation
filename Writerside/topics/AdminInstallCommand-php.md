# AdminInstallCommand.php

This class is designed to process the command that installs the admin panel.

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

### Method: getOptions
Get the console command options.
```php
protected function getOptions(): array
```
