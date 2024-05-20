{{-- Best  Sellers --}}
@include('index.home')
<section class="owl-main mt-0 mb-5">
    <h1 class="text-center mt-5"
        style="color: rgb(32, 30, 33); margin-top: 10px; padding-top: 30px; font-family: PlayfairDisplay-Bold;">
        <b>Best Seller</b>
    </h1>
    <hr>
    <div class="owl">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card">
                    <img src="{{ asset('images/p1.webp') }}" class="card-img-top mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sweater</h5>
                        <p class="card-text text-center" style="color: brown; font-size: 20px;"><b>Rs.1000</b></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="{{ asset('images/p2.webp') }}" class="card-img-top mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Coat</h5>
                        <p class="card-text text-center" style="color: brown; font-size: 20px;"><b>Rs.1500</b></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="{{ asset('images/p3.webp') }}" class="card-img-top mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sweat-Shirt</h5>
                        <p class="card-text text-center" style="color: brown; font-size: 20px;"><b>Rs.1080</b></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="{{ asset('images/p4.webp') }}" class="card-img-top mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Shoes</h5>
                        <p class="card-text text-center" style="color: brown; font-size: 20px;"><b>Rs.2500</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <div class="custom-nav owl-nav mt-4 mb-4">
        <span>
            <button class="custom-prev">
                <i class="fas fa-angle-left"></i>
            </button>
        </span>
        <span style="padding-left: 2em">
            <button class="custom-next">
                <i class="fas fa-angle-right"></i>
            </button>
        </span>
    </div>
</section>
