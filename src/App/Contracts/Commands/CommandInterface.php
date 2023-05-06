<?php

declare(strict_types=1);

namespace App\Contracts\Commands;

interface CommandInterface
{
    public function execute(): void;
}