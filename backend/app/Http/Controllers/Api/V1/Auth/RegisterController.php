<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Actions\Auth\RegisterAction;
use App\Dtos\Auth\RegisterDto;
use App\Events\Auth\NewUserCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\RegisterResource;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request, RegisterAction $action)
    {
        $user = $action->handle(RegisterDto::fromArray($request->validated()));
        NewUserCreated::dispatch($user);

        return response()->json([
            'message' => 'Votre compte a bien été créé avec succès, vérifiez votre email maintenant!!',
             'data' => new RegisterResource($user)
        ]);
    }
}
