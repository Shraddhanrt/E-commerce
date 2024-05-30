@include('index.home')
@include('index.navbar')
<div class="container wishlist-container" style="margin-top: 6em">
    <h2 class="text-center">My Wishlist</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr style="background-color: rgb(142, 89, 192);color:white">
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wishlists as $wishlist)
                    <tr style="font-size:23px">
                        <td><img src="{{ asset($wishlist->image) }} " class="wishlist-product-img" alt="Product 1"
                                style="height:4em;width:5em;"></td>
                        <td> {{ $wishlist->name }}</td>
                        <td>Rs. {{ $wishlist->cost }}</td>

                        <td style="text-align: center;">
                            <!-- Add to Cart Icon -->
                            <a href="{{ route('cart.store', ['id' => $wishlist->product_id]) }}" title="Add to Cart"
                                style="color: rgb(127, 95, 157); padding: 8px; border-radius: 5px; background-color: transparent;">
                                <i class="fa fa-cart-plus"></i>
                            </a>
                            <!-- Delete Icon -->
                            <a href="{{ route('wishlist.store', ['id' => $wishlist->product_id]) }}"
                                title="Remove from Wishlist"
                                style="color: rgb(127, 95, 157); padding: 8px; border-radius: 5px; background-color: transparent;">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
