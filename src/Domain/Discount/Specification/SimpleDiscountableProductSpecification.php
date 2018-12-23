<?php

namespace Domain\Discount\Specification;

use Domain\Discount\Query\IProductsAffectedByDiscountQuery;

class SimpleDiscountableProductSpecification implements IDiscountableProductSpecification
{
    /** @var IProductsAffectedByDiscountQuery */
    private $productsAffectedByDiscountQuery;

    /**
     * SimpleDiscountableProductSpecification constructor.
     * @param IProductsAffectedByDiscountQuery $productsAffectedByDiscountQuery
     */
    public function __construct(IProductsAffectedByDiscountQuery $productsAffectedByDiscountQuery)
    {
        $this->productsAffectedByDiscountQuery = $productsAffectedByDiscountQuery;
    }

    public function isSatisfied(string $productId, string $discountId): bool
    {
        return in_array($productId, $this->productsAffectedByDiscountQuery->getResult($discountId));
    }
}
