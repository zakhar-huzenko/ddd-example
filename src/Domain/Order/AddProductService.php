<?php

declare(strict_types=1);

namespace Domain\Order;

use Domain\Order\Product\Factory\ProductFactory;

class AddProductService
{
    public function __construct(
        private ProductFactory $productFactory,
    ) {
    }

    public function addProduct(
        Order $order,
        string $name,
        string $description,
        int $price,
        int $quantity,
    ): Order
    {
        // How to get the entity from another context?
        // For example, assign agent to order (information of agent is in User context)

        // ...

        $product = $this->productFactory->create($name, $description, $price, $quantity);

        $order->addProduct($product);

        return $order;
    }
}
