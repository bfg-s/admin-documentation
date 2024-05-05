# IDE-Helpers

To automatically generate helper code for your admin panel after running `composer install` or `composer update`, you can add the `@php artisan admin:helpers` command to the list of `post-autoload-dump` commands in your `composer.json` scripts. Here's how you can do it:
```json
{
    "scripts": {
        "post-autoload-dump": [
            "@php artisan admin:helpers",
            "... other commands"
        ]
    }
}
```
By adding `@php artisan admin:helpers` to the `post-autoload-dump` commands, the helper code will be generated automatically each time you run `composer install` or `composer update`. This ensures that your admin panel remains up-to-date with the latest helper code without manual intervention.

> When you have added or changed a field in your models, run this command as well to always get the correct hints.

> The command `php artisan admin:install` will add this command to you automatically, if you don't want to generate any helper, you can remove it from the list of commands.
