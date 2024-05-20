{{--  Product Categories --}}
@include('index.home')
<div class="container prod" style="padding-top:50px; padding-bottom:50px; ">
    <div class="row align-items-start row-cols-1 row-cols-md-3 g-4 mt-0">
        <div class="col-md-4">
            <div class="card h-100">
                <div>
                    <img src="{{ asset('images/banner-01.jpg.webp') }}" class="card-img-top" alt="...">
                </div>
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt-prod">Women</h4>
                    <a class="link" href="{{ route('shop') }}">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('images/banner-02.jpg.webp') }}" class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt-prod">Men</h4>
                    <a class="link" href="{{ route('shop') }}">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('images/banner-03.jpg.webp') }}" class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt-prod">Accessories </h4>
                    <a class="link" href="{{ route('shop') }}">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
