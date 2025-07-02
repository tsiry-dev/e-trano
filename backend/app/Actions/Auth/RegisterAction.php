<?php

namespace App\Actions\Auth;

use App\Dtos\Auth\RegisterDto;
use App\Repositories\Auth\RegisterRepository;

class RegisterAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected RegisterRepository $repository
    ){}

    public function handle(RegisterDto $data)
    {
        return $this->repository->store($data);
    }
}
