<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
// use Tabuna\Breadcrumbs\Trail;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/logout', [HomeController::class, 'redirect']);
route::get('/index', [HomeController::class, 'index']);

// Product Routing System

route::get('/products', [ProductController::class, 'list']);
route::get('/search', [ProductController::class, 'search']);
route::get('/single-product/{id}', [ProductController::class, 'product']);//original
route::post('/single-product/{id}', [ProductController::class, 'product']);
route::post('/add-cart/{id}', [ProductController::class, 'addcart']);


// Admin Routing System

route::get('/product', [AdminController::class, 'product']);
route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
route::get('/showproduct', [AdminController::class, 'allproduct']);
route::get('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
route::post('/updateproductdone/{id}', [AdminController::class, 'updateproductdone']);
route::delete('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);


});


// Breadcrumbs routing
// //Products

Route::get('/l_products', fn()=>view('user.products'))->name('products')->breadcrumbs(fn (Trail $trail) => $trail->parent('products')->push('Products', route('products')));



