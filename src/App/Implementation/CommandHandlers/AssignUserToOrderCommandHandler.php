<?php

declare(strict_types=1);

namespace App\Implementation\CommandHandlers;

use App\Contracts\Commands\AssignAgentToOrderCommand;
use App\Contracts\Commands\CommandInterface;
use Domain\Order\AssignAgentService;
use Infrastructure\Repository\OrderRepositoryInterface;
use Infrastructure\Repository\UserRepositoryInterface;

class AssignUserToOrderCommandHandler implements CommandHandlerInterface
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository,
        private UserRepositoryInterface $userRepository,
        private AssignAgentService $assignAgentService,
    ) {
    }

    public function handle(AssignAgentToOrderCommand|CommandInterface $command): void
    {
        $order = $this->orderRepository->findById($command->getOrderId());
        $user = $this->userRepository->findById($command->getUserId());
        $updatedOrder = $this->assignAgentService->assignAgent($order, $user);

        $this->orderRepository->update($updatedOrder);
    }
}
