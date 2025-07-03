<?php

namespace App\Repositories\Auth;

use App\Models\User;

class VerifyEmailRepository
{
   public function check(string $token): bool
   {
        if($token) {
             return User::where('remember_token', $token)->update([
                'is_emailValid' => User::IS_EMAIL_VALID,
                'email_verified_at' => now()
             ]);
        }

        return false;
   }
}
