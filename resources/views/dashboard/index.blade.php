@extends('layout.main')

@section('content')
    <h1 class="mb-5">Dashboard</h1>

    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h4 class="card-title">120</h4>
                    <p class="card-text">Orders</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h4 class="card-title">{{ count($products) }}</h4>
                    <p class="card-text">Products</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h4 class="card-title">{{ count($categories) }}</h4>
                    <p class="card-text">Categories</p>
                </div>
            </div>
        </div>
    </div>
@endsection
