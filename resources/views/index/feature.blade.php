@include('index.home')
@include('index.navbar')

<div class="sub-navbar" style="margin-top: 5em !important; padding-left: 8em;">
    <a href="{{ route('index') }}" class="btn btn-link">Home</a>
    <i class="fa fa-light fa-arrow-right" style="font-size: 10px"></i>
    <a href="{{ route('index') }}" class="btn btn-link">Shopping Cart</a>
</div>


<div class="container fea-tab mt-5">
    <h3 class="justify-content-left d-flex align-items-center">Product Details</h3>
    <div class="row justify-content-center">
        <div class="col-lg-8 ">
            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Product</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td scope="row">
                                    <div class="fre-img">

                                        <img src="{{ asset($product->image) }}" style="height: 5em; width:5em">
                                        <span
                                            style=" font-size: 15px; color: rgb(71, 67, 67); font-style: Times New Roman;">{{ $product->name }}</span>
                                    </div>
                                </td>
                                <td style="vertical-align: middle;">{{ $product->cost }}</td>
                                <td style="vertical-align: middle;">
                                    <div class="d-flex align-items-center justify-content-center">
                                        {{ $product->quantity }}

                                    </div>
                                </td>
                                <td style="vertical-align: middle;"> {{ $product->total }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4 ">

            <div class="card cart-card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">CART TOTALS</h5>
                    <div class="cart-info">
                        <h6 class="card-text mt-2 cart-label justify-content-center d-flex">Subtotal: Rs 125</h6>
                    </div>
                    <hr class="cart-divider" />
                    <div class="row">
                        <div class="col-4">
                            <h6 class="card-text mt-2 cart-label justify-content-center d-flex">Shipping:</h6>
                        </div>
                        @if (isset($customer))
                            <div class="col-8">
                                <div class="cart-shipping-info">
                                    <p>There are no shipping methods available. Please double check your address, or
                                        contact
                                        us if you need any help.</p>
                                    <p class="mt-2">CUSTOMER INFO</p>
                                    <div class="mt-3">
                                        <input type="text" class="form-control" readonly
                                            name="name"value="{{ $customer->name }}">
                                    </div>
                                    <div class="mt-3">
                                        <input type="text" class="form-control" readonly name="phone"
                                            value="{{ $customer->phone }}">
                                    </div>
                                    <div class="mt-3">
                                        <input type="text" class="form-control" readonly name="address"
                                            value="{{ $customer->address }}">
                                    </div>
                                </div>
                            @else
                                <form action="{{ route('customer.store') }}" method="post">
                                    @csrf
                                    <div class="col-8">
                                        <div class="cart-shipping-info">
                                            <p>There are no shipping methods available. Please double check your
                                                address, or
                                                contact
                                                us if you need any help.</p>
                                            <p class="mt-2">CUSTOMER INFO</p>
                                            <div class="mt-3">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Customer Name">
                                            </div>
                                            <div class="mt-3">
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="Phone Number">
                                            </div>
                                            <div class="mt-3">
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Delivery Address">
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit"
                                                class="btn mt-4 btn-update-tools justify-content-center d-flex">Add
                                                Info
                                            </button>
                                        </div>
                                </form>
                        @endif

                    </div>
                </div>
                <hr class="cart-divider" />
                <div class="cart-info">
                    <h6 class="card-text mt-2 cart-label justify-content-center d-flex">Subtotal: Rs.225</h6>
                </div>
                <span class="btn-proceed justify-content-center d-flex align-items-center">
                    <button type="button" class="btn mt-3 btn-proceed-to-purchase"
                        style="margin-left:2em;width:20em">Pay Via
                        Khalti</button>
                </span>
            </div>
        </div>
    </div>
</div>
</div>




@include('footer.footer')
