@include('index.home')
@include('index.navbar')

<section class="container container-blog" style="margin-top:100px;">
    <div class="row">
        <div class="col-lg-9">
            <div style="position: relative;">
                <img src="{{ asset('images\blog-01.jpg') }}" class="w-100" style="max-width: 50em;">
                <div class="card-img-overlay" style="position: absolute; top: 0; left: 0;">
                    <h5 class="txt-1 mt-2"
                        style="background-color: rgb(247, 241, 241);justify-content:center; display:flex;padding-left:10px; width:6rem; height:3rem">
                        22</br>Jan 2018</h5>
                </div>
            </div>
            <div class="mt-5">
                <h1 class="fs-4 mb-3">8 Inspiring Ways to Wear Dresses in the Winter</h1>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci
                    luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec
                    pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra
                    dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus.
                    Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in
                    porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien
                    condimentum feugiat.</p>
                <p class="mt-3">Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex,
                    tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla,
                    eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor
                    ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis
                    nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>
            </div>
        </div>

        <div class="col-lg-3 mt-0">
            <div>
                <form class="d-flex search-icon shadow-none">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="search-btn btn btn-outline-success shadow-none" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="mt-5">
                <h6 class="text-uppercase mb-4 font-weight-bold">CATEGORIES</h6>
                <hr>
                <div class="widget_title" style="margin-bottom:10px;">
                    <a href="#">Fashion</a>
                </div>
                <hr>
                <div class="widget_title" style="margin-bottom:10px;">
                    <a href="#">Beauty</a>
                </div>
                <hr>
                <div class="widget_title" style="margin-bottom:10px;">
                    <a href="#">Street Style</a>
                </div>
                <hr>
                <div class="widget_title" style="margin-bottom:10px;">
                    <a href="#">Life Style</a>
                </div>
                <hr>
            </div>
            <div class="mt-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images\product-min-01.jpg.webp') }}" class="mt-0 mb-0 w-100" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="#" class="card-text">White Shirt With Pleant Details</a>
                            <p class="card-text mt-3"><small class="text-muted">Rs 2580</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images\product-min-02.jpg.webp') }}" class="mt-0 mb-0 w-100" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="#" class="card-text">White Shirt With Pleant Details</a>
                            <p class="card-text mt-3"><small class="text-muted">Rs 2580</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images\product-min-03.jpg.webp') }}" class="mt-0 mb-0 w-100" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="#" class="card-text">White Shirt With Pleant Details</a>
                            <p class="card-text mt-3"><small class="text-muted">Rs 2580</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tags mt-5">
                <h3><b>Tags</b></h3>
                <div class=" mt-3">
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
