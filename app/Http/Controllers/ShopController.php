<?php

namespace App\Http\Controllers;

use Admin\Extend\AdminShopify\Models\Currency;
use Admin\Extend\AdminShopify\Models\ProductCategory;
use Admin\Extend\AdminShopify\Support\Shopify;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * @param  string|null  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index(string $slug = null)
    {
        if (! $slug) {

            return redirect()->route('shop', [
                'slug' => ProductCategory::where('active', 1)
                    ->whereHas('seo', function ($query) {
                        $query->whereNotNull('slug');
                    })->first()->seo->slug
            ]);
        }

        $category = ProductCategory::where('active', 1)
            ->whereHas('seo', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })->first();

        if (! $category) {
            abort(404, 'Category not found');
        }

        return view('shop', compact('category'));
    }

    /**
     * @param  string  $code
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeCurrency(string $code)
    {
        $currency = Currency::where('code', $code)->first();

        if (Currency::where('code', $code)->first()) {

            Shopify::setCurrency($currency);
        }

        return back();
    }
}
