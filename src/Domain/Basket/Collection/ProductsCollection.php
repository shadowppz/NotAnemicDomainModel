<?php

namespace Domain\Basket\Collection;

use Domain\Basket\Entity\Product;

class ProductsCollection implements \Iterator
{
    /** @var Product[] */
    private $products;

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    public function getPriceSum() : int
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPrice();
        }

        return $sum;
    }
}