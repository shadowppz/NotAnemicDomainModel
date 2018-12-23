<?php

namespace Domain\Discount\Query;

interface IProductsAffectedByDiscountQuery
{
    /**
     * @param string $discountId
     *
     * @return string[]
     */
    public function getResult(string $discountId) : array;
}