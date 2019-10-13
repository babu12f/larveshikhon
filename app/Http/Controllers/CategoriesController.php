<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|min:3|max:100',
            'description' => 'required|min:5|max:200'
        ]);

        Category::create(request()->except('_token'));

        return redirect('/categories')->with('success', 'Category Created Successfully');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Category $category)
    {
        request()->validate([
            'name' => 'required|min:3|max:100',
            'description' => 'required|min:5|max:200'
        ]);

        $category->update(request()->except('_token'));

        return redirect('/categories')->with('success', 'Category Updated Successfully');
    }
}
