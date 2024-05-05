<?php

namespace App\Admin\Controllers;

use Admin\Extend\AdminShopify\Models\Product;
use Admin\Page;
use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\SearchForm;
use Admin\Delegates\ModelTable;
use Admin\Delegates\ModelInfoTable;
use App\Models\City;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * CityController Class
 * @package App\Admin\Controllers
 */
class CityController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = City::class;

    /**
     * @param  Page  $page
     * @param  Card  $card
     * @param  SearchForm  $searchForm
     * @param  ModelTable  $modelTable
     * @return Page
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function index(Page $page, Card $card, SearchForm $searchForm, ModelTable $modelTable) : Page
    {
        return $page->card(
            $card->search_form(
                $searchForm->id(),
                $searchForm->input('name', 'Name'),
                $searchForm->at(),
            ),
            $card->model_table(
                $modelTable->id(),
                $modelTable->col('Label', 'field'),
                $modelTable->at(),
            ),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param Form $form
     * @return Page
     */
    public function matrix(Page $page, Card $card, Form $form) : Page
    {
        return $page->card(
            $card->form(
                $form->ifEdit()->info_id(),
//                $form->select('name', 'Test image')->options([
//                    '1' => 'Test 1',
//                    '2' => 'Test 2',
//                    '3' => 'Test 3',
//                ]),
                $form->image_browser('preview[]', 'Test image 2'),
                //$form->image('name', 'Test image')->crop(200, 200),
                //$form->image('preview[]')->crop(200, 200),
                $form->select('name', 'Name')
                    ->orderByDesc('id')
                    ->load(Product::class),
                $form->live(
                    $form->switcher('is_active', 'Is active'),
                ),
                $form->ifEdit()->info_updated_at(),
                $form->ifEdit()->info_created_at(),
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
                $modelInfoTable->at(),
            ),
        );
    }

    /**
     * @return array
     */
    public function buildImageSourceOptions(): array
    {
        $result = [];
        $result['upload'] = __('admin.media_source_upload');
        $result['image'] = __('admin.media_source_inventory');
        $result['youtube'] = __('admin.media_source_youtube');
        $result['3dModel'] = __('admin.media_source_3d');
        $result['dropbox'] = __('admin.media_source_dropbox');
        return $result;
    }
}
