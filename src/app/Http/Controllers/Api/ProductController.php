<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Submodule\Models\Product\IProductRepository;

class ProductController extends Controller
{
    public function __construct(
        private IProductRepository $productRepository,
    ) {
    }

    public function index(Request $request)
    {
        $products = $this->productRepository->fetchAll();

        return response()->json([
            'products' => $products,
        ]);
    }
}
