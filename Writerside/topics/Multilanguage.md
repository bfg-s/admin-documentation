# Multi language

A component designed to clone **Simple input** elements with the addition of a prefix to the `input` name can be a powerful tool for managing multilingual content within your application.
```php
$form->lang()->input('name', 'Label');
```
This is equivalent to the following construction:
```php
// Since the default setting is 3 languages "en", "uk", "ru"
$content->input('name[en]', 'Label EN');
$content->input('name[uk]', 'Label UK');
$content->input('name[ru]', 'Label RU');
```
I recommend using the [spatie/laravel-translatable](https://packagist.org/packages/spatie/laravel-translatable) package as this is the one I have used and only tested with. Using other packages does not guarantee the absence of bugs.
