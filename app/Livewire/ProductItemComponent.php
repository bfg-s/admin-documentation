<?php

namespace App\Livewire;

use Admin\Extend\AdminShopify\Models\Product;
use Livewire\Component;

class ProductItemComponent extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.product-item-component');
    }
}
