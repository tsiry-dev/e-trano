<?php

use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\RegisterOwnerController;
use App\Http\Controllers\Api\V1\Auth\RegisterUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::prefix('v1')->group(function () {
    Route::post('/user/register', [RegisterUserController::class, 'store']);
    Route::post('/owner/register', [RegisterOwnerController::class, 'store']);

    Route::post('/login', [LoginController::class, 'store']);
});
