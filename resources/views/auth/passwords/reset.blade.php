@extends('layouts.app')

@section('content')

<section class="owl-carousel img owl-loaded owl-drag"
    style="background-image: url({{ asset('web/images/bg_3.jpg') }});">

    <div class="slider-item"
        style="background-image: url({{ asset('web/images/bg_3.jpg') }});">

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
                                Reset Password
                            </h2>

                            <p class="text-light">
                                Create a new secure password 🔐
                            </p>

                        </div>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden"
                                name="token"
                                value="{{ $token }}">

                            <!-- Email -->
                            <div class="form-group">

                                <label class="text-white">
                                    Email Address
                                </label>

                                <input id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ $email ?? old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
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
                                    New Password
                                </label>

                                <input id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Enter New Password">

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

                            <!-- Button -->
                            <div class="form-group mt-4">

                                <button type="submit"
                                    class="btn btn-primary btn-block py-3">

                                    Reset Password

                                </button>

                            </div>

                            <!-- Login -->
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