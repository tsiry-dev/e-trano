<?php

use App\Http\Controllers\Api\V1\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/v1/register', [RegisterController::class, 'store']);
