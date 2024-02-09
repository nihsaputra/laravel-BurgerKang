@extends('layout.main')

@section('content')
    <h1 class="mb-5">Edit Products</h1>

    <div class="row col-6">
        <form action="/products/{{$product->id}}" method="post">
            @method('put')
            @csrf
            <div class="mb-3" >
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $product->name)}}" placeholder="product name" required>
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3" >
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="category_id" name="category_id">
                    <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3" >
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $product->price)}}" placeholder="price" required>
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3" >
                <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{old('stock', $product->stock)}}" placeholder="stock" required>
                @error('stock')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <a href="/products" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection
