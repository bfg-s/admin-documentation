# Graph

The component for drawing charts from the model is a separate component delegated by the class `\App\Admin\Delegates\ChartJs`.
This component provides functionality to generate charts based on data from the model.

## Make simple chart
```php
use App\Admin\Delegates\ChartJs;

return $page->card(
	$card->title('Registrations per month'),
	$card->chart_js(
		$chartJs->model(User::class),
		$chartJs->setDefaultDataBetween('created_at', [now()->subMonth(), now()]),
		$chartJs->groupDataByAt('created_at'),
		$chartJs->eachPointCount('Created'),
		$chartJs->miniChart(),
	)
)
```

## Use custom chart data
To generate a chart using Chart.js and custom chart data, you can utilize the ChartJs component and provide your own data. Here's an example of how you can do it:
```php
return $page->card(
	$card->title('Registrations per month'),
	$card->chart_js(
		$chartJs->customChart('Title', [20], [255, 255, 255]),
	)
)
```
OR
```php
return $page->card(
	$card->title('Registrations per month'),
	$card->chart_js(
		$chartJs->customChart('Title', [[20, 30], [40, 50]], [[255, 255, 255], [211, 211, 211]]),
	)
)
```

## Load data after load page (Lazy loading)
To implement lazy loading of chart data after the page loads, you can use the load method provided by the `ChartJsComponent` class. Here's how you can do it:
```php
return $page->card(
	$card->title('Registrations per month'),
	$card->chart_js(
		$chartJs->load(function (Admin\Components\ChartJsComponent $component) {
			// Some logic for data getting...
			$component->customChart('Title', [[20, 30], [40, 50]], [[255, 255, 255], [211, 211, 211]]);
		}),
	)
)
```
This code snippet creates a card with the title 'Registrations per month' and a chart component. The chart component uses lazy loading, meaning that the chart data will be fetched and rendered after the page has loaded. Inside the `load` method, you can define the logic to fetch the chart data, such as querying a database. Once the data is fetched, the `customChart` method is used to customize and render the chart.
