<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Product\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::query();

        $categoriesCollection =  CategoryResource::collection($categories->doesntHave('parent')->get());
        return response()->json(
            [
                'code' => 200,
                'status' => true,
                'message' => 'data retrieved successfully',
                'data' => ['categories' => $categoriesCollection]
            ],
            200,

        );
    }
    public function show($id)
    {
        $category = Category::findOrFail($id);

        $categoryResource = CategoryResource::make($category);
        return response()->json(
            [
                'code' => 200,
                'status' => true,
                'message' => 'data retrieved successfully',
                'data' => ['categories' => $categoryResource]
            ],
            200,

        );
    }
}
