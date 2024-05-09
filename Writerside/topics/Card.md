# Card

The card is utilized to arrange components. It is a distinct component of the delegate class `\Admin\Delegates\Card`. Additionally, the delegation offers assistants such as `statisticBody`, `sortedModelTable`, and `nestedModelTable` for constructing pre-built tables.
```php
use App\Admin\Delegates\Card;

$page->card(
	$card->title('Hello!'),
	...
)
```

#### statisticBody
This is a table outlined by a delegation featuring a default schema for model creation and a standard table that accepts delegations for a regular table.
```php
use App\Admin\Delegates\ModelTable;

public function index(
	Page $page,
	Card $card,
	ModelTable $modelTable
): Page {
	return $page->card(
		$card->statisticBody(
			$modelTable->col('Column name', 'col_name'),
			...
		),
	);
}
```
The fields "ID" and "AT" are automatically included in the table by default, as the columns are generated through the `colDefault` helper within the `model_table` delegation.

#### sortedModelTable
This is a table described by a delegation that includes a default layout for model creation, a standard table that accepts delegations for typical table functionality, and a table for sorting data. The model should include a default sort field named `order`.

#### nestedModelTable
This table is described by a delegation that includes a default layout for model creation, a standard table that accepts delegations for typical table functionality, and a nested data sorting table. The model should include a default sort field named `order` and a default parent ID field named `parent_id`.

### title
This method is used to add a title to the card component.
```php
$card->title(array|string $title)
```

Components that can be used directly (without a body) since their behavior is described by default: `buttons`, `form`, `model_table`, `model_info_table`, `nested`, `search_form`, `chart_js`, `tab`.

Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).

**Card body**
This statement describes the body of the card, which functions as a container providing content.
```php
$page->card(
	...,
	$card->card_body(
		...
	),
	...
)
// OR
$page->card(
	...,
	$card->full_body(
		...
	),
	 ...
)
```
### Default Tools
This section describes mass control buttons used for management purposes. By default, default delegations are included in the parent controller, which entail the inclusion of these tools at the first card on the page. Further details are provided in the `Controller` section.
