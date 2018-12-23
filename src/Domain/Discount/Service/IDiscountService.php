<?php

namespace Domain\Discount\Service;

interface IDiscountService
{
    public function calculateAmount(string $productId, string $discountId, int $price) : int;
}