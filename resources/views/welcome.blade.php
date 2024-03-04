@include('index.home')
@include('index.navbar')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active mt-5">
            <img src="{{ asset('images/slide-01.jpg.webp') }}" class="d-block w-100" alt="...">
            <div class="d-flex card-img-overlay  justify-content-center align-item-center flex-column float-right
        animate__animated animate__slideInDown animate__slideInDown animate__delay-0.5s mt-5"
                style="padding-left: 150px !important;">
                <h5 class="txt-1">Womens Collection 2024</h5>
                <h6 class="txt-2"><b>New Seasons</b></h6>
                <button type="button" class="btn btn-sm shadow-none responsive-button">Shop Us</button>

            </div>
        </div>
        <div class="carousel-item mt-5">
            <img src="{{ asset('images/slide-02.jpg.webp') }}" class="d-block w-100" alt="...">
            <div class="d-flex card-img-overlay  justify-content-center align-item-center flex-column float-right
        animate__animated animate__slideInDown animate__slideInUp animate__delay-0.5s mt-5"
                style="padding-left: 150px !important;">
                <h5 class="txt-1">Mens Collection 2024</h5>
                <h6 class="txt-2"><b>New Arrivals</b></h6>
                <button type="button" class="btn btn-sm shadow-none responsive-button">Shop Us</button>
            </div>
        </div>
        <div class="carousel-item mt-5">
            <img src="{{ asset('images/slide-03.jpg.webp') }}" class="d-block w-100" alt="...">
            <div class="d-flex card-img-overlay  justify-content-center align-item-center flex-column float-right
        animate__animated animate__slideInDown animate__slideInUp animate__delay-0.5s mt-5"
                style="padding-left: 150px !important;">
                <h5 class="txt-1">Mens Collection 2024</h5>
                <h6 class="txt-2"><b>New Arrivals</b></h6>
                <button type="button" class="btn btn-sm shadow-none responsive-button">Shop Us</button>
            </div>
        </div>
        <div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <i class="fa fa-duotone fa-angle-left" style="font-size: xxx-large;"></i>

            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <i class="fa fa-duotone fa-angle-right" style="font-size: xxx-large;"></i>
            </button>
        </div>
    </div>

</div>

{{--  Product Categories --}}

<div class="container prod" style="padding-top:50px; padding-bottom:50px; ">
    <div class="row align-items-start row-cols-1 row-cols-md-3 g-4 mt-0">
        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('images/banner-01.jpg.webp') }}" class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Women</h4>
                    <a class="link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('images/banner-02.jpg.webp') }}" class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Men</h4>
                    <a class="link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('images/banner-03.jpg.webp') }}" class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Accessories </h4>
                    <a class="link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 50% Off --}}

<section class="shooping-cart" style="background-color: rgb(161, 201, 219);">
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mt-5">
                <h3 style="font-size: 100px; margin-bottom: 25px;  text-align-last: left;"> Up To 50%
                    Off
                </h3>
                <h4 style="font-size: 42px; line-height: 1.3;">Winter Sale </h4>
                <p style=" font-size: 23px;  margin-top: 0;margin-bottom: 1rem;">Him she'd let them sixth saw light
                </p>
            </div>
            <div class="col-6">
                <img src="{{ asset('images\cart.png') }} ">
            </div>
        </div>
    </div>
</section>

{{-- Isotopes --}}
<!-- Isotope menu -->
<section class="container-isto mb-0 !imporatnt">
    <div class="container_main">
        <h1 class=" d-flex justify-content-center mt-5" style="font-family: PlayfairDisplay-Bold;"><b>PRODUCT
                OVERVIEW</b></h1>
        <div class="container container_menu_iso">
            <div class="row">
                <div class="col-sm-12">
                    <div class="menu_iso" id="custom-filter">
                        <ul> <!-- Wrap menu items in a <ul> element -->
                            <li>
                                <a data-filter="*">All Products</a>
                            </li>
                            <li>
                                <a data-filter=".item1">Womens</a>
                            </li>
                            <li>
                                <a data-filter=".item2">Mens</a>
                            </li>
                            <li>
                                <a data-filter=".item3">Shoes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-3">

        <!-- Isotope Gallery -->
        <div class=container>
            <div class="container container_gallery_iso">
                <div class="row iso-container ">

                    <!-- item1=1blue|| item2=red || item3=pink -->

                    <!-- ----1---- -->

                    <div class="col-xs-6 col-sm-4 cent isotope-item item1">
                        <div class="img_iso blu1 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot card-iso bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                        To
                                        Cart</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header ">
                                                    <h5 class="modal-title " id="exampleModalLongTitle">Product
                                                        Details
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"
                                                        style="background-color: rgba(228, 146, 228, 0.5); border-radius: 10px;">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('images/product-01.jpg.webp') }}"
                                                        id="main">
                                                    <div id="thumbnails">
                                                        <img src="{{ asset('images/product-01.jpg.webp') }}">
                                                        <img src="https://source.unsplash.com/pV5ckb2HEVk/800x800">
                                                        <img src="{{ asset('images/product-01.jpg.webp') }}">

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn shadow-none"
                                                        data-dismiss="modal"
                                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(0, 0, 0); color:white">
                                                        Shop Now</button>

                                                    <button type="button" class="btn shadow-none"
                                                        data-dismiss="modal"
                                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(213, 80, 230); color:white">
                                                        <i class="fa fa-light fa-cart-shopping"
                                                            style="padding-right: 5px"></i>Add
                                                        To
                                                        Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 cent isotope-item item2">
                        <div class="img_iso red1 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 cent isotope-item item3">
                        <div class="img_iso pink1 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- -----2----- -->
                    <div class="col-xs-6 col-sm-4 cent isotope-item item2">
                        <div class="img_iso red2 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 cent isotope-item item1">
                        <div class="img_iso blu4 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 cent isotope-item item1">
                        <div class="img_iso blu2 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ----3--- -->

                    <div class="col-xs-6 col-sm-4 cent isotope-item item1">
                        <div class="img_iso blu3 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 cent isotope-item item1">
                        <div class="img_iso blu5 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 cent isotope-item item1">
                        <div class="img_iso blu6 card">
                            <div class="overlay">
                                <div class="text"> <a href="#">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12">
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

{{-- Free Shipping --}}
<section class="ship mt-5">
    <div class="row">
        <div class="col-md-3 col-sm-6 mt-5">
            <div class="text-center">
                <i class="fa fa-truck" style="color: rgb(152, 48, 48); font-size: 30px;"></i>
            </div>
            <h6 class="text-center mt-3">FREE SHIPPING</h6>
            <p class="text-center mt-1">Suffered Alteration in Some Form</p>
        </div>
        <div class="col-md-3 col-sm-6 mt-5">
            <div class="text-center">
                <i class="fa fa-money" style="color: rgb(152, 48, 48); font-size: 30px;"></i>
            </div>
            <h6 class="text-center mt-3">CASH ON DELIVERY</h6>
            <p class="text-center mt-1">The Internet Tend To Repeat</p>
        </div>
        <div class="col-md-3 col-sm-6 mt-5">
            <div class="text-center">
                <i class="fa fa-undo" style="color: rgb(152, 48, 48); font-size: 30px;"></i>
            </div>
            <h6 class="text-center mt-3">45 DAYS RETURN</h6>
            <p class="text-center mt-1">Making it Look Like Readable</p>
        </div>
        <div class="col-md-3 col-sm-6 mt-5">
            <div class="text-center">
                <i class="fa fa-clock-o" style="color: rgb(152, 48, 48); font-size: 30px;"></i>
            </div>
            <h6 class="text-center mt-3">OPENING ALL WEEK</h6>
            <p class="text-center mt-1">8AM - 09PM</p>
        </div>
    </div>
</section>


{{-- Best  Sellers --}}
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
                    <img src="{{ asset('images/p1.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sweater</h5>
                        <p class="card-text text-center" style="color: brown; font-size: 20px;"><b>Rs.1000</b></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="{{ asset('images/p2.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Coat</h5>
                        <p class="card-text text-center" style="color: brown; font-size: 20px;"><b>Rs.1500</b></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="{{ asset('images/p3.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sweat-Shirt</h5>
                        <p class="card-text text-center" style="color: brown; font-size: 20px;"><b>Rs.1080</b></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="{{ asset('images/p4.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Shoes</h5>
                        <p class="card-text text-center" style="color: brown; font-size: 20px;"><b>Rs.2500</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <div class="custom-nav owl-nav">
        <button class="custom-prev"><i class="fa fa-chevron-left" style="color: purple; "></i></button>
        <button class="custom-next"><i class="fa fa-chevron-right" style="color: purple;"></i></button>
    </div>
</section>



@include('footer.footer')
