<?php

use App\Http\Controllers\Api\V1\Auth\RegisterUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/v1/register', [RegisterUserController::class, 'store']);
