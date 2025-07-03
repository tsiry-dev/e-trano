<?php

use App\Http\Controllers\Api\V1\Auth\RegisterOwnerController;
use App\Http\Controllers\Api\V1\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/verify/{token}',[RegisterUserController::class, 'verifyEmail'])
      ->name('verify.email');

