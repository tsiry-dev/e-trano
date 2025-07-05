<?php

use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\RegisterOwnerController;
use App\Http\Controllers\Api\V1\Auth\RegisterUserController;
use App\Http\Controllers\Api\V1\HouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::prefix('v1')->group(function () {

    Route::get('/houses', [HouseController::class, 'index']);
    Route::get('/houses/{slug}', [HouseController::class, 'find']);
    Route::get('/houses/gallery/{slug}', [HouseController::class, 'gallery']);


    Route::post('/user/register', [RegisterUserController::class, 'store']);
    Route::post('/owner/register', [RegisterOwnerController::class, 'store']);

    Route::post('/login', [LoginController::class, 'store']);
});
