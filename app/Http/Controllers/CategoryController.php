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

    public function show($id)
    {
        return view('category.show',[
            'title' => 'Categories',
            'categories' => Category::findOrfail($id)
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:categories'
        ]);
        Category::create($validate);
        $request->session()->flash('success-create', 'successfully create new category');
        return redirect('/categories');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        request()->session()->flash('success-delete', 'successfully delete category');
        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit',[
            'title' => 'Categories',
            'categories' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required|unique:categories|min:3'
        ]);

        Category::where('id',$id)->update($validate);
        $request->session()->flash('success-update', 'successfully update category');
        return redirect('/categories');
    }

}
