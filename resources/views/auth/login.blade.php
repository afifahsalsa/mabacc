@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card my-5">
                    <h2 class="text-center text-dark mt-5">Login!</h2>
                    <div class="text-center text-dark">Welcome to Mabac Website</div>
                    <form class="card-body cardbody-color p-lg-5" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email"
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror>
                        </div>
                        <div class="mb-3">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" style="font-weight: bold;" type="submit">Login</button>
                          </div>
                        <div class="form-text text-center mb-5 text-dark" style="font-weight: 600;">Not Registered?
                            <a href="{{ route('register') }}" class="text-link fw-bold">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
