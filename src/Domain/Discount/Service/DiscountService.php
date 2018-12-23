<?php

namespace Domain\Discount\Service;

use Domain\Discount\Repository\IDiscountRepository;
use Domain\Discount\Specification\IDiscountableProductSpecification;

class DiscountService implements IDiscountService
{
    /** @var IDiscountRepository */
    private $discounts;

    /** @var IDiscountableProductSpecification */
    private $discountableProductSpecification;

    /**
     * DiscountService constructor.
     * @param IDiscountRepository $discounts
     * @param IDiscountableProductSpecification $discountableProductSpecification
     */
    public function __construct(IDiscountRepository $discounts, IDiscountableProductSpecification $discountableProductSpecification)
    {
        $this->discounts                        = $discounts;
        $this->discountableProductSpecification = $discountableProductSpecification;
    }

    public function calculateAmount(string $productId, string $discountId, int $price): int
    {
        $amount = 0;

        if ($this->discountableProductSpecification->isSatisfied($discountId, $discountId)) {
            $discount = $this->discounts->get($discountId);
            $amount   = $discount->calculate($price);
        }

        return $amount;
    }
}
