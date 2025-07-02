<?php

namespace App\Dtos\Auth;

class RegisterDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
    )
    {}

    public static function fromArray(array $data): self
    {
        return new self(
           $data['name'],
           $data['email'],
           $data['password'],
        ) ;
    }
}
