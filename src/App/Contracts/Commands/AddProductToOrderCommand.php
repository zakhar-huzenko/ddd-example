<?php

declare(strict_types=1);

namespace App\Contracts\Commands;

class AddProductToOrderCommand
{
    public function __construct(
        private string $orderId,
        private string $name,
        private string $description,
        private int $price,
        private int $quantity,
    ) {
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
