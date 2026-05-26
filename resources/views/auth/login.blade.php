@extends('layouts.app')

@section('content')

<section class="owl-carousel img owl-loaded owl-drag" style="background-image: url('web/images/images_1/masaala.png');">

    <div class="slider-item" style="background-image: url('web/images/images_1/masaala.png');">
        <div class="overlay"></div>

        <div class="container">

            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">

                    <div class="card shadow-lg border-0 rounded-lg p-4"
                        style="background: rgba(0,0,0,0.75);">

                        <div class="text-center mb-4">

                            <img src="{{ asset('web/images/images_1/logo.png') }}"
                                width="100">

                            <h2 class="mt-3 text-white font-weight-bold">
                                Chokho Suwad Login
                            </h2>

                            <p class="text-light">
                                Welcome Back 👋
                            </p>

                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="form-group text-left">

                                <label class="text-white">
                                    Email Address
                                </label>

                                <input id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                    placeholder="Enter Email">

                                @error('email')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <!-- Password -->
                            <div class="form-group text-left">

                                <label class="text-white">
                                    Password
                                </label>

                                <input id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="Enter Password">

                                @error('password')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <!-- Remember -->
                            <div class="form-group text-left">

                                <div class="form-check">

                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white"
                                        for="remember">

                                        Remember Me

                                    </label>

                                </div>

                            </div>

                            <!-- Button -->
                            <div class="form-group">

                                <button type="submit"
                                    class="btn btn-primary btn-block py-3">

                                    Login

                                </button>

                            </div>

                            <!-- Forgot -->
                            @if (Route::has('password.request'))

                            <div class="text-center">

                                <a class="text-warning"
                                    href="{{ route('password.request') }}">

                                    Forgot Your Password?

                                </a>

                            </div>

                            @endif

                            <!-- Register -->
                            <div class="text-center mt-3">

                                <span class="text-light">
                                    Don't have account?
                                </span>

                                <a href="{{ route('register') }}"
                                    class="text-warning font-weight-bold">

                                    Register

                                </a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

@endsection