# Small box

Is a separate component of the deligator class `\App\Admin\Delegates\SmallBox`. To create a widget suitable for displaying statistics data, such as the number of users, using the `SmallBox` component, you can follow this example:
```php
use App\Admin\Delegates\SmallBox;

return $page->card(
	$card->small_box(
		$alert->warningType(),
		$alert->icon_users(),
		$alert->title('Total users'),
		$alert->body(User::count()),
	),
)
```
This code sets up a `SmallBox` component to display the total number of users in a warning-colored box with a user icon, along with a custom title. You can adjust the box type, icon, title, and body according to your specific statistics data requirements.

Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
