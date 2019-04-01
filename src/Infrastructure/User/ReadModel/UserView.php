<?php
declare(strict_types=1);

namespace App\Infrastructure\User\ReadModel;


class UserView
{
    /** @var string */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}