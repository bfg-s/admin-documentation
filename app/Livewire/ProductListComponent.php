<?php

namespace App\Livewire;

use Admin\Extend\AdminShopify\Models\ProductCategory;
use Livewire\Component;

class ProductListComponent extends Component
{
    public ProductCategory $category;

    public function render()
    {
        return view('livewire.product-list-component', [
            'products' => $this->category->products()->paginate(10),
        ]);
    }
}
