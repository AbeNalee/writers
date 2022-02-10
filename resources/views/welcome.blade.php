<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Classified Writers</title>

    <meta name="title" content="Classified Writers">
    <meta name="description" content="Classified Writers is your number one place to get all your writing needs sorted out. Writing done by classified writers provides the best quality work">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="B-T4ADA5E2PTGgqyZ62UwAYHeB0qcKeJxgnWLYTSTFk" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QX1BBF8PB6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QX1BBF8PB6');
    </script>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/added.css">
    <link rel="stylesheet" href="assets/css/ayroui.css">

</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<div id="app">
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.svg" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#calculator">Pricing</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid page-scroll" href="#contact">Get in touch</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

`@include('components.home-section')

@include('components.services')

@include('components.calculator')

@include('components.about')

@include('components.testimonials')

@include('components.contact-us')

<!--====== FOOTER PART START ======-->

@include('components.footer')

<!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-">

                    </div>
                </div>
            </div>
        </section>
    -->

    <!--====== PART ENDS ======-->
</div>




<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--====== Slick js ======-->
<script src="assets/js/slick.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!--====== Ajax Contact js ======-->
<script src="assets/js/ajax-contact.js"></script>

<!--====== Isotope js ======-->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>

<!--====== Scrolling Nav js ======-->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>
<script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
