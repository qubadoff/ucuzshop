<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct(){}

    public function allProducts(Request $request): View
    {
        $perPage = 12;
        $currentPage = $request->get('page', 1);

        $allProducts = Product::query()
            ->where('is_active', 1)
            ->where('is_stock', 1)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        $allCategories = ProductCategory::all();

        return view('Frontend.products.index', compact(
            'allProducts', 'currentPage', 'perPage', 'allCategories'
        ));
    }

    public function singleProduct($slug): View
    {
        $product = Product::query()
            ->where('slug', $slug)
            ->where('is_active', 1)
            ->where('is_stock', 1)
            ->firstOrFail();

        return view('Frontend.products.single', compact('product'));
    }

}
