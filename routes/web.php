<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ShopController;
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

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('admin.dashboard');


    Route::prefix('transaction')->group(function () {
        Route::get('/transaction', [TransactionController::class, 'transaction'])->name('admin.transaction');
    });     

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/add', [ProductController::class, 'create'])->name('admin.product.add');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/update', [ProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    });

});

Route::prefix('shop')->group(function () {
    Route::get('/dashboard', [ShopController::class, 'dashboard'])->name('shop.dashboard');
});   
