# Respond

The responder class is designed to provide answers to requests.
```php
use App\Respond;
```

This class is primarily used in executable controller callbacks, where it provides methods for sending responses to requests.
```php
use Admin\Respond;
use App\Admin\Controllers\Controller;

class ShopController extends Controller
{
	public function sayHelloEvent(Respond $respond): void
	{
		$respond->toast_success('Hello');
	}
}
```

Respond supports the following methods:

### location
Redirects to the specified address.
```php
$respond->location(string $url)
```

### redirect
Redirects to the specified address and reloads the page.
```php
$respond->redirect(string $url)
```

### reload
Reloads content on the page.
```php
$respond->reload()
```

### reboot
Reloads the page with a real page reload.
```php
$respond->reboot()
```

### toast_success
Sends a message indicating the operation was successful.
```php
$respond->toast_success(string $text)
```

### toast_warning
Sends a warning message.
```php
$respond->toast_warning(string $text)
```

### toast_info
Sends an informational message.
```php
$respond->toast_info(string $text)
```

### toast_error
Sends an error message.
```php
$respond->toast_error(string $text)
```

### put
Add an arbitrary command to be executed by the client.
```php
$respond->put(string $command)
```

## Create custom command 
```javascript
window.libs['custom_command'] = function (data) {
    console.log(data); // dataValue1
};
```
And call it in the callback:
```php
$respond->put('custom_command', ['dataValue1']);
```
