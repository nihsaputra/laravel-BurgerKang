@extends('layout.main')

@section('content')
    <h1 class="mb-5">Categories</h1>

    <a href="/categories/add" class="btn btn-primary mb-2">Add New</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$category->name}}</td>
            <td>
                <a href="/categories/{{$category->id}}" class="btn btn-warning">View</a>
                <a href="/categories/edit/{{$category->id}}" class="btn btn-success">Edit</a>
                <a href="/categories/{{$category->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
