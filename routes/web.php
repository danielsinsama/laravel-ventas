<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesListController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::resource('/products',ProductController::class);

Route::get('/sell',[SalesController::class,'sell']);

Route::post('/add-to-cart',[SalesController::class,'addToCart']);

Route::put('/delete-product-cart/{product}',[SalesController::class,'removeItemCart']);

Route::put('/end-sale',[SalesController::class,'endSale']);

Route::get('/sales-list',[SalesListController::class,'salesList']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
