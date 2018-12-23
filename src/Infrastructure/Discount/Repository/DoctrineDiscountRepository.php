<?php

namespace Infrastructure\Discount\Repository\Doctrine;

use Domain\Discount\Entity\Discount;
use Domain\Discount\Repository\IDiscountRepository;

class DoctrineDiscountRepository implements IDiscountRepository
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /**
     * DoctrineDiscountRepository constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function add(Discount $discount): void
    {
        // TODO: Implement add() method.
    }

    public function get(string $id): ?Discount
    {
        // TODO: Implement get() method.
    }

    public function remove(string $id): void
    {
        // TODO: Implement remove() method.
    }

}