# Register new dashboard widget

To register a new dashboard widget, you need to create a new class that extends the `Admin\\Widgets\\DashboardWidget` class and implement the `handle` method. The `handle` method should return the `Admin\\Components\\WidgetComponent` content of the widget.
And then, you need to register your widget in the `boot` method of the `App\\Admin\\Config` class using the `registerDashboardWidget` method.

```php
use App\Admin\Extensions\Widgets\MyWidget;
...
public function boot()
{
	parent::boot();
	
	$this->registerDashboardWidget(MyWidget::class);
}
...
```
