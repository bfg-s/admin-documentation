<?php

namespace App\Admin;

use Admin\ApplicationConfig;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Config Class
 * @package App\Admin
 */
class Config extends ApplicationConfig
{
    /**
     * @return void
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function boot()
    {
        parent::boot();
    }
}
