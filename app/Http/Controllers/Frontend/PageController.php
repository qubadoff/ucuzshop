<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\View\View;

class PageController extends Controller
{
    public function singlePage($slug): View
    {
        $page = Page::query()->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        return \view('Frontend.pages.index', compact('page'));
    }
}
