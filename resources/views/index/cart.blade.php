@include('index.home')
@include('index.navbar')

{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="product-details">
        <div class="product-image">
            <img src="path/to/your/image.jpg" alt="Product Image" class="img-fluid">
        </div>
        <div class="product-info">
            <h1>Product Title</h1>
            <p class="price">$99.99</p>
            <p class="description">
                This is a detailed description of the product. It highlights the key features and benefits, providing
                customers with all the information they need to make an informed purchase decision.
            </p>
            <button class="btn btn-outline-none shadow-none mx-2 border-0" style="font-size: 20px;">
                <a class="icon" href="#"><i class="fa fa-light fa-cart-shopping"></i> Add to Cart</a>
            </button>
        </div>
    </div>
</div>
