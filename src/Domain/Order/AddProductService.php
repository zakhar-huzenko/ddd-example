<?php

declare(strict_types=1);

namespace Domain\Order;

use Domain\Order\Contract\Dto\AddProductRequestDto;
use Domain\Order\Factory\ProductFactory;

class AddProductService
{
    public function __construct(
        private Order $order,
        private ProductFactory $productFactory,
        private AddProductRequestDto $addProductRequestDto,
    ) {
    }

    public function addProduct(): Order
    {
        // How to get the entity from another context?
        // For example, assign agent to order (information of agent is in User context)

        // ...

        // here could be some validation by business rules or another business logic so this class is necessary

        $product = $this->productFactory->create($this->addProductRequestDto);

        $this->order->addProduct($product);

        return $this->order;
    }
}
