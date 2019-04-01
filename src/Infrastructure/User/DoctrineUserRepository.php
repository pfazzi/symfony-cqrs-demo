<?php
declare(strict_types=1);

namespace App\Infrastructure\User;


use App\Domain\User\User;
use App\Domain\User\UserRepositoryInterface;

final class DoctrineUserRepository implements UserRepositoryInterface
{
    public function byUsername(string $username): User
    {
        // TODO: Implement byUsername() method.
    }

    public function save(User $user): void
    {
        // TODO: Implement save() method.
    }
}