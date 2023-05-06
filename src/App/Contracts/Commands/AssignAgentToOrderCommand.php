<?php

declare(strict_types=1);

namespace App\Contracts\Commands;

class AssignAgentToOrderCommand
{
    public function __construct(
        private string $orderId,
        private string $userId,
    ) {
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }
}
