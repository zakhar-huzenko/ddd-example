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
        int $quantity
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
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
