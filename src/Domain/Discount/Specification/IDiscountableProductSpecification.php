<?php

namespace Domain\Discount\Specification;

interface IDiscountableProductSpecification
{
    public function isSatisfied(string $productId, string $discountId) : bool;
}