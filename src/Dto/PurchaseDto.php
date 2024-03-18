<?php

namespace App\Dto;

class PurchaseDto extends CalculatePriceDto
{
    public string $paymentProcessor;
}