<?php

declare(strict_types=1);

namespace Domain\Order\Contract\Dto;

class AddProductRequestDto
{
    private string $name;
    private string $description;
    private int $price;
    private int $quantity;

    public function __construct(array $data)
    {
        // ...
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
