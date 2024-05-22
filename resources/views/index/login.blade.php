@include('index.home')
@include('index.navbar')

<div class="sub-navbar" style="margin-top: 5em !important; padding-left: 8em;">
    <a href="{{ route('index') }}" class="btn btn-link">Home</a>
    <i class="fa fa-light fa-arrow-right" style="font-size: 10px"></i>
    <a href="{{ route('index') }}" class="btn btn-link">Shopping Cart</a>
</div>


<div class="container fea-tab mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 login">
            <div class="card cart-card" style="width: 100%">
                <div class="card-body">
                    <h3 class="card-title" style="text-align:center;">Login</h3>
                    <hr class="cart-divider" />
                    <div class="row">
                        <form action="{{ route('admin.login.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class=" cart-shipping-info">
                                <div class="mt-3">
                                    <label class="text-dark" for="uname">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                </div>
                                <div class="mt-3">
                                    <label class="text-dark" for="uname">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="submit text-center">
                                <button type=" button" class="btn mt-4 btn-update-tools">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 sign-up">
            <div class="card cart-card" style="width: 100%">
                <div class="card-body">
                    <h3 class="card-title" style="text-align:center;">Don't have account?Sign up here</h3>
                    <hr class="cart-divider" />
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mt-3">
                                <label class="text-dark" for="firstName">First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label class="text-dark" for="firstName">Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label class="text-dark" for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label class="text-dark" for="password" name="password">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password">
                            </div>
                            <div class="submit text-center">
                                <button type=" button" class="btn mt-4 btn-update-tools" style="width:40%;">Sign Up</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@include('footer.footer')