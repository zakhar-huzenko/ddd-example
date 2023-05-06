<?php

declare(strict_types=1);

namespace Infrastructure\Repository;

use Domain\User\User;

interface UserRepositoryInterface
{
    public function findById(string $userId): User;
}