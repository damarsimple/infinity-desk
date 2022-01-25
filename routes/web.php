<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('home');
// });
//Route dashboard
Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/details/{slug}', [DetailController::class, 'details'])->name('details');
Route::get('/product', [ProductsController::class, 'product'])->name('product');


// Login
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'handleLogin']);

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'handleRegister'])->name('register');
