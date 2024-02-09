@extends('layout.main')

@section('content')
    <h1 class="mb-5">Categories: {{$categories->name}}</h1>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories->product as $p)
            <tr>
                <th scope="row"> {{ $loop->iteration }} </th>
                <td> {{ $p->name }} </td>
                <td> {{ $p->price }} </td>
                <td> {{ $p->stock }} </td>
                <td>
                    <a href="/products/edit/{{$p->id}}" class="btn btn-success">Edit</a>
                    <a href="/products/delete/{{$p->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('partials.paging.paging')

@endsection
