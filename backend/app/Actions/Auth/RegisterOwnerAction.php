<?php

namespace App\Actions\Auth;

use App\Dtos\Auth\RegisterDto;
use App\Repositories\Auth\RegisterOwnerRepository;

class RegisterOwnerAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected RegisterOwnerRepository $repository
    ){}

    public function handle(RegisterDto $data)
    {
        return $this->repository->store($data);
    }
}
