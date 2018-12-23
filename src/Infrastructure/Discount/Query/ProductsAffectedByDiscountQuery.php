<?php

namespace Infrastructure\Discount\Query;

use Domain\Discount\Query\IProductsAffectedByDiscountQuery;

class ProductsAffectedByDiscountQuery implements IProductsAffectedByDiscountQuery
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /**
     * ProductsAffectedByDiscountQuery constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @inheritdoc
     */
    public function getResult(string $discountId): array
    {
        // TODO: Implement getResult() method.
    }
}