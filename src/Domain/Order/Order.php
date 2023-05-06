<?php

declare(strict_types=1);

namespace Domain\Order;

use Domain\Order\Agent\Agent;
use Domain\Order\Product\Product;

final class Order
{
    private ProductCollection $products;
    private ?Agent $agent;
    private string $customerEmail;

    public function addProduct(Product $product): void
    {
        $this->products->add($product);
    }

    public function assignAgent(Agent $agent): void
    {
        $this->agent = $agent;
    }
}
