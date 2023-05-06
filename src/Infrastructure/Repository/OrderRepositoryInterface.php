<?php

declare(strict_types=1);

namespace Infrastructure\Repository;

use Domain\Order\Order;

interface OrderRepositoryInterface
{
    public function findById(string $orderId): Order;

    public function update(Order $order): void;
}