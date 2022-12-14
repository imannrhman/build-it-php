<?php

use Illuminate\Support\Facades\Route;




Route::prefix('customers')->group(function () {
    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'create_customers']);
});
