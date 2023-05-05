<?php

declare(strict_types=1);

namespace Domain\Order;

use Domain\Order\Contract\AddProductServiceInterface;
use Domain\Order\Contract\Dto\AddProductRequestDto;

class AddProductService implements AddProductServiceInterface
{
    private OrderRepositoryInterface $orderRepository;
    private ProductFactory $productFactory;

    public function addProduct(string $orderId, AddProductRequestDto $dto): void
    {
        $order = $this->orderRepository->findById($orderId);
        $product = $this->productFactory->create($dto);

        $order->addProduct($product);

        $this->orderRepository->update($order);
    }
}
