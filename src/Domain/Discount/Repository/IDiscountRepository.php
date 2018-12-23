<?php

namespace Domain\Discount\Repository;

use Domain\Discount\Entity\Discount;

interface IDiscountRepository
{
    public function add(Discount $discount): void;

    public function get(string $id) : Discount;

    public function remove(string $id) : void;
}