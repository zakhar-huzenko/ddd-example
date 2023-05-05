<?php

declare(strict_types=1);

namespace App\Api\v1\Service;

use Domain\Order\Contract\AddProductServiceInterface;
use Domain\Order\Contract\Dto\AddProductRequestDto;

class AddProductService
{
    private AddProductServiceInterface $addProductDomainService;

    public function addProductToOrder(string $orderId, HttpRequest $httpRequest): void
    {
        $dto = new AddProductRequestDto($httpRequest->getBodyData());

        $this->addProductDomainService->addProduct($orderId, $dto);
    }
}
