<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

Route::view('/', 'index')->name('home');
Route::get('/shop/{slug?}', [ShopController::class, 'index'])->name('shop');
Route::get('/product/{slug}', [ProductsController::class, 'index'])->name('product');
Route::get('/change-currency/{code}', [ShopController::class, 'changeCurrency'])->name('change-currency');
Route::view('/contact', 'contact')->name('contact');
