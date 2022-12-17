<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;




Route::prefix('customers')->group(function () {
    Route::post('/register', [RegisterController::class, 'create_customers']);
});
