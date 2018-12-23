<?php

namespace Domain\Basket\Service;

interface IBasketService
{
    public function applyDiscount(string $basketId, string $discountId): void;
}