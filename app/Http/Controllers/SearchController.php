<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchPostByCategory(Category $category)
    {
        $posts = $category->posts()->paginate(20);
        $categories = Category::all();

        return view('search.category', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
