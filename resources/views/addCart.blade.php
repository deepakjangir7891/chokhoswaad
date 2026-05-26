@extends('layouts.app')
@section('content')

<section class="home-slider owl-carousel img" style="background-image: url(web/images/images_1/banner_1.png);background-position-y:bottom ">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Cart</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="container my-5">
    <!-- मुख्य रो: यहाँ से background-color, border-radius और box-shadow हटा दिए गए हैं -->
    <div class="row no-gutters p-0" style="color: #FFFFFF;">

        <!-- बायाँ हिस्सा: इमेज सेक्शन -->
        <div class="col-lg-6 col-md-12 p-3">
            <!-- यहाँ भी इमेज के पीछे का गहरा बॉक्स हटाकर इसे पूरी तरह ट्रांसपेरेंट कर दिया गया है -->
            <div class="text-center mb-3" style="min-height: 350px; display: flex; align-items: center; justify-content: center;">
                <!-- मुख्य बड़ी इमेज -->
                <img id="mainProductImg" src="{{asset('web/images/images_1/haldi_powder.png')}}" alt="Chokho Suwad" class="img-fluid" style="max-height: 400px; object-fit: contain;">
            </div>

            <!-- थंबनेल्स: बिना बैकग्राउंड बॉक्स के साफ ग्रिड -->
            <div class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                <img src="{{asset('web/images/images_1/dhaniya_powder.png')}}" data-large="{{asset('web/images/images_1/dhaniya_powder.png')}}" alt="Thumb 1" class="img-thumbnail mr-2 mb-2 custom-thumb active" style="width: 70px; height: 70px; cursor: pointer; border: 2px solid #D4AF37; background: transparent;">
                <img src="{{asset('web/images/images_1/garam_masala.png')}}" data-large="{{asset('web/images/images_1/garam_masala.png')}}" alt="Thumb 2" class="img-thumbnail mr-2 mb-2 custom-thumb" style="width: 70px; height: 70px; cursor: pointer; border: 2px solid transparent; background: transparent;">
                <img src="{{asset('web/images/images_1/dhaniya_powder.png')}}" data-large="{{asset('web/images/images_1/dhaniya_powder.png')}}" alt="Thumb 3" class="img-thumbnail mr-2 mb-2 custom-thumb" style="width: 70px; height: 70px; cursor: pointer; border: 2px solid transparent; background: transparent;">
                <img src="{{asset('web/images/images_1/garam_masala.png')}}" data-large="{{asset('web/images/images_1/garam_masala.png')}}" alt="Thumb 4" class="img-thumbnail mr-2 mb-2 custom-thumb" style="width: 70px; height: 70px; cursor: pointer; border: 2px solid transparent; background: transparent;">
            </div>
        </div>

        <!-- दायाँ हिस्सा: टेक्स्ट और बटन्स -->
        <div class="col-lg-6 col-md-12 p-4 d-flex flex-column justify-content-center">
            <span class="d-block mb-1 font-weight-bold" style="color: #D4AF37; letter-spacing: 2px; font-size: 0.9rem;">CHOKHO SUWAD</span>
            <h1 class="h2 font-weight-bold mb-3" style="line-height: 1.3;">Premium Masala (6 Flavour Combo), 600g</h1>

            <!-- प्राइसिंग रो -->
            <div class="d-flex align-items-center mb-3">
                <span class="mr-3" style="text-decoration: line-through; color: #BC9B8B; font-size: 1.1rem;">Rs. 1,200.00</span>
                <span class="mr-3 font-weight-bold" style="font-size: 2rem; color: #D4AF37;">Rs. 699.00</span>
                <span class="badge font-weight-bold px-2 py-1" style="background-color: #E67E22; color: #fff; font-size: 0.9rem;">45% OFF</span>
            </div>

            <p class="small mb-4" style="color: #BC9B8B;">MRP (Incl. of all taxes) Free shipping on all orders</p>

            <!-- रेटिंग -->
            <div class="mb-4">
                <span style="color: #FFC107; font-size: 1.1rem;">⭐⭐⭐⭐⭐</span>
                <span class="small ml-2" style="color: #BC9B8B;">1570 reviews</span>
            </div>

            <!-- फ़्लेवर वैरिएंट बटन -->
            <div class="mb-4">
                <p class="small font-weight-bold mb-2" style="color: #BC9B8B; letter-spacing: 1px;">FLAVOUR</p>
                <button class="btn font-weight-bold" style="border: 2px solid #D4AF37; background-color: #D4AF37; color: #2B160E; padding: 8px 24px; border-radius: 4px;">6 Flavour Combo</button>
            </div>

            <!-- क्वांटिटी सिलेक्टर -->
            <div class="mb-4">
                <p class="small font-weight-bold mb-2" style="color: #BC9B8B; letter-spacing: 1px;">QUANTITY</p>
                <div class="d-flex align-items-center rounded" style="background-color: #2B160E; width: 130px; overflow: hidden; border: 1px solid #4A2B1F;">
                    <button class="btn text-white btn-minus border-0 shadow-none" style="width: 40px; height: 40px; font-size: 1.2rem; background: transparent;">-</button>
                    <input type="number" id="productQty" value="1" min="1" class="form-control text-center text-white border-0 font-weight-bold p-0" style="background: transparent; box-shadow: none;" readonly>
                    <button class="btn text-white btn-plus border-0 shadow-none" style="width: 40px; height: 40px; font-size: 1.2rem; background: transparent;">+</button>
                </div>
            </div>

            <!-- एक्शन बटन्स (पूरी चौड़ाई में) -->
            <div class="w-100 mt-2">
                <button class="btn btn-block font-weight-bold py-3 mb-2" style="background: transparent; border: 2px solid #FFFFFF; color: #FFFFFF; border-radius: 4px; transition: 0.3s;" onmouseover="this.style.backgroundColor='#FFFFFF'; this.style.color='#2B160E'" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#FFFFFF'">ADD TO CART</button>
                <button class="btn btn-block font-weight-bold py-3" style="background-color: #D4AF37; color: #2B160E; border: none; border-radius: 4px; transition: 0.3s;" onmouseover="this.style.backgroundColor='#B5942E'" onmouseout="this.style.backgroundColor='#D4AF37'">BUY NOW</button>
            </div>
        </div>

    </div>
</div>

<style>
    /* गैप यूटिलिटी अगर आपके Bootstrap वर्जन में काम न कर रही हो */
    .thumbnail-grid {
        margin-top: 10px;
    }

    .custom-thumb {
        margin-right: 8px;
        /* थंबनेल्स के बीच सही दूरी के लिए */
    }

    .custom-thumb:last-child {
        margin-right: 0;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // थंबनेल और मुख्य इमेज के एलिमेंट्स ढूंढें
        var thumbnails = document.querySelectorAll('.custom-thumb');
        var mainImage = document.getElementById('mainProductImg');

        thumbnails.forEach(function(thumb) {
            thumb.addEventListener('click', function() {
                // 1. सभी थंबनेल्स की बॉर्डर रीसेट करें
                thumbnails.forEach(function(t) {
                    t.style.borderColor = 'transparent';
                });

                // 2. सिर्फ क्लिक किए गए थंबनेल पर गोल्डन बॉर्डर लगाएं
                this.style.borderColor = '#D4AF37';

                // 3. बड़ी इमेज का सोर्स (src) बदलें
                var newImgSrc = this.getAttribute('data-large');
                if (mainImage && newImgSrc) {
                    mainImage.setAttribute('src', newImgSrc);

                    // 4. मुख्य इमेज की तरफ स्मूथ स्क्रॉल करें
                    mainImage.scrollIntoView({
                        behavior: 'smooth', // स्क्रॉल एकदम आराम से (smooth) होगा
                        block: 'center' // बड़ी इमेज स्क्रीन के बीचों-बीच दिखेगी
                    });
                }
            });
        });

        // प्लस (+) और माइनस (-) बटन की फंक्शनैलिटी (सुरक्षित मोड)
        var plusBtn = document.querySelector('.btn-plus');
        var minusBtn = document.querySelector('.btn-minus');
        var qtyInput = document.getElementById('productQty');

        if (plusBtn && qtyInput) {
            plusBtn.addEventListener('click', function() {
                var currentVal = parseInt(qtyInput.value) || 1;
                qtyInput.value = currentVal + 1;
            });
        }

        if (minusBtn && qtyInput) {
            minusBtn.addEventListener('click', function() {
                var currentVal = parseInt(qtyInput.value) || 1;
                if (currentVal > 1) {
                    qtyInput.value = currentVal - 1;
                }
            });
        }
    });
</script>




@endsection