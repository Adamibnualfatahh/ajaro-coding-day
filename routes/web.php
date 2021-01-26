<?php

use App\Http\Controllers\SalesController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProductsController;
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
// root path
Route::get('/', [ExampleController::class, 'index']);
Route::get('/example1', [ExampleController::class, 'example1']);

Route::get('/categories', [CategoryController::class, 'index'])
    ->name ('categories');
Route::get('/categories/edit', [CategoryController::class, 'edit'])
    ->name ('categories.edit');

Route::get('/products', [ProductsController::class, 'products'])
    ->name ('products');
Route::get('/products/edit', [ProductsController::class, 'edit'])
    ->name ('products.edit');

Route::get('/suppliers', [SuppliersController::class, 'suppliers'])
    ->name ('suppliers');
    Route::get('/suppliers/edit', [SuppliersController::class, 'edit'])
    ->name ('suppliers.edit');

Route::get('/sales', [SalesController::class, 'sales'])
    ->name ('sales'); 

Route::get('/purchases', [PurchasesController::class, 'purchases'])
    ->name ('purchases');

