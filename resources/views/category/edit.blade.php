@extends('layout.main')
@section('content')
    <h1 class="mb-5">Edit Categories</h1>

    <div class="row col-6">
        <form action="/categories/{{$categories->id}}" method="post">
            @method('put')
            @csrf
            <div class="mb-3" >
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $categories->name) }}" placeholder="category name" required>
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <a href="/categories" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection
