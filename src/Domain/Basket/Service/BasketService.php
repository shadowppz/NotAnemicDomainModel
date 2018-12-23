<?php

namespace Domain\Basket\Service;

use Domain\Basket\Entity\Product;
use Domain\Basket\Repository\IBasketRepository;
use Domain\Discount\Service\IDiscountService;

class BasketService implements IBasketService
{
    /** @var IBasketRepository */
    private $baskets;

    /** @var IDiscountService */
    private $discountService;

    /**
     * BasketService constructor.
     * @param IBasketRepository $baskets
     * @param IDiscountService $discountService
     */
    public function __construct(IBasketRepository $baskets, IDiscountService $discountService)
    {
        $this->baskets         = $baskets;
        $this->discountService = $discountService;
    }

    public function applyDiscount(string $basketId, string $discountId): void
    {
        $basket = $this->baskets->get($basketId);

        /** @var Product $product */
        foreach ($basket->getProducts() as $product) {
            $price = $product->getPrice();
            $discountAmount = $this->discountService->calculateAmount($product->getId(), $discountId, $price);

            $product->setPrice($price - $discountAmount);
        }
    }
}
