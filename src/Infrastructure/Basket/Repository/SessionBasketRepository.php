<?php

namespace Infrastructure\Basket\Repository;

use Domain\Basket\Entity\Basket;
use Domain\Basket\Repository\IBasketRepository;

class SessionBasketRepository implements IBasketRepository
{
    /** @var ISessionStorage */
    private $sessionStorage;

    /**
     * SessionBasketRepository constructor.
     * @param ISessionStorage $sessionStorage
     */
    public function __construct(ISessionStorage $sessionStorage)
    {
        $this->sessionStorage = $sessionStorage;
    }

    public function add(Basket $basket): void
    {
        // TODO: Implement add() method.
    }

    public function get(string $id): Basket
    {
        // TODO: Implement get() method.
    }

    public function remove(string $id): void
    {
        // TODO: Implement remove() method.
    }
}
