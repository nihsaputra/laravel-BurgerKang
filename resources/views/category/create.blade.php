@extends('layout.main')

@section('content')
    <h1 class="mb-5">Add New Categories</h1>

    <div class="row col-6">
    <form action="/categories" method="post">
        @method('post')
        @csrf
        <div class="mb-3" >
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" placeholder="category name" required>
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <a href="/categories" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>

@endsection
