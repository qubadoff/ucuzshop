<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(){}

    public function index(): View
    {
        return view('Frontend.home.index');
    }

    public function contact(): View
    {
        return view('Frontend.contact.index');
    }
}
