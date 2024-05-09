# Sortable timeline table

Is a separate component of the deligator class `\Admin\Delegates\Timeline`. To create a timeline table with fully customizable content using the `Timeline` component, you can use the following example:
```php
use App\Admin\Delegates\Timeline;

return $page->card(
	$card->timeline(
		$timeline->model(admin()->logs()),
		$timeline->set_title(function (LteLog $log) {
			return $log->title;
		}),
		$timeline->set_body(function (LteLog $log) {
			return $log->uri;
		}),    
	),
)
```
In this example, you customize the title and body content for each timeline item using callback functions provided by the `set_title` and `set_body` methods of the `Timeline` component. Adjust the callback functions according to your specific requirements and data model.
