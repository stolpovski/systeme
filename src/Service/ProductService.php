<?php

namespace App\Service;

use App\Dto\PurchaseDto;
use App\Dto\CalculatePriceDto;

class ProductService
{
    public function calculatePrice(CalculatePriceDto $calculatePriceDto): void
    {
        var_dump($calculatePriceDto);
    }

    public function purchase(PurchaseDto $purchaseDto): void
    {
        var_dump($purchaseDto);
    }
}