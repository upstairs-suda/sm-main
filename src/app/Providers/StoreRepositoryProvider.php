<?php

namespace App\Providers;

use App\Repositories\StoreRepository;
use Depsub\Models\Store\IStoreRepository;
use Illuminate\Support\ServiceProvider;

class StoreRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IStoreRepository::class, fn () => new StoreRepository());
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
