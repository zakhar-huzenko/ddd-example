<?php

declare(strict_types=1);

namespace App\Api\v1\Controllers;

use App\Api\v1\Service\AddProductToOrderService;

class OrderController
{
    private AddProductToOrderService $addProductToOrderService;
    public function addProductToOrder(string $orderId, HttpRequest $httpRequest): void
    {
        $this->addProductToOrderService->addProductToOrder($orderId, $httpRequest);
    }
}
