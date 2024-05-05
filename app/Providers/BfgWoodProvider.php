<?php

namespace App\Providers;

use Bfg\Wood\WoodProvider;

class BfgWoodProvider extends WoodProvider
{
    protected array $observers = [];

    protected array $listen = [];
}
