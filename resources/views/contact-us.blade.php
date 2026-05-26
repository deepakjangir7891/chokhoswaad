@extends('layouts.app')
@section('content')
<section class="home-slider owl-carousel img">
    <div class="slider-item" style="background-image: url(images/masaala.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Contact Us</h1>
                    <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact Us</span></p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.7785659590336!2d75.38459447618654!3d28.636397975662604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3913a061fa5f6ad9%3A0x45be016c7bc5c005!2sMadina%20Market!5e0!3m2!1sen!2sin!4v1779782214067!5m2!1sen!2sin" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 appointment ftco-animate">
                <h3 class="mb-3">Contact Us</h3>
                <form action="#" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="d-me-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection