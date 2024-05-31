@include('index.navbar')
{{-- <div class="container shop-main">
    <div class="row">
        <div class="col-md-2 filters filter-button-group shop-ex" style="margin-top: 9em !important">
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


        <div class="col-md-10 content grid shop-ex" style="margin-top: 7em !important">
            <div class="single-content women grid-item col-lg-4 col-md-6 col-sm-6 col-12">
                <img class="p2 img-fluid" src="{{ asset('images\product-01.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong1"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart</button>
                            <!-- Modal -->


                        </div>
                    </div>
                </div>
            </div>

            <div class="  single-content  women grid-item col-lg-4 col-md-6 col-sm-6 col-12">
                <img class="p2" src=" {{ asset('images\product-02.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong2"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart</button>
                            <!-- Modal -->



                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content  women grid-item col-lg-4 col-md-6 col-sm-6 col-12">
                <img class="p2" src=" {{ asset('images\product-04.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong3"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart</button>
                            <!-- Modal -->



                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content  women grid-item col-lg-4 col-md-6 col-sm-6 col-12">
                <img class="p2" src=" {{ asset('images\product-05.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong4"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart</button>
                            <!-- Modal -->



                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content  women grid-item col-lg-4 col-md-6 col-sm-6 col-12">
                <img class="p2" src=" {{ asset('images\product-07.jpg.webp') }}">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong5"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart</button>
                            <!-- Modal -->



                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content men grid-item col-lg-4 col-md-6 col-sm-6 col-12">
                <img class="p2"src="{{ asset('images\product-03.jpg.webp') }}  ">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong6"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart</button>
                            <!-- Modal -->


                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content men grid-item col-lg-4 col-md-6 col-sm-6 col-12">
                <img class="p2"src="{{ asset('images\product-11.jpg.webp') }}  ">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong7"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart</button>
                            <!-- Modal -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content shoes grid-item col-lg-4 col-md-6 col-sm-6 col-12">
                <img class="p2" src="{{ asset('images\product-09.jpg.webp') }} ">
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            $50.00
                        </div>
                        <div class="col-md-7 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  shadow-none" data-toggle="modal"
                                data-target="#exampleModalLong8"
                                style="font-size: 11px; width: 10em; background-color:rgb(80, 72, 81); color:white">
                                <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                To
                                Cart</button>
                            <!-- Modal -->

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div> --}}

{{-- <section id="Projects">
    <div class= "container shop-container">
        <div class="row">
          
            <div class="col-md-2 items-links">
                <span class="item-link menu-active" data-name="all">All </span>
                <span class="item-link"data-name="men">Men </span>
                <span class="item-link"data-name="women">Women </span>
                <span class="item-link"data-name="shoes">Shoes </span>
            </div>
      
            <div class=" col-md-10 gallery shop-gallery">
                <div class="shop-img " data-name="men">
                    <img src="{{ asset('images\product-11.jpg.webp') }}" alt="men">
                    <div class="footer bg-transparent border-secondary mb-2 mt-2">
                        <div class="row mt-2">
                            <div class="rs col-md-5 col-12">
                                $50.00
                            </div>
                            <div class="col-md-7 col-12">
                              
                                <button type="button" class="btn  shadow-none" data-toggle="modal"
                                    data-target="#exampleModalLong1">
                                    <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                    To
                                    Cart</button>
                          
                                

                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-img"data-name="women">
                    <img src="{{ asset('images\product-01.jpg.webp') }}" alt="men">
                    <div class="footer bg-transparent border-secondary mb-2 mt-2">
                        <div class="row mt-2">
                            <div class="rs col-md-5 col-12">
                                $50.00
                            </div>
                            <div class="col-md-7 col-12">
                        
                                <button type="button" class="btn  shadow-none" data-toggle="modal"
                                    data-target="#exampleModalLong1">
                                    <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                    To
                                    Cart</button>
                           
                            </div>

                        </div>
                    </div>
                </div>
                <div class="shop-img"data-name="women">
                    <img src="{{ asset('images\product-02.jpg.webp') }}" alt="men">
                    <div class="footer bg-transparent border-secondary mb-2 mt-2">
                        <div class="row mt-2">
                            <div class="rs col-md-5 col-12">
                                $50.00
                            </div>
                            <div class="col-md-7 col-12">
                       
                                <button type="button" class="btn  shadow-none" data-toggle="modal"
                                    data-target="#exampleModalLong1">
                                    <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                    To
                                    Cart</button>
                          
                            </div>

                        </div>
                    </div>
                </div>
                <div class="shop-img" data-name="men">
                    <img src="{{ asset('images\product-03.jpg.webp') }}" alt="men">
                    <div class="footer bg-transparent border-secondary mb-2 mt-2">
                        <div class="row mt-2">
                            <div class="rs col-md-5 col-12">
                                $50.00
                            </div>
                            <div class="col-md-7 col-12">
                           
                                <button type="button" class="btn  shadow-none" data-toggle="modal"
                                    data-target="#exampleModalLong1">
                                    <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                    To
                                    Cart</button>
                            
                            </div>

                        </div>
                    </div>
                </div>

                <div class="shop-img"data-name="women">
                    <img src="{{ asset('images\product-04.jpg.webp') }}" alt="men">
                    <div class="footer bg-transparent border-secondary mb-2 mt-2">
                        <div class="row mt-2">
                            <div class="rs col-md-5 col-12">
                                $50.00
                            </div>
                            <div class="col-md-7 col-12">
                                
                                <button type="button" class="btn  shadow-none" data-toggle="modal"
                                    data-target="#exampleModalLong1">
                                    <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                    To
                                    Cart</button>
                            
                            </div>

                        </div>
                    </div>
                </div>
                <div class="shop-img"data-name="women">
                    <img src="{{ asset('images\product-05.jpg.webp') }}" alt="men">
                    <div class="footer bg-transparent border-secondary mb-2 mt-2">
                        <div class="row mt-2">
                            <div class="rs col-md-5 col-12">
                                $50.00
                            </div>
                            <div class="col-md-7 col-12">
                                
                                <button type="button" class="btn  shadow-none" data-toggle="modal"
                                    data-target="#exampleModalLong1">
                                    <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                    To
                                    Cart</button>
                                <!-- Modal -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="shop-img" data-name="women">
                    <img src="{{ asset('images\product-07.jpg.webp') }}" alt="men">
                    <div class="footer bg-transparent border-secondary mb-2 mt-2">
                        <div class="row mt-2">
                            <div class="rs col-md-5 col-12">
                                $50.00
                            </div>
                            <div class="col-md-7 col-12">
                            
                                <button type="button" class="btn  shadow-none" data-toggle="modal"
                                    data-target="#exampleModalLong1">
                                    <i class="fa fa-light fa-cart-shopping" style="padding-right: 5px"></i>Add
                                    To
                                    Cart</button>
                            
                            </div>
                        </div>

                    </div>
                </div>
                <div class="shop-img" data-name="shoes">
                    <img src="{{ asset('images\product-09.jpg.webp') }}" alt="men">
                    <div class="footer bg-transparent border-secondary mb-2 mt-2">
                        <div class="row mt-2">
                            <div class="rs col-md-5 col-12">
                                $50.00
                            </div>
                            <div class="col-md-7 col-12">
                                
                                <button type="button" class="btn  shadow-none" data-toggle="modal"
                                    data-target="#exampleModalLong1">
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
</section> --}}
<div style="margin-top: 100px">
    @include('index.isotopes')
</div>
@include('footer.footer')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        
        $('.item-link').on('click', function() {
            var filter = $(this).data('name'); 
            if (filter === 'all') {
                $('.shop-img').show(); 
            } else {
                $('.shop-img').hide(); 
                $('.shop-img[data-name="' + filter + '"]')
                    .show(); 
            }
          
            $('.item-link').removeClass('menu-active');
            $(this).addClass('menu-active');
        });
    });
</script> --}}
