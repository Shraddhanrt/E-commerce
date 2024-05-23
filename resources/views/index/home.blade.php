<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c17b0004ab.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Animation --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!-- Include jQuery and Isotope -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="{{ asset('assets/backend/css/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/toastr.min.css') }}">
    <script src="{{asset('assets/backend/js/toastr.min.js')}}"></script>




    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <title>E-commerce</title>
</head>

<body>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById('navbarToggle').addEventListener('click', function() {
            var navbarSupportedContent = document.getElementById('navbarSupportedContent');
            if (navbarSupportedContent.classList.contains('show')) {
                navbarSupportedContent.classList.remove('show');
            } else {
                navbarSupportedContent.classList.add('show');
            }
        });
    </script>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Owl Carousel Initialization Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });

            // Custom Navigation Events
            $(".custom-next").click(function() {
                $(".owl-carousel").trigger('next.owl.carousel');
            });
            $(".custom-prev").click(function() {
                $(".owl-carousel").trigger('prev.owl.carousel');
            });
        });
    </script>

    {{-- home- Isotopes --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

    <script>
        $(window).on('load', function() {
            var customContainer = $(".iso-container");

            // Initialize Isotope
            customContainer.isotope({
                itemSelector: '.isotope-item',
                layoutMode: "fitRows",
                fitRows: {
                    gutter: 0
                },
                transitionDuration: "0.5s",
                animationOptions: {
                    duration: 7500,
                    queue: false
                }
            });

            // Set initial checked state for filter
            $("#custom-filter li:first-child > a").addClass("is-checked");

            // Handling filter clicks
            $("#custom-filter a").click(function() {
                $("#custom-filter .is-checked").removeClass("is-checked");
                $(this).addClass("is-checked");

                var customSelector = $(this).attr("data-filter");

                // Update Isotope with new filter
                customContainer.isotope({
                    filter: customSelector,
                    transitionDuration: "0.5s",
                    animationOptions: {
                        duration: 7500,
                        queue: false
                    },
                    layoutMode: "fitRows",
                    fitRows: {
                        gutter: 0
                    }
                });
                return false;
            });

            // Update Isotope on window resize
            $(window).on('resize', function() {
                customContainer.isotope('layout');
            });
        });
    </script>




    {{-- Add to Cart Modal --}}
    {{-- <script>
        var thumbnails = document.getElementById("thumbnails");
        var imgs = thumbnails.getElementsByTagName("img");
        var main = document.getElementById("main");
        var counter = 0;

        // Create left and right arrow buttons
        var leftArrow = document.createElement("button");
        leftArrow.innerHTML = "&#10094;";
        leftArrow.className = "arrow arrow-left";
        leftArrow.addEventListener("click", function() {
            counter = (counter - 1 + imgs.length) % imgs.length;
            main.src = imgs[counter].src;
        });

        var rightArrow = document.createElement("button");
        rightArrow.innerHTML = "&#10095;";
        rightArrow.className = "arrow arrow-right";
        rightArrow.addEventListener("click", function() {
            counter = (counter + 1) % imgs.length;
            main.src = imgs[counter].src;
        });

        // Append arrow buttons to the modal body
        var modalBody = document.querySelector(".modal-body");
        modalBody.appendChild(leftArrow);
        modalBody.appendChild(rightArrow);

        // Add event listener to thumbnail images
        for (let i = 0; i < imgs.length; i++) {
            let img = imgs[i];
            img.addEventListener("click", function() {
                main.src = this.src;
                counter = i;
            });
        }
    </script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var thumbnails = document.getElementById("thumbnails");
            var imgs = thumbnails.getElementsByTagName("img");
            var main = document.getElementById("main");
            var counter = 0;

            // Create left and right arrow buttons
            var leftArrow = document.createElement("button");
            leftArrow.innerHTML = "&#10094;";
            leftArrow.className = "arrow arrow-left";
            leftArrow.addEventListener("click", function() {
                counter = (counter - 1 + imgs.length) % imgs.length;
                main.src = imgs[counter].src;
            });

            var rightArrow = document.createElement("button");
            rightArrow.innerHTML = "&#10095;";
            rightArrow.className = "arrow arrow-right";
            rightArrow.addEventListener("click", function() {
                counter = (counter + 1) % imgs.length;
                main.src = imgs[counter].src;
            });

            // Append arrow buttons to the modal body
            var modalBody = document.querySelector(".modal-body");
            modalBody.appendChild(leftArrow);
            modalBody.appendChild(rightArrow);

            // Add event listener to thumbnail images
            for (let i = 0; i < imgs.length; i++) {
                let img = imgs[i];
                img.addEventListener("click", function() {
                    main.src = this.src;
                    counter = i;
                });
            }
        });
    </script>
    {{-- Navbar --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navbar = document.querySelector('.navbar');
            var navbarToggle = document.getElementById("navbarToggle");

            // Check initial scroll position
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            }

            window.addEventListener("scroll", function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });

            navbarToggle.addEventListener("click", function() {
                navbar.classList.toggle("navbar-bg");
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "10000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            // Display an info toast with no title
            @if(Session::has('success'))
            toastr["success"]('<?= Session::get('success') ?>', "Success");
            @endif

            @if(Session::has('info'))
            toastr["info"]('<?= Session::get('info') ?>', "Info");
            @endif

            @if(Session::has('warning'))
            toastr["warning"]('<?= Session::get('warning') ?>', "Warning");
            @endif

            @if(Session::has('error'))
            toastr["error"]('<?= Session::get('error') ?>', "Error");
            @endif
        });
    </script>

</body>

</html>