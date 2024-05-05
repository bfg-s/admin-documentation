# Helpers

The extension has a set of helpers that can make development a little easier for you.

### Logging user actions
```php
admin_log('Title of action')
// OR
admin_log('Title of action', 'With details')
```
There are also certain types of helpers.
```php
admin_log_warning('Title of warning action')
admin_log_primary(...)
admin_log_secondary(...)
admin_log_success(...)
admin_log_info(...)
admin_log_danger(...)
admin_log_dark(...)
```

### Path to extension application
```php
admin_relative_path() // "/app/Admin"
// OR
admin_relative_path("with/my/path") // "/app/Admin/with/my/path"
```

### Extension namespace
```php
admin_app_namespace() // "App\Admin"
// OR
admin_app_namespace("WithMyNamespace") // "App\Admin\WithMyNamespace"
```

### Controller model
```php
admin_controller_model() // "Model/Class/Namespace"
```

### Full path to extension application
```php
admin_app_path() // "/Users/default/PhpstormProjects/project/app/Admin"
// OR
admin_app_path("MyPath") // "/Users/default/PhpstormProjects/project/app/Admin/MyPath"
```

### Link prefix
```php
admin_uri() // "/admin"
// OR
admin_uri("with/my/endpoint") // "/admin/with/my/endpoint"
```

### External link to media files
```php
admin_asset() // "https://domain.test/admin"
// OR
admin_asset("js/app.js") // "https://domain.test/admin/js/app.js"
```

### Quick access to an authorized user
```php
admin_user()
// OR
admin_user()?->name
// OR
admin()
```

### Link generator with parameters
```php
makeUrlWithParams(url()->current(), ["date" => now()->toDateString()]) 
// "https://domain.test?date=2022-01-01"
```

Even if the current link already has parameters, the helper will simply add new ones to the existing ones.
```php
makeUrlWithParams("https://domain.test?user_id=1", ["date" => now()->toDateString()]) 
// "https://domain.test?user_id=1&date=2022-01-01"
```

### Controlled Current Link Generator
```php
urlWithGet("date" => now()->toDateString())
// "https://domain.test?date=2022-01-01"
```
Also, if you have or may have an unwanted parameter in the link, you can add its name to the exclusion list.
Suppose you have a `user_id` parameter in your current link:
```php
// https://domain.test?user_id=255
urlWithGet("date" => now()->toDateString(), ["user_id"])
// "https://domain.test?date=2022-01-01"
```
