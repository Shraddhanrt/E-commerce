@include('index.home')
@include('index.navbar')

<section>
    <img src="{{ asset('images\bg-02.jpg.webp') }}" class="w-100" alt="Image" style="height: 300px;">
    <div class="d-flex card-img-overlay text-center justify-content-center flex-column" style="margin-top: -150px">
        <h4 class="txt" style="color:white; font-family: Poppins-Bold;font-size: 50px;line-height: 1.1; ">
            Contact Us</h4>
    </div>
</section>

<section class="contact" style="margin: 0; padding: 0;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1 style="font-size: 45px; font-weight:bold;">
                    To make requests <br> for further information, <br> <span style="color:rgb(154,77,227);">Contact Us
                    </span>
                    via our social channels.
                </h1>
                <h6 class="mt-5">We just need a couple of hours! No more than 2 working days since receiving your
                    issue ticket. </h6>
            </div>
            <div class="col-md-6">
                <div class="modal-body mb-0">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Enter your name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter your email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <input type="date" class="form-control" id="date">
                                </div>
                                <div class="col-sm-6">
                                    <input type="time" class="form-control" id="time"
                                        placeholder="Enter the desired time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="button" class="oval-button mt-4" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Schedule A Visit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14073.217618748768!2d84.09125505000002!3d28.13722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1708419568003!5m2!1sen!2snp"
            width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@include('footer.footer')
