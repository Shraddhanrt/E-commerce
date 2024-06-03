{{-- Isotopes --}}
@include('index.home')

<section class="container-isto mb-0 mr-5 ml-5!imporatnt">
    <div class="container_main">
        <h1 class=" d-flex justify-content-center mt-5" style="font-family: PlayfairDisplay-Bold;"><b>PRODUCT
                OVERVIEW</b></h1>

        <hr class="mt-3">
        <!-- Isotope Gallery -->
        <div class="container ">
            <div class="container container_gallery_iso">
                <div class="row iso-container">

                    @foreach ($products as $product)
                        @csrf
                        <div class="col-md-4 cent isotope-item item2 mt-5">
                            <div class="container img_iso blu1 card"
                                style=" background-image:url('{{ asset($product->image) }}')">
                                <div class="overlay">
                                    @php
                                        $inWishlist = $wishlists->contains('product_id', $product->id);
                                    @endphp
                                    <a href="{{ route('wishlist.store', ['id' => $product->id]) }}" class="wishlist-btn"
                                        type="button">
                                        @if ($inWishlist)
                                            <i class="fa fa-heart wishlist-icon" style="color: rgb(209, 0, 236);"></i>
                                        @else
                                            <i class="fa fa-heart wishlist-icon" style="color: white;"></i>
                                        @endif
                                    </a>
                                    <div class="product-name text">
                                        <a
                                            href="{{ route('product.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer iso-foot card-iso bg-transparent border-secondary">
                                <div class="row">
                                    <div class="pri col-md-5 col-12">
                                        Rs.{{ $product->cost }}
                                    </div>
                                    <div class="btn-cart col-md-7 col-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn shadow-none" data-toggle="modal"
                                            data-target="#exampleModalLong1"
                                            style="font-size: 11px; width: 100%; max-width: 12em; background-color:rgb(80, 72, 81); color:white">
                                            <a href="{{ route('cart.store', ['id' => $product->id]) }}">
                                                <i class="fa fa-light fa-cart-shopping"
                                                    style="padding-right: 5px"></i>Add To Cart
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
