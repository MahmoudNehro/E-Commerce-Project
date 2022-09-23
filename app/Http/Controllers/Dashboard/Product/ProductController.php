<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function create()
    {

        $categories = Category::active()->get();

        return view('products.create', compact('categories'));
    }
    public function store(ProductRequest $request)
    {
        $validated  = $request->validated();
        $quantity = Arr::pull($validated, 'quantity');
        $product =  Product::create($validated);
        $inventory = ['operation_type' => 'initial', 'steps' => 0, 'current' => $quantity, 'last_quantity' => $quantity];
        $product->inventories()->create($inventory);

        return redirect(route('products.index'));
    }
    public function edit(Product $product)
    {
        $categories = Category::active()->get();

        return view('products.edit', compact('product', 'categories'));
    }
    public function update(ProductRequest $request, Product $product)
    {
        $validated  = $request->validated();
        $product->update($validated);

        return redirect(route('products.index'));
    }
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }
}
