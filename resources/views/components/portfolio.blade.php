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
                        <li data-filter="*" class="active">ALL WORK</li>
                        @foreach(config('writers.service-tags') as $key => $service)
                            <li data-filter="{{ '.' . strtolower(str_replace(' ', '-', $service)) }}">
                                {{ strtoupper($service) }}
                            </li>
                        @endforeach
                    </ul>
                </div> <!-- portfolio menu -->
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row no-gutters grid mt-50 d-flex">
                    @foreach(\App\Models\File::all() as $file)
                        <div class="card col-lg-4 col-sm-6 {{ strtolower(str_replace(' ', '-', $file->tag)) }}">
                            <div class="single-portfolio">
                                <a href="{{ route('file.show', $file->id) }}" target="_blank">{{ $file->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<!--====== PORTFOLIO PART ENDS ======-->
