# AdminExtensionCommand.php

This class is designed to process commands that manage extensions for the admin panel.

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

### Property: $desc
A description that the user must provide.
```php
protected string|null $desc
```

### Property: $author_name
The name of the author that the user must specify.
```php
protected string|null $author_name
```

### Property: $author_email
Author's email which must be specified by the user.
```php
protected string|null $author_email
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

### Method: addRepoToComposer
A function that is responsible for adding the path to the composer repository.
```php
protected function addRepoToComposer(string $path): bool
```

### Method: callComposer
A function that is responsible for calling composer commands.
```php
protected function callComposer(string $command)
```

### Method: anyExistsExtension
A function that checks whether an extension exists.
```php
protected function anyExistsExtension($name): bool
```

### Method: validateNewExtensionName
A function that validates the specified package name for an extension.
```php
protected function validateNewExtensionName($name): bool|array
```

### Method: enterDescription
Function for enter description, author and email.
```php
protected function enterDescription(): void
```

### Method: getStub
Get a template stub.
```php
protected function getStub(string $file): bool|string
```

### Method: editExtension
Handles the edit action of an extension package.
```php
protected function editExtension($name)
```

### Method: choiceDone
An event that fires every time any of the selected actions is completed.
```php
protected function choiceDone($name = null)
```

### Method: makeExtension
The action of creating a new extension package for the admin panel.
```php
protected function makeExtension($name)
```

### Method: installAll
The action of installing all package extensions.
```php
protected function installAll()
```

### Method: choiceInstall
The action to install the selected extension package.
```php
protected function choiceInstall($name)
```

### Method: uninstallAll
The action of removing all extension packages.
```php
protected function uninstallAll()
```

### Method: choiceUninstall
The action to remove the specified extension package.
```php
protected function choiceUninstall($name)
```

### Method: reinstallAll
The action of reinstalling all expansion packs.
```php
protected function reinstallAll()
```

### Method: choiceReinstall
The action to reinstall the specified extension package.
```php
protected function choiceReinstall($name)
```

### Method: workWithExtension
The action of working with an extension package offers a choice of actions that can be performed with it.
```php
protected function workWithExtension($name): mixed
```

### Method: findRemote
Action to find and install an extension package.
```php
protected function findRemote($name): mixed
```

### Method: getRemotes
Get a remote list of extension packages.
```php
protected function getRemotes(): array
```

### Method: downloadExtension
Load the specified extension package from a remote source.
```php
protected function downloadExtension($name, bool $auto = false)
```

### Method: choiceEnable
The action of enabling the specified extension package.
```php
protected function choiceEnable($name)
```

### Method: choiceDisable
The action to disable the specified extension package.
```php
protected function choiceDisable($name)
```

### Method: remoteList
Get and show all remote extensions.
```php
protected function remoteList()
```

### Method: installedList
Show installed extension packages.
```php
protected function installedList()
```

### Method: allExtensions
Get a list of all installed and uninstalled extension packages.
```php
protected function allExtensions(): Collection
```
