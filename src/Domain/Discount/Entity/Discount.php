<?php

namespace Domain\Discount\Entity;

class Discount
{
    /** @var string */
    private $id;

    /** @var int */
    private $amount;

    /** @var float */
    private $percent;

    /** @var int */
    private $minPrice;

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
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @return int
     */
    public function getMinPrice(): int
    {
        return $this->minPrice;
    }
}
