<?php

declare(strict_types=1);

namespace App\Api\v1\Service;

use Domain\Order\Contract\Dto\AddProductRequestDto;
use Domain\Order\Factory\ProductFactory;
use Infrastructure\Repository\OrderRepositoryInterface;

class AddProductService
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository,
        private ProductFactory $productFactory,
    ) {
    }

    public function addProductToOrder(string $orderId, HttpRequest $httpRequest): void
    {
        $order = $this->orderRepository->findById($orderId);
        $dto = new AddProductRequestDto($httpRequest->getBodyData());
        $service = new \Domain\Order\AddProductService($order, $this->productFactory, $dto);

        $this->orderRepository->update($service->addProduct());
    }
}
