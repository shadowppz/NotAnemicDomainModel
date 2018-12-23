<?php

namespace Domain\Basket\Entity;

use Domain\Basket\Collection\ProductsCollection;

class Basket
{
    /** @var string */
    private $id;

    /** @var ProductsCollection */
    private $products;

    /** @var string|null */
    private $discountId;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return ProductsCollection
     */
    public function getProducts(): ProductsCollection
    {
        return $this->products;
    }

    /**
     * @return null|string
     */
    public function getDiscountId(): ?string
    {
        return $this->discountId;
    }

    public function getTotalPrice() : int
    {
        return $this->products->getPriceSum();
    }
}