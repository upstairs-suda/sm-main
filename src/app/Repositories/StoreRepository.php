<?php

namespace App\Repositories;

use App\Models\Store\Store;
use Depsub\Models\Store\IStoreRepository;

class StoreRepository implements IStoreRepository
{
    /**
     * @return Store[]
     */
    public function fetchAll(): array
    {
        return [
            new Store(name: '文房具屋', address: '東京都'),
            new Store(name: '靴屋', address: '北海道'),
            new Store(name: 'パン屋', address: '大阪府'),
        ];
    }
}
