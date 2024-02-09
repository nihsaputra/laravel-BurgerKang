<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index',[
            'title' => 'Categories',
            'categories' => Category::latest()->get()
        ]);
    }

    public function create()
    {
        return view('category.create',[
           'title' => 'Categories'
        ]);
    }

    public function show()
    {
        return view('category.create',[
            'title' => 'Categories'
        ]);
    }
}
