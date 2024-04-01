<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::resource('products', ProductsController::class);
Route::get('/products', [ProductsController::class, 'index'])->name('product.index');
Route::post('/products', [ProductsController::class, 'store'])->name('product.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
