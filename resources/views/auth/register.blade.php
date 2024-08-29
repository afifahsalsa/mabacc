@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card my-5">
                    <h2 class="text-center text-dark mt-5">Register!</h2>
                    <div class="text-center text-dark">Create an account to access mabac website</div>
                    <form class="card-body cardbody-color p-lg-5" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Input your name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
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
                                autocomplete="new-password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Confirm your password">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" style="font-weight: bold;" type="submit">Register</button>
                        </div>
                        <div class="form-text text-center mb-5 text-dark" style="font-weight: 600;">Do you have an account?
                            <a href="{{ route('login') }}" class="text-link fw-bold">Login.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container"
        style="background-color: #ffff; height: 100vh; display: flex; align-items: center; justify-content: center;">
        <div class="col-md-4">
            <div class="card"
                style="background-color: white; color: #333; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header bg-primary text-white" style="border-radius: 10px 10px 0 0;">{{ __('Register') }}
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                    <form action="{{ route('login') }}" method="POST">
                        <button type="submit" class="btn" style="width: 100%;">
                            {{ __('Do you have an account? Login') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
