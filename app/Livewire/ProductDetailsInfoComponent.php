<?php

namespace App\Livewire;

use Admin\Extend\AdminShopify\Models\Product;
use Livewire\Component;

class ProductDetailsInfoComponent extends Component
{
    public Product $product;

    public int $count = 0;

    public function addCount()
    {
        $this->count++;
    }

    public function subCount()
    {
        if ($this->count != 0) {
            $this->count--;
        }
    }

    public function toggleFavorite()
    {
        $this->product->toggleFavorite();
    }

    public function render()
    {
        return view('livewire.product-details-info-component');
    }
}
