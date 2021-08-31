<footer class="footer-area footer-one footer-dark mb-0">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                        <div class="footer-logo">
                            <a class="mt-30" href="#"><img src="assets/images/logo.svg" alt="Logo"></a>
                        </div> <!-- footer logo -->
                    </div> <!-- footer logo support -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-sm-12">
                    <div class="footer-support ">
                        <span class="number">+1 (563) 278-1348</span>
                        <span class="mail">info@classifiedwriters.com</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4">
                    <div class="footer-link">
                        <h6 class="footer-title">Company</h6>
                        <ul>
                            <li><a class="page-scroll" href="#about">About</a></li>
                            <li><a class="page-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-4">
                    <div class="footer-link">
                        <h6 class="footer-title">Services</h6>
                        <ul>
                            @foreach(config('writers.service-tags') as $service)
                                <li>{{ $service }}</li>
                            @endforeach
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-4">
                    <div class="footer-link">
                        <h6 class="footer-title">Legals</h6>
                        <ul>
                            <li><a href="{{ route('tacs') }}" target="_blank">Terms & Conditions</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center d-md-flex justify-content-between align-items-center">
                        <p class="text">Copyright © {{ date('Y') }} Classified Writers. All Rights Reserved</p>
                        <ul class="social">
                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> <!-- copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>
