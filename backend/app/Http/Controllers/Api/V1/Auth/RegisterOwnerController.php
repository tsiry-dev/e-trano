<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Actions\Auth\RegisterOwnerAction;
use App\Actions\Auth\VerifyEmailAction;
use App\Dtos\Auth\RegisterDto;
use App\Events\Auth\NewUserCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\RegisterResource;


class RegisterOwnerController extends Controller
{
    public function store(RegisterRequest $request, RegisterOwnerAction $action)
    {
        $user = $action->handle(RegisterDto::fromArray($request->validated()));
        NewUserCreated::dispatch($user);

        return response()->json([
            'message' => 'Votre compte a bien été créé avec succès, vérifiez votre email maintenant!!',
             'data' => new RegisterResource($user)
        ]);
    }

    public function verifyEmail(string $token, VerifyEmailAction $action)
    {

        $isVerify = $action->handle($token);
        return redirect('http://localhost:5173/login');
    }
}
