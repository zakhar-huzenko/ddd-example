<?php

declare(strict_types=1);

namespace Domain\Order\Product;

class Product
{
    private string $name;
    private string $description;
    private int $price;
    private int $quantity;

    public function __construct(
        string $name,
        string $description,
        int $price,
        int $quantity,
    ) {
        $this->quantity = $quantity;
        $this->price = $price;
        $this->description = $description;
        $this->name = $name;
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
