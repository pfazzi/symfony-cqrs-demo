<?php
declare(strict_types=1);

namespace App\Domain\User;


class User
{
    private $username;
    private $passwordHash;

    public function toNickname(): string
    {
        return $this->username;
    }

    public function authenticate(string $password, callable $checkHash): bool
    {
        return $checkHash($password, $this->passwordHash);
    }

    public function changePassword(string $password, callable $hash): void
    {
        $this->passwordHash = $hash($password);
    }
}