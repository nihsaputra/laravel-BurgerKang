@extends('layout.main')

@section('content')
    <h1 class="mb-5">Add New Products</h1>

    <div class="row col-6">
        <form action="/products" method="post">
            @method('post')
            @csrf
            <div class="mb-3" >
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" placeholder="product name" required>
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3" >
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="category_id" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3" >
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}" placeholder="price" required>
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3" >
                <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{old('stock')}}" placeholder="stock" required>
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
