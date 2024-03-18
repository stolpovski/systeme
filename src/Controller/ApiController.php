<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController
{
    #[Route('/calculate-price', name: 'calculate_price')]
    public function calculatePrice(): Response
    {


        return new Response('calculate-price');
    }

    #[Route('/purchase', name: 'purchase')]
    public function purchase(): Response
    {


        return new Response('purchase');
    }
}