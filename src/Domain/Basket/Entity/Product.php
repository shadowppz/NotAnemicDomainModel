<?php

namespace Domain\Basket\Entity;

class Product
{
    /** @var string */
    private $id;

    /** @var int */
    private $price;

    /** @var int */
    private $initialPrice;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getInitialPrice(): int
    {
        return $this->initialPrice;
    }
}
