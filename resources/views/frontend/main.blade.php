
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PROJECT ASAL ASALAN</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Child Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone C ompatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- css files -->
    <link href="frontend/asset/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="frontend/asset/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="frontend/asset/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
    <link href="frontend/asset/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <!-- //css files -->

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //google fonts -->

</head>

<body>

    <!-- home -->
    @include('frontend.home.home')
    <!-- //home -->

    <!-- kontak -->
    @include('frontend.home.kontak')
    <!-- //kontak -->

    <!-- company -->
    @include('frontend.home.company')
    <!-- //company -->

    <!-- berita -->
    @include('frontend.home.berita')
    <!-- //berita -->

    {{-- jurusan --}}
    @include('frontend.home.jurusan')
    {{-- //jurusan --}}

    <!-- footer -->
    <footer>
        <div class="footer-layer py-sm-5 pt-5 pb-3">
            <div class="container py-md-3">
                <div class="footer-grid_section text-center">
                    <div class="footer-title mb-3">
                        <a href="#"><img src="frontend/asset/images/s2.png" alt=""> Child Learn</a>
                    </div>
                    <div class="footer-text">
                        <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem
                            ipnut libero malesuada feugiat.
                            Lorem ipsum dolor sit amet, consectetur elit.</p>
                    </div>
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li class="pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
                        <li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- copyright -->
    <section class="copyright">
        <div class="container py-4">
            <div class="row bottom">
                <ul class="col-lg-6 links p-0">
                    <li><a href="#why" class="">Why Choose Us</a></li>
                    <li><a href="#services" class="">Services </a></li>
                    <li><a href="#team" class="">Teachers </a></li>
                    <li><a href="#testi" class="">Testimonials </a></li>
                </ul>
                <div class="col-lg-6 copy-right p-0">
                    <p class="">© 2019 Child Learn. All rights reserved | Design by
                        <a href="http://w3layouts.com"> W3layouts.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- //copyright -->

    <!-- move top -->
    <div class="move-top text-right">
        <a href="#home" class="move-top">
            <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
        </a>
    </div>
    <!-- move top -->

</body>
</html>
