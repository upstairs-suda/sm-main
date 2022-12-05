<?php

namespace App\Models\Product;

use Submodule\Models\Product\IProduct;

class Product implements IProduct
{
    public function __construct(
        public string $name,
        public int $price,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
