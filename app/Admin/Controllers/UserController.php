<?php

namespace App\Admin\Controllers;

use Admin\Page;
use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\SearchForm;
use Admin\Delegates\ModelTable;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\Tab;
use App\Models\User;

/**
 * UserController Class
 * @package App\Admin\Controllers
 */
class UserController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = User::class;

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
                $searchForm->input('name', 'Name'),
                $searchForm->input('email', 'Email'),
                $searchForm->input('password', 'Password'),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('Name', 'name')->sort(),
                $modelTable->col('Email', 'email')->sort(),
                $modelTable->col('Password', 'password')->sort(),
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
                  $tab->input('name', 'Name'),
                  $tab->input('email', 'Email'),
                  $tab->input('password', 'Password'),
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
                $modelInfoTable->row('Name', 'name'),
                $modelInfoTable->row('Email', 'email'),
                $modelInfoTable->row('Password', 'password'),
                $modelInfoTable->at(),
            ),
        );
    }

}
