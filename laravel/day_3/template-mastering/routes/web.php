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
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\TablesController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\SingleproductController;
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

// Routes for frontend 
Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/single-product', [SingleproductController::class, 'index']);

// Routes for backend 
Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/401', [Error401Controller::class, 'index']);
Route::get('/404', [Error404Controller::class, 'index']);
Route::get('/500', [Error500Controller::class, 'index']);
Route::get('/charts', [ChartsController::class, 'index']);
Route::get('/layout-sidenav-light', [LayoutSidenavLightController::class, 'index']);
Route::get('/layout-static', [LayoutStaticController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/password', [PasswordController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/tables', [TablesController::class, 'index']);