<?php

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

Route::get('/', [ProductsController::class, 'index'])->name('products.index');
Route::get('/add', [ProductsController::class, 'add'])->name('products.add');
Route::post('store', [ProductsController::class, 'store'])->name('products.store');
Route::post('delete', [ProductsController::class, 'delete'])->name('products.delete');