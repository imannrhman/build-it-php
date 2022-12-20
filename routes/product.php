<?php

use App\Http\Controllers\Product\Category\ProductCategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\Spesification\ProductSpecificationController;
use App\Http\Controllers\Transaction\Cart\CartController;
use Illuminate\Support\Facades\Route;


Route::prefix('product')->group(function () {
    Route::post('', [ProductController::class, 'store']);
    Route::get('', [ProductController::class, 'index']);
});


Route::prefix('category')->group(function () {
    Route::get('', [ProductCategoryController::class, 'index']);
    Route::get('/{id}', [ProductCategoryController::class, 'get_sub_categories']);
});


Route::prefix('specification')->group(function () {
     Route::get('', [ProductSpecificationController::class, 'index']);
    Route::get('/{id}', [ProductSpecificationController::class, 'get_specification_title']);
});


Route::prefix('cart')->group(function () {
    Route::GET('', [CartController::class, 'index']);
    Route::POST('', [CartController::class, 'store']);
});
