<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(){}

    public function dashboard(): View
    {
        return \view('Frontend.dashboard.index');
    }

    public function logout(): RedirectResponse
    {
        \auth('customer')->logout();

        return to_route('auth.login');
    }
}
