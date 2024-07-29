<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function products()
    {
        $category = Category::where('name', 'Electronics')->first();

        return $category->products;

    }
}
