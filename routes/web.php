<?php

use App\Http\Controllers\Admin\AnalyticalController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Admin\TransactionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Authorization\LoginController;
use App\Http\Controllers\Authorization\RegisterController;

use App\Http\Controllers\Frontend\LandingController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\DetailController;

use App\Http\Controllers\UserDashboard\CartController;
use App\Http\Controllers\UserDashboard\ChangeController;
use App\Http\Controllers\UserDashboard\OutletController;
use App\Http\Controllers\UserDashboard\ProcurementController;
use App\Http\Controllers\UserDashboard\ProductController;
use App\Http\Controllers\UserDashboard\PromoController;
use App\Http\Controllers\UserDashboard\ReviewController;
use App\Http\Controllers\UserDashboard\UpdateController;
use App\Http\Controllers\UserDashboard\ViewController;
use App\Http\Controllers\UserDashboard\WishlistController;

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
    Route::prefix('/user')->group(function () {
        Route::prefix('/profile')->group(function () {
            Route::resource('change', ChangeController::class);
        });
        Route::resource('wishlist', WishlistController::class);
        Route::resource('outletFavorite', OutletController::class);
        Route::resource('recent-view', ViewController::class);
    });
    Route::prefix('/purchase')->group(function () {
        Route::resource('carts', CartController::class);
        Route::resource('promos', PromoController::class);
        Route::resource('procurements', ProcurementController::class);
    });
    Route::prefix('/inbox')->group(function () {
        Route::resource('reviews', ReviewController::class);
        // Route::resource('complaints',)
        Route::resource('update', UpdateController::class);
    });
});

Route::prefix('/admin')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::resource('/', DashboardController::class);
    });
    Route::prefix('/customer')->group(function () {
        Route::resource('customer-data', CustomerController::class);
    });
    Route::prefix('/customer')->group(function () {
        Route::resource('partner-data', PartnerController::class);
    });
    Route::prefix('transaction')->group(function () {
        Route::resource('/', TransactionController::class);
    });
    Route::prefix('/reports')->group(function () {
        Route::resource('analytic', AnalyticalController::class);
    });
    Route::prefix('/reviews')->group(function () {
        Route::resource('/', AdminReviewController::class);
    });
});
