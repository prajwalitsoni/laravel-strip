<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;




Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('/checkout/charge', [CheckoutController::class, 'charge'])->name('checkout.charge');
Route::post('/product/{id}/purchase', [ProductController::class, 'purchase'])->name('product.purchase');

