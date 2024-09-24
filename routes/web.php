<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\CartController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('auth')->middleware(['throttle:15,1'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('auth.loginPost');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('auth.registerPost');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'allProducts'])->name('products.all');
    Route::get('{slug}', [ProductController::class, 'singleProduct'])->name('products.single');
});

Route::prefix('categories')->group(function () {
   Route::get('{slug}', [CategoryController::class, 'singleCategory'])->name('category.single');
});

Route::prefix('pages')->group(function () {
    Route::get('{slug}', [PageController::class, 'singlePage'])->name('page');
});

Route::prefix('dashboard')->middleware('checkAuth')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});

Route::prefix('cart')->middleware('checkAuth')->group(function () {
    Route::post('/add', [CartController::class, 'add'])->name('cart.add');
});





