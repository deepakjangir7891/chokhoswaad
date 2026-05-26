@extends('layouts.app')

@section('content')

<section class="owl-carousel img owl-loaded owl-drag" style="background-image: url('web/images/images_1/masaala.png');background-repeat: no-repeat;background-size: cover;">

    <div class="slider-item" style="background-image: url('web/images/images_1/masaala.png');background-repeat: no-repeat;background-size: cover;">

        <div class="overlay"></div>

        <div class="container">

            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-8 col-lg-6 ftco-animate">

                    <div class="card border-0 shadow-lg rounded-lg p-4"
                        style="background: rgba(0,0,0,0.78);">

                        <div class="text-center mb-4">

                            <img src="{{ asset('web/images/images_1/logo.png') }}"
                                width="100">

                            <h2 class="mt-3 text-white font-weight-bold">
                                Create Account
                            </h2>

                            <p class="text-light">
                                Join Chokho Swaad Family 🌶️
                            </p>

                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="form-group">

                                <label class="text-white">
                                    Full Name
                                </label>

                                <input id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                    placeholder="Enter Full Name">

                                @error('name')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <!-- Email -->
                            <div class="form-group">

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
                                    placeholder="Enter Email Address">

                                @error('email')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <!-- Password -->
                            <div class="form-group">

                                <label class="text-white">
                                    Password
                                </label>

                                <input id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Create Password">

                                @error('password')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">

                                <label class="text-white">
                                    Confirm Password
                                </label>

                                <input id="password-confirm"
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Confirm Password">

                            </div>

                            <!-- Register Button -->
                            <div class="form-group mt-4">

                                <button type="submit"
                                    class="btn btn-primary btn-block py-3">

                                    Register Now

                                </button>

                            </div>

                            <!-- Login -->
                            <div class="text-center mt-3">

                                <span class="text-light">
                                    Already have an account?
                                </span>

                                <a href="{{ route('login') }}"
                                    class="text-warning font-weight-bold">

                                    Login

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