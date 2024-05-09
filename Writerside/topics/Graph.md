# ChartJs

The component for drawing charts from the model is a separate component delegated by the class `\Admin\Delegates\ChartJs`.
This component provides functionality to generate charts based on data from the model.

This chart, under the hood, uses Chart.js, which allows you to create different types of charts, such as line, column, pie and others.

An example of how graphics are integrated into the admin dashboard:
```php
class DashboardController extends Controller
{
    public function index(
        Page $page,
        Card $card,
        CardBody $cardBody,
        ChartJs $chartJs,
        SearchForm $searchForm,
        Row $row,
        Column $column,
    ): mixed {
        return $page->row(
            $row->column(8)->row(
                $row->column(12)->card(
                    $card->title('User statistics'),
                    $card->card_body(
                        $cardBody->chart_js(
                            $chartJs->model(config('auth.providers.users.model'))
                                ->hasSearch(
                                    $searchForm->date_range('created_at', 'admin.created_at')
                                        ->default(implode(' - ', $this->defaultDateRange()))
                                )
                                ->size(300)
                                ->loadModelBy(title: 'Added to users'),
                        )
                    )
                ),
            ),
            $row->column(4)->row(
                $row->addClass('h-100'),
                $row->column(12, $column->addClass('d-flex'))->card(
                    $card->title('Administrators browser statistic'),
                    $card->card_body(
                        $cardBody->chart_js(
                            $chartJs->size(300)->typeDoughnut(),
                            $chartJs->load(function (Admin\Components\ChartJsComponent $component) {
                                $adminLogs = Admin\Models\AdminBrowser::all(['name'])->groupBy('name')->map(
                                    fn(Collection $collection) => $collection->count()
                                );
                                $component->customChart('Browser', [$adminLogs->toArray()], $adminLogs->map(
                                    fn() => $component->randColor()
                                )->values()->toArray());
                            }),
                        )
                    ),
                ),
                $row->column(12, $column->addClass('d-flex'))->card(
                    $card->title('Activity'),
                    $card->card_body(
                        $cardBody->chart_js(
                            $chartJs->size(300)->typeDoughnut(),
                            $chartJs->load(function (Admin\Components\ChartJsComponent $component) {
                                $adminLogs = admin()->logs()->where('title', '!=', 'Loaded page')->get(['title'])->map(
                                    fn(Admin\Models\AdminLog $log) => ['name' => $log->title]
                                )->groupBy('name')->map(
                                    fn(Collection $collection) => $collection->count()
                                );
                                $component->customChart('Action', [$adminLogs->toArray()],
                                    $adminLogs->map(
                                        fn() => $component->randColor()
                                    )->values()->toArray());
                            }),
                        )
                    ),
                ),
            )
        );
    }
}
```

## Add simple graphic
```php
use Admin\Delegates\ChartJs;

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

## Use custom graphic data
To generate a chart using Chart.js and custom chart data, you can utilize the ChartJs component and provide your own data. Here's an example of how you can do it:
```php
use Admin\Delegates\ChartJs;

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

## Model loader
To generate a chart using Chart.js and data from a model, you can use the `loadModelBy` method provided by the `ChartJsComponent` class. Here's an example of how you can do it:
```php
use Admin\Delegates\ChartJs;

return $page->card(
    $card->title('Registrations'),
    $card->chart_js(
        $chartJs->model(User::class),
        $chartJs->loadModelBy(by: 'created_at', title: 'Created'),
    )
)
```

## Load data after load page (Lazy loading)
To implement lazy loading of chart data after the page loads, you can use the load method provided by the `ChartJsComponent` class. Here's how you can do it:
```php
use Admin\Delegates\ChartJs;

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
