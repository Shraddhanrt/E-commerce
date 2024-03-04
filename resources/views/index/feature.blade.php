@include('index.home')
@include('index.navbar')

<div class="sub-navbar" style="margin-top: 65px; padding-left: 15px;">
    <a href="{{ route('index') }}">Home</a>
    <i class="fa fa-light fa-arrow-right" style="font-size: 10px"></i>
    <a href="{{ route('index') }}" style="padding-left: 10px;">Shopping Cart</a>
</div>

<div class="container fea-tab mt-5">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center; font-size: 20px">Product</th>
                        <th scope="col" style="text-align: center; font-size: 20px">Price</th>
                        <th scope="col" style="text-align: center; font-size: 20px">Quantity</th>
                        <th scope="col" style="text-align: center; font-size: 20px">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            <div class="fre-img">
                                <img src="{{ asset('images\item-cart-04.jpg.webp') }}">
                                <span
                                    style="padding-left: 10px; font-size: 15px; color: rgb(71, 67, 67); font-style: Times New Roman;">Fresh
                                    Strawberries</span>
                            </div>
                        </td>
                        <td style="vertical-align: middle;">Rs189.00</td>
                        <td style="vertical-align: middle;">
                            <div>
                                <button class="quantity-button" onclick="decreaseQuantity()">-</button>
                                <span id="quantity">1</span>
                                <button class="quantity-button" onclick="increaseQuantity()">+</button>
                            </div>
                        </td>
                        <td style="vertical-align: middle;">Rs.189.00</td>
                    </tr>
                    <tr>
                        <td scope="row">
                            <div class="fre-img">
                                <img src="{{ asset('images\item-cart-05.jpg.webp') }}">
                                <span
                                    style="padding-left: 10px; font-size: 15px; color: rgb(71, 67, 67); font-style: Times New Roman;">Lightweight
                                    Jacket</span>
                            </div>
                        </td>
                        <td style="vertical-align: middle;">Rs36.00</td>
                        <td style="vertical-align: middle;">
                            <div>
                                <button class="quantity-button" onclick="decreaseQuantity()">-</button>
                                <span id="quantity">1</span>
                                <button class="quantity-button" onclick="increaseQuantity()">+</button>
                            </div>
                        </td>
                        <td style="vertical-align: middle;">Rs.36.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="card cart-card">
                <div class="card-body">
                    <h5 class="card-title">CART TOTALS</h5>
                    <div class="cart-info">
                        <h6 class="card-text mt-2 cart-label">Subtotal:</h6>
                        <span class="cart-value">Rs. 225</span>
                    </div>
                    <hr class="cart-divider" />
                    <div class="row">
                        <div class="col-4">
                            <h6 class="card-text mt-2 cart-label">Shipping:</h6>
                        </div>
                        <div class="col-8">
                            <div class="cart-shipping-info">
                                <p>There are no shipping methods available. Please double check your address, or contact
                                    us if you need any help.</p>
                                <p class="mt-2">CALCULATE SHIPPING</p>

                                <div class="mt-3">
                                    <input type="text" class="form-control" placeholder="State/Country">
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" placeholder="Postcode/Zip">
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn mt-4 btn-update-tools">Update Tools</button>
                            </div>
                        </div>
                    </div>
                    <hr class="cart-divider" />
                    <div class="cart-info">
                        <h6 class="card-text mt-2 cart-label">Subtotal:</h6>
                        <span class="cart-value">Rs. 225</span>
                    </div>
                    <span>
                        <button type="button" class="btn mt-3 btn-proceed-to-purchase">Proceed To Purchase</button>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>

@include('footer.footer')
