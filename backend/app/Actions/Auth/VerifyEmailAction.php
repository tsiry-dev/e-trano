<?php

namespace App\Actions\Auth;

use App\Repositories\Auth\VerifyEmailRepository;

class VerifyEmailAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected VerifyEmailRepository $repository
    ){}

    public function handle(string $token): bool
    {
        return $this->repository->check($token);
    }
}
