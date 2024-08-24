<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function __construct(){}

    public function singleCategory(): View
    {
        return view('Frontend.categories.index');
    }
}
