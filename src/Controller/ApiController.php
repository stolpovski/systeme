<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;
use App\Dto\PurchaseDto;
use App\Dto\CalculatePriceDto;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ApiController extends AbstractController
{
    public function __construct(
        private ProductService $productService,
        private SerializerInterface $serializer,
        private ValidatorInterface $validator,
    ) {
    }

    #[Route('/calculate-price', name: 'calculate_price', methods: ['post'])]
    public function calculatePrice(Request $request): Response
    {
        $calculatePriceDto = $this->serializer->deserialize($request->getContent(), CalculatePriceDto::class, 'json');
        
        $errors = $this->validator->validate($calculatePriceDto);
        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            return new Response($errorsString, Response::HTTP_BAD_REQUEST);
        }

        $this->productService->calculatePrice($calculatePriceDto);

        return new Response();
    }

    #[Route('/purchase', name: 'purchase', methods: ['post'])]
    public function purchase(Request $request): Response
    {
        
        $purchaseDto = $this->serializer->deserialize($request->getContent(), PurchaseDto::class, 'json');
        
        $this->productService->purchase($purchaseDto);
        
        return new Response();
    }
}