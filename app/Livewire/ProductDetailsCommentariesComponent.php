<?php

namespace App\Livewire;

use Admin\Extend\AdminShopify\Models\Product;
use Livewire\Component;

class ProductDetailsCommentariesComponent extends Component
{
    public Product $product;

    public int $stars = 0;

    public string $name = '';

    public string $email = '';

    public string $comment = '';

    public function addComment()
    {
        $this->validate([
            'name' => 'nullable',
            'email' => 'nullable|email',
            'comment' => 'required',
            'stars' => 'integer|between:1,5',
        ]);

        $this->product->commentaries()->create([
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment,
            'rating' => $this->stars,
        ]);

        $this->name = '';
        $this->email = '';
        $this->comment = '';
        $this->stars = 0;
    }

    public function setStars(int $stars)
    {
        $this->stars = $stars;
    }

    public function render()
    {
        return view('livewire.product-details-commentaries-component');
    }
}
