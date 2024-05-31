@include('index.home')
<nav class="navbar navbar-expand-lg sticky-top " id="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
            style="background-color:rgb(152, 125, 165); margin-right:-1em; font-size:23px">
            <i class="fas fa-bars text-white"></i> Menu
        </button>
        <a class="navbar-brand d-none d-lg-block" href="#">E-Commerce</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <div class="navbar-text d-flex">

                @if (!Auth::user())
                    <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                        <a class="icon" href="{{ route('login') }}">
                            <div><i class="fa fa-light fa-user"></i></div>
                        </a>
                    </button>
                @else
                    <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                        <a class="icon"
                            onclick="event.preventDefault(); document.getElementById('logout-form-user').submit();">
                            <div><i class="fa fa-light fa-sign-out"></i></div>
                        </a>
                    </button>
                    <form id="logout-form-user" action="{{ route('admin.logout') }}" method="POST"
                        style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif

                <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                    <a class="icon" href="{{ route('web.wishlist') }}">
                        <i class=" fa fa-light fa-heart"></i>
                        <span class="badge badge-pill badge-danger position-absolute"
                            style="top: 4px; right: 95px; background-color:rgb(215, 53, 53); color:aliceblue;">
                            {{ DB::table('wishlists')->where('user_id', Auth::User()->id ?? null)->count() }}
                        </span>
                    </a>
                </button>
                <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px; ">
                    <a class="icon text-decoration-none position-relative" href="{{ route('web.cart') }}">
                        <i class="fa fa-cart-shopping test"></i>
                        <span class="badge badge-pill badge-danger position-absolute"
                            style="top: -20px; right: -20px; background-color:rgb(215, 53, 53); color:aliceblue;">
                            {{ DB::table('cart_items')->where('cart_id',DB::table('carts')->where('user_id', Auth::User()->id ?? null)->first()->id ?? null)->count() }}

                        </span>
                    </a>
                </button>
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand offcanvas-title" id="offcanvasNavbarLabel" href="#">E-Commerce</a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
                    style="background-color: blueviolet; color:rgb(19, 19, 20)"></button>
            </div>

            <div class="offcanvas-body align-items-start!important">
                <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <div class="navbar-text d-flex">
                    <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                        <a class="icon" href="#">
                            <div><i class="fa fa-light fa-search"></i></div>
                        </a>
                    </button>
                    @if (!Auth::user())
                        <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                            <a class="icon" href="{{ route('login') }}">
                                <div><i class="fa fa-light fa-user"></i></div>
                            </a>
                        </button>
                    @else
                        <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                            <a class="icon"
                                onclick="event.preventDefault(); document.getElementById('logout-form-user').submit();">
                                <div><i class="fa fa-light fa-sign-out"></i></div>
                            </a>
                        </button>
                        <form id="logout-form-user" action="{{ route('admin.logout') }}" method="POST"
                            style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                    <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                        <a class="icon" href="{{ route('web.wishlist') }}">
                            <div><i class="fa fa-light fa-heart"></i></div>
                        </a>
                    </button>
                    <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size:20px;">
                        <a class="icon" style=" text-decoration:none" href="{{ route('web.cart') }}"><i
                                class="fa fa-light fa-cart-shopping test"></i></a>
                    </button>
                </div>
            </div>
        </div>
</nav>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
