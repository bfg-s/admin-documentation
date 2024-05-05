# Alert

Is a separate component of the deligator class `\Admin\Delegates\Alert`. To create a widget for displaying various kinds of messages using the `Alert` component, you can follow this example:
```php
use Admin\Delegates\Alert;

return $page->card(
	$card->alert(
		$alert->warningType(),
		$alert->icon_users(),
		$alert->title('Warning!'),
		$alert->body('Join to team!'),
	),
)
```
This code sets up an Alert component to display a warning message with an icon and a custom title and body text. You can adjust the alert type, icon, title, and body according to your specific message requirements.

Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
