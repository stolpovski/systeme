<?php

namespace App\Dto;

class CalculatePriceDto
{
    public int $product;

    public string $taxNumber;

    public string $couponCode;
}