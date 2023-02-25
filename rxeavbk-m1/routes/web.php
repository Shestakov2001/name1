<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalog', [App\Http\Controllers\ProductController::class, 'index']);

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'product']);

Route::get('/soloproduct/{id}', [App\Http\Controllers\SoloController::class, 'soloproduct']);

Route::get('/cart', [App\Http\Controllers\CartController::class, 'show']);

Route::get('/cart/add/{id}', [App\Http\Controllers\CartController::class, 'add']);

Route::get('/cart/minus/{id}', [App\Http\Controllers\CartController::class, 'minus']);

Route::get('/cart/plus/{id}', [App\Http\Controllers\CartController::class, 'plus']);

Route::get('/cart/pay/{id}', [App\Http\Controllers\CartController::class, 'pay']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::post('/admin/create_category', [App\Http\Controllers\AdminController::class, 'create_category'])->name('create_cat');

Route::post('/admin/create_product', [App\Http\Controllers\AdminController::class, 'create_product'])->name('create_prod');

Route::view('/where','where')->name('where');
