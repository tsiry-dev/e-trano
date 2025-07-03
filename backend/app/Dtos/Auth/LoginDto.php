<?php

namespace App\Dtos\Auth;

class LoginDto
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public readonly string $email,
        public readonly string $password,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            $data['email'],
            $data['password'],
        );
    }
}
