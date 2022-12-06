<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Depsub\Models\Store\IStore;
use Depsub\Models\Store\IStoreRepository;
use Depsub\Services\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct(
        private IStoreRepository $storeRepository,
        private StoreService $storeService,
    ) {
    }

    public function index(Request $request)
    {
        $stores = $this->storeRepository->fetchAll();

        $overviews = array_map(
            fn (IStore $store) => $this->storeService->toDisplayName($store),
            $stores
        );

        return response()->json([
            'stores' => $overviews,
        ]);
    }
}
