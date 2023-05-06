<?php

declare(strict_types=1);

namespace Domain\Order;

use Domain\Order\Product\Product;

final class Order
{
    private ProductCollection $products;

    public function addProduct(Product $product): void
    {
        $this->products->add($product);
    }
}
