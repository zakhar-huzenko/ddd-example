<?php

declare(strict_types=1);

namespace App\Api\v1\Controllers;

use App\Contracts\Commands\AddProductToOrderCommand;
use CommandBusInterface;

class OrderController
{
    public function __construct(
        private CommandBusInterface $commandBus,
    )
    {
    }

    public function addProductToOrder(string $orderId, HttpRequest $httpRequest): void
    {
        $command = new AddProductToOrderCommand(
            $orderId,
            (string)$httpRequest->get('name'),
            (string)$httpRequest->get('description'),
            (int)$httpRequest->get('price'),
            (int)$httpRequest->get('quantity'),
        );

        $this->commandBus->execute($command);
    }
}
