@include('index.home')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/slide-01.jpg.webp') }}" class="d-block w-100" alt="...">
            <div class="d-flex card-img-overlay  justify-content-center align-item-center flex-column float-right
        animate__animated animate__slideInDown animate__slideInDown animate__delay-0.5s mt-5"
                style="padding-left: 150px !important;">
                <span class="car-txt">
                    <h5 class="txt-1">Womens Collection 2024</h5>
                    <h6 class="txt-2"><b>New Seasons</b></h6>
                </span>
                <button type="button" class="btn btn-sm shadow-none responsive-button"
                    onclick="window.location='{{ route('shop') }}'">Shop Us</button>

            </div>
        </div>
        <div class="carousel-item ">
            <img src="{{ asset('images/slide-02.jpg.webp') }}" class="d-block w-100" alt="...">
            <div class="d-flex card-img-overlay  justify-content-center align-item-center flex-column float-right
        animate__animated animate__slideInDown animate__slideInUp animate__delay-0.5s mt-5"
                style="padding-left: 150px !important;">
                <span class="car-txt">
                    <h5 class="txt-1">Mens Collection 2024</h5>
                    <h6 class="txt-2"><b>New Arrivals</b></h6>
                </span>
                <button type="button" class="btn btn-sm shadow-none responsive-button"
                    onclick="window.location='{{ route('shop') }}'">Shop Us</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slide-03.jpg.webp') }}" class="d-block w-100" alt="...">
            <div class="d-flex card-img-overlay  justify-content-center align-item-center flex-column float-right
        animate__animated animate__slideInDown animate__slideInUp animate__delay-0.5s mt-5"
                style="padding-left: 150px !important;">
                <span class="car-txt">
                    <h5 class="txt-1">Mens Collection 2024</h5>
                    <h6 class="txt-2"><b>New Arrivals</b></h6>
                </span>
                <button type="button" class="btn btn-sm shadow-none responsive-button"
                    onclick="window.location='{{ route('shop') }}'">Shop Us</button>
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
