 <nav class="navbar navbar-expand-lg sticky-top">
     <div class="container-fluid">
         <a class="navbar-brand" href="#">E-Commerce</a>
         <button class="navbar-toggler shadow-none text-white" type="button" id="navbarToggle">
             <i class="fas fa-bars text-white"></i> Menu
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('features') }}">Features</a>
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
                 <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                     <a class="icon" href="#">
                         <div><i class=" fa fa-light fa-heart"></i></div>
                     </a>
                 </button>
                 <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                     <a class="icon" href="#"><i class="fa fa-light fa-cart-shopping"></i></a>
                 </button>
             </div>
         </div>
     </div>
 </nav>
