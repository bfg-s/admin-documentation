# Commands

To streamline the development process of your extension app, a series of helpful commands are available. These commands are designed to assist in various aspects of extension development, from installation to user and controller generation.

### Install

This command is utilized to internally install the extension within your application.

```bash
php artisan admin:install
```

### Make Administration User

Generates a new user for the extension.

```bash
php artisan admin:user
```

Parameters:

- `[email]` - Email address of the generated user.
- `[name]` - Name of the generated user.

### Make Controller

Creates a resource controller for the extension application.

```bash
php artisan admin:controller
```

Parameters:

- `[name]` - Name of the generated controller.
- `-m, --model` - Name of the model associated with the controller.

### Extension control

```bash
php artisan admin:extension
```

Parameters:

- `[name]` - Name of the extension.
- `-s, --show` - Show all existing packages.
- `-i, --install` - Install any selected or all extensions.
- `-u, --uninstall` - UnInstall any selected or all extensions.
- `-r, --reinstall` - ReInstall any selected or all extension.
- `-f, --force` - Force action.
- `-y, --yes` - Enter yes on all.
- `-m, --make` - Create extension by selected name.
- `-e, --edit` - Edit extension by selected name.

