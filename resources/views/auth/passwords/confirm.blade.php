@extends('layouts.app')

@section('content')

<section class="owl-carousel img owl-loaded owl-drag"
    style="background-image: url({{ asset('web/images/bg_1.jpg') }});">

    <div class="slider-item"
        style="background-image: url({{ asset('web/images/bg_1.jpg') }});">

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
                                Confirm Password
                            </h2>

                            <p class="text-light">
                                Please confirm your password to continue 🔒
                            </p>

                        </div>

                        <form method="POST"
                            action="{{ route('password.confirm') }}">

                            @csrf

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
                                    autocomplete="current-password"
                                    placeholder="Enter Your Password">

                                @error('password')

                                <span class="invalid-feedback d-block">

                                    <strong>{{ $message }}</strong>

                                </span>

                                @enderror

                            </div>

                            <!-- Button -->
                            <div class="form-group mt-4">

                                <button type="submit"
                                    class="btn btn-primary btn-block py-3">

                                    Confirm Password

                                </button>

                            </div>

                            <!-- Forgot Password -->
                            @if (Route::has('password.request'))

                            <div class="text-center mt-3">

                                <a class="text-warning font-weight-bold"
                                    href="{{ route('password.request') }}">

                                    Forgot Your Password?

                                </a>

                            </div>

                            @endif

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection