<?php

use App\Http\Controllers\AdminProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [
    HomeController::class, 'index'
]);
Route::get('/products', [
    ProductsController::class, 'show'
]);
Route::get('/products/add', [
    ProductsController::class, 'add'
]);

Route::prefix('admin')
    ->group(function () {
        Route::get('/products', [
            AdminProductsController::class, 'index'
        ]);
        Route::get('/products/add', [
            AdminProductsController::class, 'add'
        ]);
    });
