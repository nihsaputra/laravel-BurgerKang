<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        return view('product/index',[
            'title' => 'Products',
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('product.create',[
            'title' => 'Products',
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        Category::findOrfail($request->category_id);

        $validate = $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:3',
            'price' => 'required|integer|min: 0',
            'stock' => 'required|integer|min: 0',
        ]);
        Product::create($validate);
        request()->session()->flash('success-create', 'successfully create new product');
        return redirect('/products');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        request()->session()->flash('success-delete', 'successfully delete product');
        return redirect('/products');
    }

    public function edit($id)
    {
        return view('product.edit', [
            'title' => 'Products',
            'product' => Product::findOrFail($id),
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        Product::findOrFail($id);
        Category::findOrFail($request->category_id);

        $validate = $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:3',
            'price' => 'required|integer|min: 0',
            'stock' => 'required|integer|min: 0',
        ]);
        Product::where('id', $id)->update($validate);
        request()->session()->flash('success-update', 'successfully update product');
        return redirect('/products');
    }
}
