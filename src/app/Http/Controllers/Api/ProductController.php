<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Submodule\Models\Product\IProduct;
use Submodule\Models\Product\IProductRepository;
use Submodule\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(
        private IProductRepository $productRepository,
        private ProductService $productService,
    ) {
    }

    public function index(Request $request)
    {
        $products = $this->productRepository->fetchAll();

        $overviews = array_map(
            fn (IProduct $product) => $this->productService->toDisplayName($product),
            $products
        );

        return response()->json([
            'products' => $overviews,
        ]);
    }
}
