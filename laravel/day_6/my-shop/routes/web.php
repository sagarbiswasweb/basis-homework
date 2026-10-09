<?php

use App\Http\Controllers\Backend\ChartsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Error401Controller;
use App\Http\Controllers\Backend\Error404Controller;
use App\Http\Controllers\Backend\Error500Controller;
use App\Http\Controllers\Backend\LayoutSidenavLightController;
use App\Http\Controllers\Backend\LayoutStaticController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\PasswordController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\TableController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\SingleProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// frontend routes 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/single-product', [SingleProductController::class, 'index'])->name('single-product');

// backend routes 
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/error-401', [Error401Controller::class, 'index'])->name('error.401');
Route::get('/error-404', [Error404Controller::class, 'index'])->name('error.404');
Route::get('/error-500', [Error500Controller::class, 'index'])->name('error.500');
Route::get('/charts', [ChartsController::class, 'index'])->name('charts');
Route::get('/layout/sidenav/light', [LayoutSidenavLightController::class, 'index'])->name('layout.sidenav.light');
Route::get('/layout/static', [LayoutStaticController::class, 'index'])->name('layout.static');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/password', [PasswordController::class, 'index'])->name('password');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/tables', [TableController::class, 'index'])->name('table');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/products', [ProductController::class, 'index'])->name('products');
