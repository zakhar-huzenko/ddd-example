<?php

declare(strict_types=1);

namespace Domain\Order;

use Domain\Order\Agent\Factory\AgentFactory;
use Domain\User\User;

class AssignAgentService
{
    public function __construct(
        private AgentFactory $agentFactory,
    ) {
    }

    public function assignAgent(
        Order $order,
        User $user,
    ): Order
    {
        $agent = $this->agentFactory->create($user->getId(), $user->getName(), $user->getEmail());

        $order->assignAgent($agent);

        // HOW TO ASSIGN OTHER UNASSIGNED ORDERS OF THIS CUSTOMER TO THIS AGENT?

        return $order;
    }
}
