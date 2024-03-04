<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c17b0004ab.js" crossorigin="anonymous"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Animation --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- Isotopes --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <title>E-commerce</title>
</head>

<body>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Owl Carousel Initialization Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

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
        $(document).ready(function() {
            var customContainer = jQuery(".iso-container");
            customContainer.isotope({
                filter: "*",
                transitionDuration: "2s",
                animationOptions: {
                    duration: 7500,
                    queue: false
                },

                layoutMode: "fitRows",
                fitRows: {
                    gutter: 0
                }
            });

            jQuery("#custom-filter li:first-child > a").addClass("is-checked");

            jQuery("#custom-filter a").click(function() {
                jQuery("#custom-filter .is-checked").removeClass("is-checked");
                jQuery(this).addClass("is-checked");

                var customSelector = jQuery(this).attr("data-filter");
                customContainer.isotope({
                    filter: customSelector,
                    transitionDuration: "2s",
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
        });
    </script>
    {{-- Shop New Isotopes --}}
    <script>
        $(document).ready(function() {

            $('.grid').isotope({
                itemSelector: '.grid-item',
            });

            // filter items on button click
            $('.filter-button-group').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $('.grid').isotope({
                    filter: filterValue
                });
                $('.filter-button-group li').removeClass('active');
                $(this).addClass('active');
                $('.shop-ex .filters').css('height', $('.shop-ex .filters').height()); // Fix height
            });
        });
    </script>
    {{-- Add to Cart Modal --}}
    <script>
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
    </script>



</body>

</html>
