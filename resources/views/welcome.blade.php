@extends('layouts.app')
@section('content')
<section class="home-slider owl-carousel img">
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <!-- <div class="col-md-6 col-sm-12 ftco-animate">
                    <span class="subheading">Delicious</span>
                    <h1 class="mb-4">Italian Cuizine</h1>
                    <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                </div> -->
                <div class="col-md-12 ftco-animate">
                    <img src="{{asset('web/images/images_1/banner_1.png')}}" class="img-fluid" alt="" style="height: 750px;">
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 ftco-animate">
                    <img src="{{asset('web/images/images_1/banner_2.png')}}" class="img-fluid" alt="" style="height: 750px;">
                </div>

            </div>
        </div>
    </div>
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 ftco-animate">
                    <img src="{{asset('web/images/images_1/banner_3.png')}}" class="img-fluid" alt="" style="height: 750px;">
                </div>

            </div>
        </div>
    </div>


</section>

<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>+91 968 087 7578</h3>
                            <p>A small river named Duden flows</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Rajgarh, Churu</h3>
                            <p>Rajasthan 331023</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Open Monday-Friday</h3>
                            <p>8:00am - 9:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                <ul class="social-icon">
                    <li class="ftco-animate"><a href="https://www.twitter.com/@chokhoswaad01"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.facebook.com/@chokhoswaad01"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.youtube.com/@ChokhoSwaad"><span class="icon-youtube"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(web/images/images_1/section_2.png);background-size: contain;"></div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> A Restaurant</h2>
        </div>
        <div>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Services</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Healthy Foods</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-bicycle"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Fastest Delivery</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
                    <div class="media-body">
                        <h3 class="heading">Original Recipes</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Hot Masala</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row no-gutters d-flex">
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img" style="background-image: url(web/images/images_1/haldi_powder.png);"></a>
                    <div class="text p-4">
                        <h3>Haldi Powder</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                        <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img" style="background-image: url(web/images/images_1/dhaniya_powder.png);"></a>
                    <div class="text p-4">
                        <h3>Dhaniya Powder</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img" style="background-image: url(web/images/images_1/garam_masala.png);"></a>
                    <div class="text p-4">
                        <h3>Garam Masala</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last" style="background-image: url(web/images/images_1/dhaniya_powder.png);"></a>
                    <div class="text p-4">
                        <h3>Dhaniya Powder</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                        <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last" style="background-image: url(web/images/images_1/garam_masala.png);"></a>
                    <div class="text p-4">
                        <h3>Garam Masala</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last" style="background-image: url(web/images/images_1/haldi_powder.png);"></a>
                    <div class="text p-4">
                        <h3>Haldi Powder</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Our Menu Pricing</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(web/images/images_1/mango.png);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Mango Pickel</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(web/images/images_1/green_chilli.png);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Green Chilli Pickel</span></h3>
                            <span class="price">$29.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(web/images/images_1/red_chilli.png);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Red Chilli Pickel</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(web/images/images_1/mango.png);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Mango Pickel</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(web/images/images_1/green_chilli.png);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Green Chilli Pickel</span></h3>
                            <span class="price">$29.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(web/images/images_1/red_chilli.png);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Red Chilli Pickel</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- <section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(web/images/gallery-1.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(web/images/gallery-2.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(web/images/gallery-3.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(web/images/gallery-4.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->


<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(web/images/images_1/masaala.png);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-pizza-1"></span></div>
                                <strong class="number" data-number="100">0</strong>
                                <span>Pizza Branches</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-medal"></span></div>
                                <strong class="number" data-number="85">0</strong>
                                <span>Number of Awards</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-laugh"></span></div>
                                <strong class="number" data-number="10567">0</strong>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-chef"></span></div>
                                <strong class="number" data-number="900">0</strong>
                                <span>Staff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-menu">
    <div class="container-fluid">
        <div class="row d-md-flex">
            <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(web/images/images_1/banner_2.png);">
            </div>
            <div class="col-lg-8 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pickel</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Papad</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Masala</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/images_1/mango.png);"></a>
                                            <div class="text">
                                                <h3><a href="#">Mango Pickel</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/images_1/green_chilli.png);"></a>
                                            <div class="text">
                                                <h3><a href="#">Green Chilli</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/images_1/red_chilli.png);"></a>
                                            <div class="text">
                                                <h3><a href="#">Red Chilli</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/drink-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Lemonade Juice</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/drink-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Pineapple Juice</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/drink-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Soda Drinks</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/burger-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/burger-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/burger-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/pasta-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/pasta-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(web/images/pasta-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Recent from blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('web/images/images_1/masala_powder.png');">
                    </a>
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><a href="#">Sept 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">The Soul of Every Dish</a></h3>
                        <p>Bring home the authentic taste of Rajasthan with our handpicked spices — from fiery red chilli to earthy coriander and golden turmeric. Each blend captures the royal aroma and flavor that turns every meal into a celebration.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('web/images/images_1/papad.png');">
                    </a>
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><a href="#">Sept 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Crispy Tradition on Every Plate</a></h3>
                        <p>Crisp, golden, and full of flavor — our papads are crafted with love and tradition. Enjoy them roasted or fried, paired with chutneys or pickles, just like the Rajasthani way of adding crunch to every feast.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('web/images/images_1/pickel.png');">
                    </a>
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><a href="#">Sept 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Tangy Tales of Rajasthan</a></h3>
                        <p>From spicy mango to zesty lemon, our pickles are steeped in age-old recipes and sun-kissed perfection. Each jar bursts with bold flavors that remind you of home, heritage, and heart.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <div id="map"></div>
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
</section> -->
@endsection