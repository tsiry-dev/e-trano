<?php

namespace App\Actions\Auth;

use App\Dtos\Auth\LoginDto;
use App\Models\User;
use App\Repositories\User\UserRepository;
use App\Services\Auth\LoginService;

class LoginAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected LoginService $authService
    ) {}

    public function handle(LoginDto $data): array|User|null
    {
        // Authentifier l'utilisateur via le service
        return $this->authService->authenticate($data->email, $data->password);
    }
}
