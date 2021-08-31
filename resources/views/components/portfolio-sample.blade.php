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
