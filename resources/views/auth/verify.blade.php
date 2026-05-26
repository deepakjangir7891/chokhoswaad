@extends('layouts.app')

@section('content')

<section class="owl-carousel img owl-loaded owl-drag"
    style="background-image: url({{ asset('web/images/bg_3.jpg') }});">

    <div class="slider-item"
        style="background-image: url({{ asset('web/images/bg_3.jpg') }});">

        <div class="overlay"></div>

        <div class="container">

            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-8 col-lg-6 ftco-animate">

                    <div class="card border-0 shadow-lg rounded-lg p-5 text-center"
                        style="background: rgba(0,0,0,0.78);">

                        <!-- Logo -->
                        <div class="mb-4">

                            <img src="{{ asset('web/images/images_1/logo.png') }}"
                                width="110">

                        </div>

                        <!-- Heading -->
                        <h2 class="text-white font-weight-bold mb-3">

                            Verify Your Email Address

                        </h2>

                        <p class="text-light mb-4">

                            Please check your email inbox for the verification link 📩

                        </p>

                        <!-- Success Message -->
                        @if (session('resent'))

                        <div class="alert alert-success">

                            A fresh verification link has been sent to your email address.

                        </div>

                        @endif

                        <!-- Info -->
                        <div class="text-light mb-4">

                            Before proceeding, please verify your email address.
                            <br>

                            If you did not receive the email,
                            click below to request another verification link.

                        </div>

                        <!-- Resend Form -->
                        <form method="POST"
                            action="{{ route('verification.resend') }}">

                            @csrf

                            <button type="submit"
                                class="btn btn-primary btn-block py-3">

                                Resend Verification Email

                            </button>

                        </form>

                        <!-- Login -->
                        <div class="mt-4">

                            <a href="{{ route('login') }}"
                                class="text-warning font-weight-bold">

                                Back To Login

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection