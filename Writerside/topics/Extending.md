# Extending

To create your own extension, you need to run the following command:
```Bash
php artisan admin:extension vendor/package-name --make
```
Answer the questions and the extension will be created in the `app/Admin/Extensions/vendor/package` folder.

Then describe the extension configuration files in the `app/Admin/Extensions/vendor/package/src/Extension` folder.

Then install the extension using the command:
```Bash
php artisan admin:extension vendor/package-name --install
```

The admin panel extension is registered in the file `app/Admin/Extensions/vendor/package/src/Extension/Config.php` in the `boot` method.
This method is called when loading an extension into the admin panel or when loading console applications.
