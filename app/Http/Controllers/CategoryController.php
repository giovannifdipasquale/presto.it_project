<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function byCategory(Category $category)
    {
        $articles = $category->articles->where('is_accepted', true);
        return view('categories.byCategory', [
            'articles' => $articles,
            'category' => $category,
        ]);
    }
}