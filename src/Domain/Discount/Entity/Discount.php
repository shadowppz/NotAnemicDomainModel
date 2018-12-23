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

    public function calculate(int $price) : int
    {
        if ($price > $this->minPrice) {
            return 0;
        }

        if ($this->percent) {
            return floor($price * $this->percent);
        }

        if ($this->amount) {
            return $this->amount;
        }

        return 0;
    }
}