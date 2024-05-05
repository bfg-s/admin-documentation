# Examples

Conventionally, we have a “Shop” model with user information about their store. Below is an example of using most of the components in the controller.

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
