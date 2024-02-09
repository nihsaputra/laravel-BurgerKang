@extends('layout.auth')

@section('auth-form')

    <form action="/register" method="post">
        @csrf
        <svg width="100"><use xlink:href="#bootstrap"/></svg>
        <h2 class="mb-3 fw-normal">Please Register</h2>
        <div class="form-floating">
            <input type="type" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}" placeholder="name" required>
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" id="email" value="{{old('email')}}" placeholder="name@example.com" required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                 <div class="invalid-feedback">
                     {{$message}}
                </div>
                @enderror
        </div>

        <button class="w-100 btn btn-lg btn-dark mb-3 mt-3" type="submit">Register</button>
    </form>
    <small>Already have an account? <a href="/login">login now</a></small>
@endsection
