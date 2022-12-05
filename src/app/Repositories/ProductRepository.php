<?php

namespace App\Repositories;

use App\Models\Product\Product;
use Submodule\Models\Product\IProductRepository;

class ProductRepository implements IProductRepository
{
    public function fetchAll(): array
    {
        return [
            new Product(name: '鉛筆', price: 120),
            new Product(name: 'ノート', price: 200),
            new Product(name: '消しゴム', price: 100),
        ];
    }
}
