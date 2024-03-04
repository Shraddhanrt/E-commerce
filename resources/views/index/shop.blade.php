@include('index.home')
@include('index.navbar')

<div class="container shop-main">
    <div class="row">
        <div class=" col-md-2 filters filter-button-group shop-ex" style="margin-top: 9em !important">
            <ul>
                <h4>
                    <li class="active" data-filter="*">All</li>
                    <hr style="color:black; width:100%">
                    <li data-filter=".women">Women</li>
                    <hr style="color:black; width:100%">
                    <li data-filter=".men">Men</li>
                    <hr style="color:black; width:100%">
                    <li data-filter=".shoes">Shoes</li>
                    <hr style="color:black; width:100%">
                </h4>
            </ul>
        </div>

        <div class=" col-md-10 content grid shop-ex" style="margin-top: 7em  !important">
            <div class="  single-content  women grid-item">
                <img class="p2" src=" {{ asset('images\product-01.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
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
                                            <img src="{{ asset('images/product-01.jpg.webp') }}" id="main">
                                            <div id="thumbnails">
                                                <img src="{{ asset('images/product-01.jpg.webp') }}">
                                                <img src="https://source.unsplash.com/pV5ckb2HEVk/800x800">
                                                <img src="{{ asset('images/product-01.jpg.webp') }}">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn shadow-none" data-dismiss="modal"
                                                style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(0, 0, 0); color:white">
                                                Shop Now</button>

                                            <button type="button" class="btn shadow-none" data-dismiss="modal"
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

            <div class="  single-content  women grid-item">
                <img class="p2" src=" {{ asset('images\product-02.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <button type="button" class="btn shadow-none"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content  women grid-item">
                <img class="p2" src=" {{ asset('images\product-04.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <button type="button" class="btn shadow-none"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content  women grid-item">
                <img class="p2" src=" {{ asset('images\product-05.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <button type="button" class="btn shadow-none"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content  women grid-item">
                <img class="p2" src=" {{ asset('images\product-07.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <button type="button" class="btn shadow-none"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content men grid-item">
                <img class="p2"src="{{ asset('images\product-03.jpg.webp') }}  ">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <button type="button" class="btn shadow-none"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content men grid-item">
                <img class="p2"src="{{ asset('images\product-11.jpg.webp') }}  ">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <button type="button" class="btn shadow-none"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content shoes grid-item">
                <img class="p2" src="{{ asset('images\product-09.jpg.webp') }} ">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <button type="button" class="btn shadow-none"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@include('footer.footer')
