<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchPostByCategory(Category $category)
    {
        $posts = $category->posts()->paginate(20);

        return view('search.category', [
            'posts' => $posts,
        ]);
    }

    public function searchPostByTag(Tag $tag)
    {
        $posts = $tag->posts()->paginate(20);

        return view('search.tag', [
            'posts' => $posts,
        ]);
    }
}
