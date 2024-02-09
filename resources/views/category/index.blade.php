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

    <h1 class="mb-5">Categories</h1>
    <a href="/categories/create" class="btn btn-primary mb-2">Add New</a>
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
                <form action="/categories/{{$category->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
