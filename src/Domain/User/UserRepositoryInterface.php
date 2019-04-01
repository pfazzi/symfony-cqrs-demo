<?php
declare(strict_types=1);

namespace App\Domain\User;


interface UserRepositoryInterface
{
    public function byUsername(string $username): User;

    public function save(User $user): void;
}