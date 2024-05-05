<?php

namespace App\Admin;

use Admin\Core\NavGroup;
use Admin\Core\NavigatorExtensionProvider;
use Admin\Interfaces\ActionWorkExtensionInterface;
use App\Admin\Controllers\CityController;

/**
 * Navigator Class
 * @package App\Admin
 */
class Navigator extends NavigatorExtensionProvider implements ActionWorkExtensionInterface
{
    /**
     * @return void
     */
    public function handle() : void
    {
        //$this->nav_bar_vue(TestVue::class, ['test' => ['q', 'w']]);

        $this->bfg_admin_custom_page();

        $this->bfg_admin_seo();

//        $this->group('as', 'as', function (NavGroup $group) {
//            $group->bfg_admin_custom_page();
//        })->icon_thumbtack();

        $this->makeDefaults();

        $this->item('Cities')
            ->resource('cities', CityController::class)
            ->icon_users();

        $this->item('Doc')
            ->link('https://google.com')
            ->targetBlank()
            ->icon_500px();

        $this->makeExtensions();
    }

}
