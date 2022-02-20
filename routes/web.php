<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Authorization\LoginController;
use App\Http\Controllers\Authorization\RegisterController;

use App\Http\Controllers\Frontend\LandingController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\DetailController;

use App\Http\Controllers\UserDashboard\CartController;
use App\Http\Controllers\UserDashboard\ChangeController;
use App\Http\Controllers\UserDashboard\ProcurementController;
use App\Http\Controllers\UserDashboard\ProductController;
use App\Http\Controllers\UserDashboard\PromoController;
use App\Http\Controllers\UserDashboard\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route dashboard
Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/details/{slug}', [DetailController::class, 'details'])->name('details');
Route::get('/product', [ProductsController::class, 'product'])->name('product');


// Login
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'handleLogin']);

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'handleRegister'])->name('register');


// User Dashboard

Route::prefix('/dashboard')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('procurements', ProcurementController::class);
    Route::resource('carts', CartController::class);
    Route::resource('promos', PromoController::class);
    Route::resource('changes', ChangeController::class);
});

Route::prefix('/admin')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::resource('/', DashboardController::class);
    });
});
