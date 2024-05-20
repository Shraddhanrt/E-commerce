@include('index.home')
@include('index.navbar')

<section>
    <img src="{{ asset('images\background3.jpg') }}" class="w-100" alt="Image" style="height: 300px;">
    <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
        <h4 class="txt" style="color:white; font-family: Poppins-Bold;font-size: 50px;line-height: 1.1;">
            About Us</h4>
    </div>
</section>
<section class="abt-body">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3>Our Story</h3>
                <p style="text-align: justify !important;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                    Mauris
                    consequat consequat enim, non auctormassa ultrices non. Morbi sed odio massa. Quisque at vehicula
                    tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Maecenas varius
                    egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et
                    netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis.
                    <br>
                    <br>Nullam
                    eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae
                    nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis
                    diam faucibus et. Morbi a tempor elit.
                    <br>
                    <br>
                    Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam
                    aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut
                    gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis.
                    <br>
                    <br>
                    Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut
                    sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac
                    ligula.
                    Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut
                    sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac
                    ligula.
                </p>
            </div>
            <div class="col-md-5">
                <div class="abt-img-container position-relative"> <!-- Added position-relative class -->
                    <img src="{{ asset('images/about-01.jpg.webp') }}" class=" "
                        style="vertical-align: middle; padding-bottom: 20px; padding-left: 20px;">
                    <div class="bor position-absolute bottom-0 start-0 end-0" style="padding-top: 20px;"></div>
                    <!-- Added position-absolute and utility classes -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="abt-body">
    <div class="container">
        <div class="row">
            <div class="col-md-7 order-2 order-lg-2 order-md-2 order-sm-1">
                <p style="text-align: justify !important;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                    Mauris
                    consequat consequat enim, non auctormassa ultrices non. Morbi sed odio massa. Quisque at vehicula
                    tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Maecenas varius
                    egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et
                    netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis.
                    <br>
                    <br>Nullam
                    eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae
                    nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis
                    diam faucibus et. Morbi a tempor elit.
                    <br>
                    <br>
                    Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam
                    aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut
                    gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis.
                    <br>
                    <br>
                    Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut
                    sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac
                    ligula.
                    Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut
                    sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac
                    ligula.
                </p>
            </div>
            <div class="col-md-5 order-1 order-lg-1 order-md-1 order-sm-2 ">
                <div class="abt-img-container position-relative"> <!-- Added position-relative class -->
                    <img src="{{ asset('images/about-02.jpg.webp') }}" class=" "
                        style="vertical-align: middle; padding-bottom: 20px; padding-left: 20px;">
                    <div class="bor position-absolute bottom-0 start-0 end-0" style="padding-top: 20px;"></div>
                    <!-- Added position-absolute and utility classes -->
                </div>
            </div>
        </div>
    </div>
</section>


@include('footer.footer')
