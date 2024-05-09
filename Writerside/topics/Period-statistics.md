# Period statistics

Is a separate component of the deligator class `\Admin\Delegates\StatisticPeriod`. To create an informative component for displaying statistical data based on the `created_at` field using the `StatisticPeriod` component, you can follow this example:
```php
use App\Admin\Delegates\StatisticPeriod;

return $page->card(
	$card->statistic_period(
		$statisticPeriod->model(User::class),
		$statisticPeriod->icon_gift(),
		$statisticPeriod->forToday(),
		$statisticPeriod->perWeek(),
		$statisticPeriod->perYear(),
		$statisticPeriod->total(),
	),
)
```
This code sets up a `StatisticPeriod` component to display statistical data based on the `created_at` field of the `User` model. It includes options to display statistics for today, per week, per year, and the total count. Additionally, it sets an icon for the component. You can adjust the settings and customization according to your requirements.


Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
