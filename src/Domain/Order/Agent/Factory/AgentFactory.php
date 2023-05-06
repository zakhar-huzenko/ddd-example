<?php

declare(strict_types=1);

namespace Domain\Order\Agent\Factory;

use Domain\Order\Agent\Agent;

class AgentFactory
{
    public function create(
        string $id,
        string $name,
        string $email,
    ): Agent {
        return new Agent(
            $id,
            $name,
            $email,
        );
    }
}
