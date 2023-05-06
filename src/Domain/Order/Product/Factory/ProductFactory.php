<?php

declare(strict_types=1);

namespace Domain\Order\Product\Factory;

use Domain\Order\Product\Product;

class ProductFactory
{
    public function create(
        string $name,
        string $description,
        int $price,
        int $quantity
    ): Product {
        return new Product(
            $name,
            $description,
            $price,
            $quantity
        );
    }
}
