<!--====== PORTFOLIO PART START ======-->
<section id="portfolio" class="portfolio-area portfolio-four pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-10">
                    <h3 class="title">Featured Works</h3>
                    <p class="text">These are samples of our work. Feel free to browse through.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="portfolio-menu text-center mt-50">
                    <ul>
                        <li data-filter="*">ALL WORK</li>
                        @foreach(config('writers.service-tags') as $key => $service)
                            <li data-filter="{{ '.' . strtolower(str_replace(' ', '-', $service)) }}" class="{{ $key == '0' ? 'active' : '' }}">
                                {{ strtoupper($service) }}
                            </li>
                        @endforeach
                    </ul>
                </div> <!-- portfolio menu -->
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row no-gutters grid mt-50">
                    @foreach(\App\Models\File::all() as $file)
                        <div class="col-lg-4 col-sm-6 {{ strtolower(str_replace(' ', '-', $file->tag)) }}">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('assets/images/portfolio/' . $file->name . '.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/9.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                    @endforeach
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<!--====== PORTFOLIO PART ENDS ======-->
