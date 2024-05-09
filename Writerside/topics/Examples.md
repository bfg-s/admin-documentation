# Examples

In this section I show different controllers that give an example of what your controller might look like.

### Example 1
```php
class ShopController extends Controller
{
	/**
	 * Static variable Model.
	 * @var string
	 */
	public static $model = Shop::class;

	/**
	 * Modal callback
	 * @param  Respond  $respond
	 * @return void
	 */
	public function sayHelloEvent(Respond $respond): void
	{
		$respond->toast_success(
			'Hello ' . $this->modelInput('name', 'Guest')
		);
	}

	/**
	 * @param  Page  $page
	 * @param  Modal  $modal
	 * @param  Card  $card
	 * @param  SearchForm  $searchForm
	 * @param  ModelTable  $modelTable
	 * @param  Form  $form
	 * @param  Buttons  $buttons
	 * @return Page
	 */
	public function index(
		Page $page,
		Modal $modal,
		Card $card,
		SearchForm $searchForm,
		ModelTable $modelTable,
		Form $form,
		Buttons $buttons,
	): Page {
		return $page
			->modal(
				$modal->title('Say hello modal')->sizeExtra()->closable()->temporary(),
				$modal->submitEvent([$this, 'sayHelloEvent']),
				$modal->form(
					$form->input_name()->queryable(),
				),
				$modal->buttons()->success()->icon_save()->title('Send')->modalSubmit(),
			)
			->modal(
				$modal->title('Next modal')->name('not-save'),
				$modal->form(
					$form->method('GET'),
					$form->input_name()->queryable(),
					$form->watch(
						$this->isModelInput('name', 'zzz'),
						$form->p('Simple paragraph text in watch')
					),
				),
				$modal->buttons(
					$buttons->primary()->title('Later')->modalHide(),
					$buttons->danger()->title('Close')->modalDestroy(),
				),
				$modal->buttons()->success()->title('Сохранить')->icon_save()->modalSubmit(),
			)
			->card(
				$card->buttons(
					$buttons->info()->title('Call modal 1')->icon_user()->modal(),
					$buttons->dark()->title('Call modal 2 with data')->icon_user()
						->modal('not-save', ['name' => 'Xsaven']),
				),
				$card->buttons()->info()->title('Simple info button')->click(fn () => 'you action'),
				$card->buttons()->info()->title('Simple button with data sending')->click(
					fn ($name) => $name, ['name' => 'Joe']
				),
				$card->buttons()->success()->title('Send respond to answer')->icon_fan()->click(
					fn (Respond $respond) => $respond->toast_success('Good!!!!!')
				),
				$card->search_form(
					$searchForm->inDefault(
						$searchForm->in_input_name(),
					),
				),
				$card->statisticBody(
					$modelTable->action(
						fn (Respond $respond, $object, $ids)
						=> $respond->toast_success(
							'It is: ' . $object . ' With: ' . json_encode($ids)
						)
					)->title('Test!')->nullable(),
					$modelTable->col_photo(),
					$modelTable->col_name(),
					$modelTable->col_phone(),
					$modelTable->to_prepend()->buttons(
						$buttons->info()->title('Button with data sending 1')->click(
							fn ($id) => $id, 
							['id' => fn ($model) => $model->id]
						),
						$buttons->success()->title('Button with data sending 2')->click(
							fn ($name) => $name,
							['name' => fn ($model) => $model->name]
						),
					),
					$modelTable->buttons(
						$buttons->success()->title('Get respond to answer')->icon_fan()->click(
							fn (?int $id, ?string $name, Respond $respond)
							=> $respond->toast_success(
								'Take the: ' . $id . ', And name: ' . $name
							), ['id', 'name']
						),
					),
					$modelTable->dblclick(
						fn (Respond $respond)
						=> $respond->toast_success('Simple dblclick on model table')
					),
				)
			);
	}

	/**
	 * @param  Page  $page
	 * @param  Card  $card
	 * @param  Form  $form
	 * @param  Tab  $tab
	 * @return Page
	 */
	public function matrix(
		Page $page,
		Card $card,
		Form $form,
		Tab $tab
	): Page {
		return $page->card(
			$card->buttons()->info()->title('Get name')->click(
				fn (Respond $respond, $name)
				=> $respond->toast_success("Hello " . $name), ['name']
			),
			$card->form(
				$form->divider('Types'),
				// Query manipulation
				$form->ifNotQuery('test')->buttons()->info()->title('query')->query(['test' => 1]),
				$form->ifQuery('test')->buttons()->info()->title('unset query')->unsetQuery(['test']),
				// Form manipulation
				$form->divider('Form'),
				$form->tabGeneral(
					$tab->input_photo(),
					$tab->buttons()->info()->title('Get name inside')
						->click(fn ($name) => $name, ['name']),
					$tab->select_user_id()->load(User::class),
					$tab->input_city(),
					$tab->input_name(),
					$tab->input_phone(),
				),
			),
			$card->footer_form(),
		);
	}

	/**
	 * @param  Page  $page
	 * @param  Card  $card
	 * @param  ModelInfoTable  $modelInfoTable
	 * @return Page
	 */
	public function show(
		Page $page,
		Card $card,
		ModelInfoTable $modelInfoTable
	): Page {
		return $page->card(
			$card->model_info_table(
				$modelInfoTable->rowDefault(
					$modelInfoTable->row_photo(),
					$modelInfoTable->row_name(),
					$modelInfoTable->row_phone(),
				),
			)
		);
	}
}
```

### Example 2
```php
class AddressesController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Address::class;

    /**
     * @param Page $page
     * @param Card $card
     * @param SearchForm $searchForm
     * @param ModelTable $modelTable
     * @return Page
     */
    public function index(Page $page, Card $card, SearchForm $searchForm, ModelTable $modelTable) : Page
    {
        return $page->card(
            $card->search_form(
                $searchForm->id(),
                $searchForm->input('city', 'admin-shopify.city'),
                $searchForm->input('postcode', 'admin-shopify.postcode'),
                $searchForm->input('address_line1', 'admin-shopify.address_line1'),
                $searchForm->input('address_line2', 'admin-shopify.address_line2'),
                $searchForm->input('phone', 'admin-shopify.phone'),
                $searchForm->input('email', 'admin-shopify.email')->icon_envelope(),
                $searchForm->input('latitude', 'admin-shopify.latitude'),
                $searchForm->input('longitude', 'admin-shopify.longitude'),
                $searchForm->input('addressed_id', 'admin-shopify.addressed_id'),
                $searchForm->input('addressed_type', 'admin-shopify.addressed_type'),
                $searchForm->at(),
            ),
            $card->sortedModelTable(
                $modelTable->col('admin-shopify.city', 'city')->sort()->copied,
                $modelTable->col('admin-shopify.postcode', 'postcode')->sort()->copied,
                $modelTable->col('admin-shopify.address_line1', 'address_line1')->sort()->copied,
                $modelTable->col('admin-shopify.phone', 'phone')->sort()->copied,
                $modelTable->col('admin-shopify.email', 'email')->sort()->copied,
                $modelTable->col('admin-shopify.latitude_longitude', function (Address $address) {
                    return $address->latitude . ', ' . $address->longitude;
                })->sort()->copied,
                $modelTable->col('admin-shopify.active', 'active')->sort()->input_switcher,
            ),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param Form $form
     * @param Tab $tab
     * @return Page
     */
    public function matrix(Page $page, Card $card, Form $form, Tab $tab) : Page
    {
        return $page->card(
            $card->form(
                $form->tabGeneral(
                  $tab->input('city', 'admin-shopify.city'),
                  $tab->input('postcode', 'admin-shopify.postcode'),
                  $tab->input('address_line1', 'admin-shopify.address_line1'),
                  $tab->input('address_line2', 'admin-shopify.address_line2')->nullable(),
                  $tab->input('phone', 'admin-shopify.phone')->nullable(),
                  $tab->email('email', 'admin-shopify.email')->nullable(),
                  $tab->input('latitude', 'admin-shopify.latitude')->nullable(),
                  $tab->input('longitude', 'admin-shopify.longitude')->nullable(),
                  $tab->input('order', 'admin-shopify.order')->default(0),
                  $tab->switcher('active', 'admin-shopify.active')->default(1),
                ),
            ),
            $card->footer_form(),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param ModelInfoTable $modelInfoTable
     * @return Page
     */
    public function show(Page $page, Card $card, ModelInfoTable $modelInfoTable) : Page
    {
        return $page->card(
            $card->model_info_table(
                $modelInfoTable->id(),
                $modelInfoTable->row('admin-shopify.city', 'city'),
                $modelInfoTable->row('admin-shopify.postcode', 'postcode'),
                $modelInfoTable->row('admin-shopify.address_line1', 'address_line1'),
                $modelInfoTable->row('admin-shopify.address_line2', 'address_line2'),
                $modelInfoTable->row('admin-shopify.phone', 'phone'),
                $modelInfoTable->row('admin-shopify.email', 'email'),
                $modelInfoTable->row('admin-shopify.latitude', 'latitude'),
                $modelInfoTable->row('admin-shopify.longitude', 'longitude'),
                $modelInfoTable->row('admin-shopify.addressed_id', 'addressed_id'),
                $modelInfoTable->row('admin-shopify.addressed_type', 'addressed_type'),
                $modelInfoTable->row('admin-shopify.order', 'order'),
                $modelInfoTable->row('admin-shopify.active', 'active'),
                $modelInfoTable->at(),
            ),
        );
    }
}
```

### Example 3
```php
class ProductsController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Product::class;

    /**
     * @param Page $page
     * @param Card $card
     * @param SearchForm $searchForm
     * @param ModelTable $modelTable
     * @return Page
     */
    public function index(Page $page, Card $card, SearchForm $searchForm, ModelTable $modelTable) : Page
    {
        return $page->card(
            $card->search_form(
                $searchForm->id(),
                $searchForm->input('name', 'admin-shopify.name'),
                $searchForm->input('description', 'admin-shopify.description'),
                $searchForm->input('short_description', 'admin-shopify.short_description'),
                $searchForm->input('rating', 'admin-shopify.rating'),
                $searchForm->input('views', 'admin-shopify.views'),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.image', function (Product $product) {
                    return $product->images()->first()?->photo ?: '/vendor/admin-shopify/product-photo-no-available.png';
                })->avatar,
                $modelTable->col('admin-shopify.name', 'name')->sort(),
                $modelTable->col('admin-shopify.rating', 'rating')->rating_stars()->sort(),
                $modelTable->col('admin-shopify.views', 'views')->badge->sort(),
                $modelTable->col('admin-shopify.new', 'new')->input_switcher->sort(),
                $modelTable->col('admin-shopify.best_selling', 'best_selling')->input_switcher->sort(),
                $modelTable->col('admin-shopify.active', 'active')->input_switcher->sort(),
            ),
        );
    }

    /**
     * @param  Page  $page
     * @param  Card  $card
     * @param  Form  $form
     * @param  Tab  $tab
     * @param  ModelRelation  $modelRelation
     * @return Page
     */
    public function matrix(Page $page, Card $card, Form $form, Tab $tab, ModelRelation $modelRelation) : Page
    {
        return $page->card(
            $card->form(
                $form->tabGeneral(
                    $tab->select('shop_id', 'admin-shopify.shop')
                        ->load(Shop::class),
                    $tab->lang()->input('name', 'admin-shopify.name')
                      ->required()
                      ->duplication_how_slug('#input_seo_slug')
                      ->duplication('#input_seo_title')
                      ->vertical(),
                    $tab->lang()->ckeditor('description', 'admin-shopify.description')->vertical(),
                    $tab->lang()->ckeditor('short_description', 'admin-shopify.short_description')->vertical(),
                    $tab->numeric('rating', 'admin-shopify.rating')->max(5)->default(0),
                    $tab->numeric('views', 'admin-shopify.views')->default(0),
                    $tab->switcher('new', 'admin-shopify.new')->default(0),
                    $tab->switcher('best_selling', 'admin-shopify.best_selling')->default(0),
                    $tab->switcher('active', 'admin-shopify.active')->default(1),
                ),
                $form->tab(
                    $tab->title('admin-shopify.categories')->icon_globe_europe(),
                    $tab->multi_select('categories[]', 'admin-shopify.categories')
                        ->load(ProductCategory::class),
                    $tab->live(
                        $tab->withCollection($this->modelInput('categories', []), function (ProductCategory|int $categoryId) use ($tab) {
                            $category = $categoryId instanceof ProductCategory
                                ? $categoryId
                                : ProductCategory::find($categoryId);
                            return [
                                $tab->divider($category->name),
                                $tab->withCollection($category->properties, function (ProductCategoryProperty $property) use ($tab) {
                                    return [
                                        $tab->multi_select("categoryPropertyValues[$property->id][]", $property->name)
                                            ->vertical()
                                            ->value_to(
                                                fn () => $this->model()->categoryPropertyValues()->where('category_property_id', $property->id)->get()
                                            )
                                            ->load($property->propertyValues(), '{id}) {value}'),
                                    ];
                                }),
                            ];
                        }),
                    ),
                ),
                $form->tab(
                    $tab->title('admin-shopify.prices')->icon_money_bill(),
                    $tab->model_relation('prices')->title('admin-shopify.prices')->template(
                        $modelRelation->numeric('availability', 'admin-shopify.count')
                            ->default(-1)
                            ->info('admin-shopify.set_-1_if_the_quantity_is_not_limited'),
                        $modelRelation->select_currency_id('admin-shopify.currency')->load(Currency::class),
                        $modelRelation->amount_price('admin-shopify.price')->required()->default('0'),
                        $modelRelation->amount_discount_price('admin-shopify.discount_price')->required()->default('0'),
                        $modelRelation->percent_discount_percent('admin-shopify.discount_percent')->required()->default('0'),
                        $modelRelation->fullControl(),
                    )
                ),
                $form->tab(
                    $tab->title('admin-shopify.images')->icon_images(),
                    $tab->model_relation('images')->ordered()->title('admin-shopify.images')->template(
                        $modelRelation->image_photo('admin-shopify.photo'),
                        $modelRelation->fullControl(),
                    )
                ),
                $form->tabSeo()
            ),
            $card->footer_form(),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param ModelInfoTable $modelInfoTable
     * @return Page
     */
    public function show(Page $page, Card $card, ModelInfoTable $modelInfoTable) : Page
    {
        return $page->card(
            $card->model_info_table(
                $modelInfoTable->id(),
                $modelInfoTable->row('admin-shopify.name', 'name'),
                $modelInfoTable->row('admin-shopify.description', 'description'),
                $modelInfoTable->row('admin-shopify.short_description', 'short_description'),
                $modelInfoTable->row('admin-shopify.rating', 'rating'),
                $modelInfoTable->row('admin-shopify.views', 'views'),
                $modelInfoTable->row('admin-shopify.new', 'new'),
                $modelInfoTable->row('admin-shopify.best_selling', 'best_selling'),
                $modelInfoTable->row('admin-shopify.active', 'active'),
                $modelInfoTable->at(),
            ),
        );
    }
}
```
