<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class CalculatePriceDto
{
    #[Assert\NotBlank]
    public int $product;

    public string $taxNumber;

    public string $couponCode;
}