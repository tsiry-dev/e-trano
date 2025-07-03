<?php

namespace App\Actions\Auth;

use App\Dtos\Auth\RegisterDto;
use App\Repositories\Auth\RegisterUserRepository;

class RegisterUserAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected RegisterUserRepository $repository
    ){}

    public function handle(RegisterDto $data)
    {
        return $this->repository->store($data);
    }
}
