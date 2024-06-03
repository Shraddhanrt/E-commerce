<!-- resources/views/product/show.blade.php -->
@include('index.home')
@include('index.navbar')

<style>
    .container.mt-5 {
        padding-top: 5rem;
        padding-bottom: 5rem;
    }

    .img-fluid {
        border-radius: 0.5rem;
        height: 32em;
        width: 32em;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    p {
        font-size: 1.25rem;
        font-weight: 300;
    }

    h2 {
        font-size: 2rem;
        color: #28a745;
        margin-bottom: 1.5rem;
    }

    .btn-outline-secondary {
        margin-right: 1rem;
        border-color: #d100ec;
    }

    .btn-outline-secondary i {
        color: black;

    }

    .btn-outline-secondary:hover {
        background-color: #d100ec;
        color: #fff;
        border-color: #d100ec;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        margin-top: -6px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .fa-heart {
        margin-right: 0.5rem;
    }

    .fa-cart-shopping {
        margin-right: 0.5rem;
    }
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <h2>Rs. {{ $product->cost }}</h2>

            @php
                $inWishlist = $wishlists ? $wishlists->contains('product_id', $product->id) : false;
            @endphp


            <a href="{{ route('wishlist.store', ['id' => $product->id]) }}" class="btn btn-outline-secondary mb-2">
                @if ($inWishlist)
                    <i class="fa fa-heart"></i> In Wishlist
                @else
                    <i class="fa fa-heart"></i> Add to Wishlist
                @endif
            </a>

            <a href="{{ route('cart.store', ['id' => $product->id]) }}" class="btn btn-primary">
                <i class="fa fa-cart-shopping"></i> Add to Cart
            </a>
        </div>
    </div>
</div>
