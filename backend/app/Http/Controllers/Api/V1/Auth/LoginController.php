<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Actions\Auth\LoginAction;
use App\Dtos\Auth\LoginDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\LoginResource;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function store(LoginRequest $request, LoginAction $action)
     {

        $data = $action->handle(LoginDto::fromArray($request->validated()));

        if(!$data) {
            return response()->json([
                'message' => 'Identifiants invalides'
            ], 401);
        }

        if(isset($data['error']) && $data['error']){
            return response()->json([
                'message' => $data['message'],
            ], 400); // Code HTTP 400 pour Bad Request
        }

        return response()->json([
            'message' => 'Authentification réussie',
            'data' => new LoginResource($data['user']),
            'token' => $data['token']
        ]);

     }
}
