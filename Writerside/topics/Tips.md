# Tips

## Laravel 11 support
By default in Laravel 11 the session driver is `database`.
This driver is not compatible with the admin panel, so it must be replaced with `file` or `redis`.
If you use `database`, then you will not be able to log in to the admin panel normally, 
each AJAX request will reset the session until re-authorization.

## No scripts or styles
Sometimes it happens that your panel may not be displayed correctly, without styles, this may be due to the fact that your project ignores uploading panel styles and scripts to the repository.
In order to fix this you need to publish panel styles and scripts to your project using the commands: 
```Bash
php artisan vendor:publish --tag=admin-assets
```
Typically this data is published during the installation of the admin panel.

## New controller
When you create a new controller using the `php artisan admin:controller` command, use the `--model` flag to specify the model that will be used in the controller, this will automatically create the controller fields from the list of model fields, namely from `fillable`.
