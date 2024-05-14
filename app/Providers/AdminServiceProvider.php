<?php

namespace App\Providers;

use Admin\Core\ConfigExtensionProvider;
use App\Admin\Config;
use App\Admin\Navigator;
use Admin\ApplicationServiceProvider;

/**
 * AdminServiceProvider Class
 * @package App\Providers
 */
class AdminServiceProvider extends ApplicationServiceProvider
{
    /**
     * Protected variable Navigator
     *
     * @var string
     */
    protected string $navigator = Navigator::class;

    /**
     * Protected variable Config
     *
     * @var string|ConfigExtensionProvider
     */
    protected string|ConfigExtensionProvider $config = Config::class;

}
