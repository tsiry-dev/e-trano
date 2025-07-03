<?php

namespace App\Services\Auth;

use App\Events\Auth\NewUserCreated;
use App\Models\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected UserRepository $userRepository
    ){}

    public function authenticate(string $email, string $password): array|User|null
    {
        $user = $this->userRepository->findByEmail($email);

        if (!$user || !Hash::check($password, $user->password)) {
            return null;
        }

        if (!$user->is_emailValid) {

            NewUserCreated::dispatch($user);

            return [
                'error' => true,
                'message' => 'Votre email n\'est pas encore validé, un email de vérification vous a été envoyé.'
            ];
        }

        // Créer un token
        $token = $user->createToken('auth_login_token')->plainTextToken;

        return [
            'token' => $token,
            'user' => $user
        ];
    }
}
