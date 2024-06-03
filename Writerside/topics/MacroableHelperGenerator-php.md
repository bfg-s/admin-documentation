# MacroableHelperGenerator.php

The class is responsible for macro helpers, additional components and custom components and inputs.

### Property: dirs
Directories where the search for classes with a macro trait and a signature for a property with methods will be performed.
```php
public static array $dirs
```

### Property: fields
All existing model fields.
```php
public static array $fields
```

### Property: types
All available relationship types for models.
```php
protected array $types
```

### Property: relations
All available model relationships.
```php
protected array $relations
```

### Property: model_lines
The content of the current model is divided into an array by rows.
```php
protected array $model_lines
```

### Method: handle
Output helper generation function.
```php
public function handle(Command $command): void
```

### Method: getDocVariables
Get all variables of the specified dock block.
```php
public static function getDocVariables(string $doc, string $var_name): array
```

### Method: extendMethods
Generate extension methods and properties of components, model fields and their connections.
```php
protected function extendMethods(DocumentorEntity $doc, array $class_data): void
```

### Method: getModelFields
Get the fields of all models that are in the application.
```php
protected function getModelFields(): array
```

### Method: getAllRelations
Get the relationships of all models that are in the application.
```php
protected function getAllRelations(ReflectionClass $ref): array
```

### Method: getModelDataByLines
Get text from the model at the beginning of the line and at the end of the line.
```php
protected function getModelDataByLines(int $start, int $end): string
```

### Method: createSearchAndColAndRowFields
Creates model helper properties and methods for searches and tables.
```php
public function createSearchAndColAndRowFields(): void
```
