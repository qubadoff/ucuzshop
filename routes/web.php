<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('auth')->middleware(['throttle:15,1'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('auth.loginPost');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('auth.registerPost');
});

Route::prefix('dashboard')->middleware('checkAuth')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});

Route::prefix('product')->group(function () {
    Route::get('products', [ProductController::class, 'allProducts'])->name('products.all');
    Route::get('products/{slug}', [ProductController::class, 'singleProduct'])->name('products.single');
});

Route::prefix('category')->group(function () {
   Route::get('{slug}', [CategoryController::class, 'singleCategory'])->name('category.single');
});





