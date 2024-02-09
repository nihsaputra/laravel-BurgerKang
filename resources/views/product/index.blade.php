

@extends('layout.main')

@section('content')

    <h1 class="mb-5">Products</h1>
    <a href="/products/add" class="btn btn-primary mb-2">Add New</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row"> {{ $loop->iteration }} </th>
            <td> {{ $product->name }} </td>
            <td> {{ $product->category->name }} </td>
            <td> {{ $product->price }} </td>
            <td> {{ $product->stock }} </td>
            <td>
                <a href="/products/{{$product->id}}" class="btn btn-warning">View</a>
                <a href="/products/edit/{{$product->id}}" class="btn btn-success">Edit</a>
                <a href="/products/delete/{{$product->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @include('partials.paging.paging')
@endsection
