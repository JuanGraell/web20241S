<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index'])->name('product.index');
Route::post('/products', [ProductsController::class, 'store'])->name('product.store');