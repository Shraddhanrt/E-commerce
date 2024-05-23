{{-- Isotopes --}}
@include('index.home')
<section class="container-isto mb-0 mr-5 ml-5!imporatnt">
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
        <div class="container ">
            <div class="container container_gallery_iso">
                <div class="row iso-container">
                    <!-- item1=1blue|| item2=red || item3=pink -->
                    <!-- ----1---- -->

                    <div class="col-md-4 cent isotope-item item1 mt-5">
                        <div class="container img_iso blu1 card">
                            <div class="overlay">
                                <div class="text">
                                    <a href="{{ route('shop') }}">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot card-iso bg-transparent border-secondary">
                            <div class="row">
                                <div class=" pri col-md-5 col-12">
                                    $50.00
                                </div>
                                <div class="btn-cart col-md-7 col-12">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong1"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                    </button>
                                    <!-- Modal -->
                                    {{-- <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Product Details
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"
                                                        style="background-color: rgba(228, 146, 228, 0.5); border-radius: 10px;">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('images/product-01.jpg.webp') }}"
                                                        class="img-fluid" id="main">
                                                    <div id="thumbnails">
                                                        <img src="{{ asset('images/product-01.jpg.webp') }}"
                                                            class="img-fluid">
                                                        <img src="https://source.unsplash.com/pV5ckb2HEVk/800x800"
                                                            class="img-fluid">
                                                        <img src="{{ asset('images/product-01.jpg.webp') }}"
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn shadow-none" data-dismiss="modal"
                                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(0, 0, 0); color:white">
                                                        Shop Now
                                                    </button>
                                                    <button type="button" class="btn shadow-none" data-dismiss="modal"
                                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(213, 80, 230); color:white">
                                                        <i class="fa fa-light fa-cart-shopping"
                                                            style="padding-right: 5px"></i>Add To Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cent isotope-item item2 mt-5">
                        <div class="container img_iso red1 card">
                            <div class="overlay">
                                <div class="text"> <a href="{{ route('shop') }}">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12 pri">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12 btn-cart">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn shadow-none"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color: rgb(80, 72, 81); color: white;"
                                        onclick="location.href='/product.details'">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add To
                                        Cart
                                </button>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 cent isotope-item item3 mt-5">
                        <div class="container img_iso pink1 card">
                            <div class="overlay">
                                <div class="text"> <a href="{{ route('shop') }}">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12 pri">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12 btn-cart">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong3"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                        To
                                        Cart</button>
                                    <!-- Modal -->


                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- -----2----- -->
                    <div class="col-xs-12 col-sm-6 col-md-4 cent isotope-item item2 mt-5">
                        <div class=" container img_iso red2 card">
                            <div class="overlay">
                                <div class="text"> <a href="{{ route('shop') }}">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12 pri">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12 btn-cart">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong4"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                        To
                                        Cart</button>
                                    <!-- Modal -->



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 cent isotope-item item1 mt-5">
                        <div class=" container img_iso blu4 card">
                            <div class="overlay">
                                <div class="text"> <a href="{{ route('shop') }}">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12 pri">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12 btn-cart">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong5"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                        To
                                        Cart</button>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 cent isotope-item item1 mt-5">
                        <div class=" container img_iso blu2 card">
                            <div class="overlay">
                                <div class="text"> <a href="{{ route('shop') }}">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12 pri">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12 btn-cart">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong5"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                        To
                                        Cart</button>


                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- ----3--- -->

                    <div class="col-xs-12 col-sm-6 col-md-4 cent isotope-item item1">
                        <div class=" container img_iso blu3 card ">
                            <div class="overlay">
                                <div class="text"> <a href="{{ route('shop') }}">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12 pri">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12 btn-cart">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong7"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                        To
                                        Cart</button>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 cent isotope-item item1">
                        <div class=" container img_iso blu5 card">
                            <div class="overlay">
                                <div class="text"> <a href="{{ route('shop') }}">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12 pri">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12 btn-cart">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong8"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                        To
                                        Cart</button>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 cent isotope-item item1">
                        <div class="container img_iso blu6 card">
                            <div class="overlay">
                                <div class="text"> <a href="{{ route('shop') }}">Quick View </a></div>
                            </div>
                        </div>
                        <div class="card-footer iso-foot bg-transparent border-secondary">
                            <div class="row">
                                <div class="col-md-5 col-12 pri">
                                    $50.00
                                </div>
                                <div class="col-md-7 col-12 btn-cart">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn  shadow-none" data-toggle="modal"
                                        data-target="#exampleModalLong9"
                                        style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                        <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
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
</section>
