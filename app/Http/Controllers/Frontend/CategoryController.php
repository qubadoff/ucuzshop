<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function __construct(){}

    public function singleCategory($slug): View
    {
        $category = ProductCategory::query()->where('slug', $slug)->firstOrFail();

        $products = Product::query()
            ->where('category_id', $category->id)
            ->where('is_active', 1)
            ->where('is_stock', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('Frontend.categories.index', compact('category', 'products'));
    }
}
