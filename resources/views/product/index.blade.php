

@extends('layout.main')

@section('content')
    @if(session()->has('success-create'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-create') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session()->has('success-delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-delete') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session()->has('success-update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="mb-5">Products</h1>
    <a href="/products/create" class="btn btn-primary mb-2">Add New</a>

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
                <a href="/products/edit/{{$product->id}}" class="btn btn-success">Edit</a>
                <form action="/products/{{$product->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @include('partials.paging.paging')
@endsection
