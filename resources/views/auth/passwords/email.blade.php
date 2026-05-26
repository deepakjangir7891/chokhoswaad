@extends('layouts.app')

@section('content')

<section class="owl-carousel img owl-loaded owl-drag"
    style="background-image: url('/web/images/images_1/masaala.png');background-repeat: no-repeat;background-size: cover;">

    <div class="slider-item"
        style="background-image: url('/web/images/images_1/masaala.png');background-repeat: no-repeat;background-size: cover;">

        <div class="overlay"></div>

        <div class="container">

            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-8 col-lg-5 ftco-animate">

                    <div class="card border-0 shadow-lg rounded-lg p-4"
                        style="background: rgba(0,0,0,0.78);">

                        <div class="text-center mb-4">

                            <img src="{{ asset('web/images/images_1/logo.png') }}"
                                width="100">

                            <h2 class="mt-3 text-white font-weight-bold">
                                Forgot Password
                            </h2>

                            <p class="text-light">
                                Enter your email to receive reset link 📩
                            </p>

                        </div>

                        <!-- Success Message -->
                        @if (session('status'))

                        <div class="alert alert-success">

                            {{ session('status') }}

                        </div>

                        @endif

                        <form method="POST"
                            action="{{ route('password.email') }}">

                            @csrf

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
                                    autofocus
                                    placeholder="Enter Your Email">

                                @error('email')

                                <span class="invalid-feedback d-block">

                                    <strong>{{ $message }}</strong>

                                </span>

                                @enderror

                            </div>

                            <!-- Button -->
                            <div class="form-group mt-4">

                                <button type="submit"
                                    class="btn btn-primary btn-block py-3">

                                    Send Password Reset Link

                                </button>

                            </div>

                            <!-- Back Login -->
                            <div class="text-center mt-3">

                                <a href="{{ route('login') }}"
                                    class="text-warning font-weight-bold">

                                    Back To Login

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