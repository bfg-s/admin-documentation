<?php

namespace App\Http\Controllers;

use Admin\Extend\AdminShopify\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function index(string $slug)
    {
        $product = Product::active()
            ->whereSlug($slug)
            ->first();

        if (! $product) {

            abort(404, 'Product not found');
        }

        $product->incrementView();

        return view('details', compact('product'));
    }

    public function productFavoriteToggle(string $slug)
    {
        $product = Product::active()
            ->whereSlug($slug)
            ->first();

        if (! $product) {

            abort(404, 'Product not found');
        }

        $product->toggleFavorite();

        return back();
    }
}
