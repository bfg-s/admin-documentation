# Modal window

Controlled windows that load independently of the main page content, such as Bootstrap modal windows, are encapsulated within the delegator class `\Admin\Delegates\Modal`. This makes them a distinct component designed for creating interactive, dialog-based interfaces within the admin panel.

```php
use Admin\Page;
use Admin\Respond;
use Admin\Delegates\Card;
use Admin\Delegates\Modal;
use App\Admin\Controllers\Controller;

class ShopController extends Controller
{
	public function sayHelloEvent(Respond $respond): void
	{
		$respond->toast_success(
			'Hello ' . $this->modelInput('name', 'Guest')
		);
	}

    public function index(
		Page $page,
		Modal $modal,
		Card $card,
	): Page {
		return $page
			->modal(
			    $modal->name('say_hello'), // required modal name
				$modal->title('Say hello modal')->sizeExtra(),
				$modal->submitEvent([$this, 'sayHelloEvent']),
				$modal->form(
					$form->input_name()->queryable(),
				),
				$modal->buttons()->success()->icon_save()->title('Send')->modalSubmit(),
			)
			->card(
			    $card->buttons(
					$buttons->dark()->title('Open modal')->icon_user()
						->modal('say_hello'), // Show by modal name
				),
				...
			);
	}
}
```
Modal windows, by default, are assigned names automatically, with the initial window being labeled as `modal`, followed by `modal-1` for the second, and so forth. It is through these designated names that modal windows are referenced and invoked. Importantly, the modal window's content is not loaded along with the page; instead, the data for the modal is rendered exclusively upon request to display the window. Additionally, there is the flexibility to assign custom names to these modal windows. Moreover, modal windows accommodate various supplementary configuration options, enhancing their functionality and adaptability within the user interface.

### name
Assign a custom name to the modal window, allowing for personalized identification and access within the application's interface.
```php
$modal->name(string $name)
```

### title
Establish the title for the modal window, providing a clear and descriptive heading that encapsulates the content or purpose of the dialogue.
```php
$modal->title(string $text)
```

### submitEvent
Implement a handler specifically designed to process `POST` requests originating from a modal window, ensuring efficient and targeted handling of data submissions within the application's framework.
```php
$modal->submitEvent(callable $callable)
```

### sizeExtra
Configure the modal window to adopt an exceptionally large size, enhancing its capacity to display extensive content or more complex interfaces.
```php
$modal->sizeExtra()
```

### sizeBig
Adjust the modal window's dimensions to a large size, providing additional space for content or interface elements without reaching the maximum allowable size.
```php
$modal->sizeBig()
```

### sizeSmall
Configure the modal window to assume a tiny size, optimizing it for succinct content or minimalistic interface presentations.
```php
$modal->sizeSmall()
```

> By default, all modal windows are configured to be small in size, ensuring a compact display for efficient use of screen space.


### temporary
This attribute indicates that the modal window is destroyed upon closure, ensuring it won't reload after the page refreshes.
```php
$modal->temporary()
```

### closable
This attribute specifies that clicking on the background of the modal window will close it.
```php
$modal->closable()
```

### Modal window body
The body of a modal window is a standard container that serves as a controlled content provider.
```php
$page->modal(
	...,
	$modal->modal_body(
		...
	),
	...
)
```
Components that can be used directly (without a body) since their behavior is described by default: `buttons`, `form`, `model_table`, `model_info_table`, `table`, `nested`, `card`, `search_form`, `chart_js`, `model_relation`, `row`, `column`.
