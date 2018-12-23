<?php

namespace Domain\Basket\Repository;

use Domain\Basket\Entity\Basket;

interface IBasketRepository
{
    public function add(Basket $basket): void;

    public function get(string $id) : Basket;

    public function remove(string $id) : void;
}