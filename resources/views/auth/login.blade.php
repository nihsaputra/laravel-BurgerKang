@extends('layout.auth')

@section('auth-form')
    @if(session()->has('success-login'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-login') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session()->has('failed-login'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failed-login') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="/login" method="post">
        @csrf
        <svg width="100"><use xlink:href="#bootstrap"/></svg>
        <h2 class="mb-3 fw-normal">Please Login</h2>
        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="name@example.com" required>
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" id="password" placeholder="Password" required>
            <label for="passworrd">Password</label>
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <button class="w-100 btn btn-lg btn-dark mb-3 mt-3" type="submit">Login</button>
    </form>
    <p>Do not have account? <a href="/register">register now!</a></p>
@endsection
