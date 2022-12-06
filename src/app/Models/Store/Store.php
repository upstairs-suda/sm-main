<?php

namespace App\Models\Store;

use Depsub\Models\Store\IStore;

class Store implements IStore
{
    public function __construct(
        public string $name,
        public string $address,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}
