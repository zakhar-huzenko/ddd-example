<?php

declare(strict_types=1);

namespace Domain\Order;

interface OrderRepositoryInterface
{
    public function findById(string $orderId): Order;

    public function update(Order $order): void;
}