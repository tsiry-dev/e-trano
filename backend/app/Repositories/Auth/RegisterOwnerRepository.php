<?php

namespace App\Repositories\Auth;

use App\Dtos\Auth\RegisterDto;
use App\Models\User;

class RegisterOwnerRepository
{
    public function store(RegisterDto $data): User
    {
        return User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => bcrypt($data->password),
            'is_emailValid' => User::IS_EMAIL_NOT_VALID,
            'remember_token' => \Illuminate\Support\Str::random(50),
            'role' => 'owner'
        ]);
    }
}
