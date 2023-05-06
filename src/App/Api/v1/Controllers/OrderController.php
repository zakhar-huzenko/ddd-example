<?php

declare(strict_types=1);

namespace App\Api\v1\Controllers;

use App\Contracts\Commands\AddProductToOrderCommand;
use App\Contracts\Commands\AssignAgentToOrderCommand;
use CommandBusInterface;

class OrderController
{
    public function __construct(
        private CommandBusInterface $commandBus,
        private AuthModule $authModule,
        private HttpRequest $httpRequest,
    )
    {
    }

    public function addProductToOrder(string $orderId): void
    {
        $command = new AddProductToOrderCommand(
            $orderId,
            (string) $this->httpRequest->get('name'),
            (string) $this->httpRequest->get('description'),
            (int) $this->httpRequest->get('price'),
            (int) $this->httpRequest->get('quantity'),
        );

        $this->commandBus->execute($command);
    }

    public function assignUserToOrder(string $orderId): void
    {
        $command = new AssignAgentToOrderCommand(
            $orderId,
            $this->authModule->getCurrentUserId(),
        );

        $this->commandBus->execute($command);
    }
}
