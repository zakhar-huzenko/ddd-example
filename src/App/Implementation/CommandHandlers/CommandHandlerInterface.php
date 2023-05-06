<?php

declare(strict_types=1);

namespace App\Implementation\CommandHandlers;

use App\Contracts\Commands\CommandInterface;

interface CommandHandlerInterface
{
    public function handle(CommandInterface $command): void;
}