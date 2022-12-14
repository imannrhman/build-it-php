<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('refresh_token', [\App\Http\Controllers\Auth\RefreshTokenController::class, 'refresh_token']);
    Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);
});



require __DIR__.'/customer.php';
