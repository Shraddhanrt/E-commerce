@include('index.home')
@include('index.navbar')

<section>
    <img src="{{ asset('images\background1.jpg') }}" class="w-100" alt="Image" style="height: 300px;">
    <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
        <h4 class="txt" style="color:white; font-family: Poppins-Bold;font-size: 50px;line-height: 1.1; ">
            Blog</h4>
    </div>
</section>

<section class="container container-blog mt-5">
    <div class="row">
        <div class="col-lg-9">
            <!-- Blog Post 1 -->
            <div class=" mb-5">
                <img src="{{ asset('images\blog-01.jpg') }}" class="w-100 mb-3" alt="Blog Image">

                <h1 class="fs-4 mb-3">8 Inspiring Ways to Wear Dresses in the Winter</h1>
                <p class="mb-3">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius.</p>
                <div class="d-flex justify-content-between">
                    <div>
                        <span>By Admin</span>
                        <span>StreetStyle, Fashion, Couple</span>
                    </div>
                    <div class="custom-div">
                        <a href="{{ route('details') }}" class="fea-i text-decoration-none">CONTINUE
                            READING.. <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="mb-5">
                <img src="{{ asset('images\blog-05.jpg.webp') }}" class="w-100 mb-3" alt="Blog Image">

                <h1 class="fs-4 mb-3">The Great Big List of Men’s Gifts for the Holidays</h1>
                <p class="mb-3">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius.</p>
                <div class="d-flex justify-content-between">
                    <div>
                        <span>By Admin</span>
                        <span>StreetStyle, Fashion, Couple</span>
                    </div>
                    <div>
                        <a href="#" class="text-decoration-none">CONTINUE READING.. <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- Search Form -->
            <form class="mb-4">
                <div class="input-group">
                    <input type="search" class="form-control shadow-none" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success shadow-none" type="submit">
                        <i class="fa fa-search "></i>
                    </button>
                </div>
            </form>

            <!-- Categories -->
            <h6 class="text-uppercase mb-4 font-weight-bold">CATEGORIES</h6>
            <hr>
            <div class="mb-4">
                <a href="#" class="text-decoration-none d-block mb-2">Fashion</a>
                <hr>
                <a href="#" class="text-decoration-none d-block mb-2">Beauty</a>
                <hr>
                <a href="#" class="text-decoration-none d-block mb-2">Street Style</a>
                <hr>
                <a href="#" class="text-decoration-none d-block mb-2">Life Style</a>
            </div>

            <!-- Recent Products -->
            <h6 class="text-uppercase mb-4 font-weight-bold">RECENT PRODUCTS</h6>
            <div class="mb-4">
                <!-- First Recent Product -->
                <div class="row g-0 mb-2">
                    <div class="col-md-4">
                        <img src="{{ asset('images\product-min-01.jpg.webp') }}" class="w-100" alt="Product Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="#" class="card-text">White Shirt With Pleat Details</a>
                            <p class="card-text"><small class="text-muted">Rs 2580</small></p>
                        </div>
                    </div>
                </div>
                <!-- Second Recent Product -->
                <!-- Additional Recent Products... -->
                <div class="row g-0 mb-2">
                    <div class="col-md-4">
                        <img src="{{ asset('images\product-min-02.jpg.webp') }}" class="w-100" alt="Product Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="#" class="card-text">White Shirt With Pleat Details</a>
                            <p class="card-text"><small class="text-muted">Rs 2580</small></p>
                        </div>
                    </div>
                </div>
                <!-- Third Recent Product -->
                <div class="row g-0 mb-2">
                    <div class="col-md-4">
                        <img src="{{ asset('images\product-min-03.jpg.webp') }}" class="w-100" alt="Product Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="#" class="card-text">White Shirt With Pleat Details</a>
                            <p class="card-text"><small class="text-muted">Rs 2580</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tags -->
            <div class="tags mt-5">
                <h3><b>Tags</b></h3>
                <div class="mt-3">
                    <span>
                        <button type="button" class="btn btn-outline-secondary">Fashion</button>
                    </span>
                    <span>
                        <button type="button" class="btn btn-outline-secondary">LifeStyle</button>
                    </span>
                    <span>
                        <button type="button" class="btn btn-outline-secondary">Denim</button>
                    </span>
                    <span>
                        <button type="button" class="btn btn-outline-secondary">Streetstyle</button>
                    </span>
                    <span>
                        <button type="button" class="btn btn-outline-secondary">Crafts</button>
                    </span>
                </div>
            </div>
        </div>

    </div>

</section>

@include('footer.footer')
