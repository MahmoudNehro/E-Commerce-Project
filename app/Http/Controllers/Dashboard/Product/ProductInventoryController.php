<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Enums\Product\InventoryTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\ProductInventoryRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductInventoryController extends Controller
{
    public function index($id)
    {
        $product = Product::findOrFail($id);
        $histories = $product->inventories;
        return view('products.product-histories.index', compact('histories', 'product'));
    }
    public function create($id)
    {
        $product = Product::findOrFail($id);
        $types = InventoryTypeEnum::toValues();

        return view('products.product-histories.create', compact('product', 'types'));
    }
    public function store(ProductInventoryRequest $request)
    {
        $validated = $request->validated();
        dd($validated);
        $productId = Arr::pull($validated, 'product_id');
        $product = Product::findOrFail($productId);
        // $product->inventories()->create();
        return redirect(route('product-histories.index'));
    }
}
