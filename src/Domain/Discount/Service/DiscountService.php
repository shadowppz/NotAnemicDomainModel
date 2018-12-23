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
        if (false === $this->discountableProductSpecification->isSatisfied($productId, $discountId)) {
            return 0;
        }

        $discount = $this->discounts->get($discountId);

        if ($price > $discount->getMinPrice()) {
            return 0;
        }

        if ($discount->getPercent()) {
            return floor($price * $discount->getPercent());
        }

        if ($discount->getAmount()) {
            return $discount->getAmount();
        }

        return 0;
    }
}
