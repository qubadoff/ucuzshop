<?php

use App\Models\Cart;
use App\Models\SiteSetting;
use \App\Models\ProductCategory;
use \Illuminate\Database\Eloquent\Collection;
use App\Models\Product;
use \Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Models\Page;
use \Illuminate\Contracts\Auth\Authenticatable;
use \Illuminate\Support\Facades\Auth;

if (! function_exists("siteSetting"))
{
    function siteSetting()
    {
        return SiteSetting::query()->where('id', 1)->first();
    }
}

if (! function_exists("productCategory"))
{
    function productCategory(): Collection
    {
        return ProductCategory::all();
    }
}

if (! function_exists('slider'))
{
    function slider(): Collection
    {
        return Product::query()
            ->where('is_active', 1)
            ->where('is_featured', 1)
            ->where('is_stock', 1)
            ->get();
    }
}

if (! function_exists('latestProducts'))
{
    function latestProducts(): LengthAwarePaginator
    {
        return Product::query()
            ->where('is_active', 1)
            ->where('is_stock', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
    }
}

if (! function_exists('pages'))
{
    function pages(): Collection
    {
        return Page::query()->where('status', 1)->orderBy('sort', 'asc')->get();
    }
}

if (! function_exists('userData'))
{
    function userData(): ? Authenticatable
    {
        return Auth::guard('customer')->user();
    }
}

if (! function_exists('cartItems'))
{
    function cartItems(): \Illuminate\Support\Collection
    {
        $user = Auth::guard('customer')->user();

        if (!$user) {
            return collect();
        }
        return Cart::query()->where('user_id', Auth::guard('customer')->user()->id)->get();
    }
}
