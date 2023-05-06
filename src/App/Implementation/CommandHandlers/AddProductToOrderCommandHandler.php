<?php

declare(strict_types=1);

namespace App\Implementation\CommandHandlers;

use App\Contracts\Commands\AddProductToOrderCommand;
use App\Contracts\Commands\CommandInterface;
use Domain\Order\AddProductService;
use Infrastructure\Repository\OrderRepositoryInterface;

class AddProductToOrderCommandHandler implements CommandHandlerInterface
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository,
        private AddProductService $addProductService,
    ) {
    }

    public function handle(AddProductToOrderCommand|CommandInterface $command): void
    {
        $order = $this->orderRepository->findById($command->getOrderId());
        $updatedOrder = $this->addProductService->addProduct(
            $order,
            $command->getName(),
            $command->getDescription(),
            $command->getPrice(),
            $command->getQuantity(),
        );

        $this->orderRepository->update($updatedOrder);
    }
}
