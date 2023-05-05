<?php

declare(strict_types=1);

namespace Domain\Order;

final class Order
{
    private ProductCollection $products;

    public function addProduct(Product $product): void
    {
        // ...
    }
}
