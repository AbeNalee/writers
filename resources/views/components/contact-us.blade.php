<!--====== CONTACT PART START ======-->
<section id="contact" class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-30">
                    <h3 class="title">Contact</h3>
                    <p class="text">Get in touch. Happiness guaranteed!</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-wrapper form-style-two pt-115">
                    <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Leave <span>A Message.</span></h4>

                    <form id="contact-form" action="{{ route('contact') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-input mt-25">
                                    <label>Name</label>
                                    <div class="input-items default">
                                        <input name="name" type="text" placeholder="Name">
                                        <i class="lni lni-user"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-input mt-25">
                                    <label>Email</label>
                                    <div class="input-items default">
                                        <input type="email" name="email" placeholder="Email">
                                        <i class="lni lni-envelope"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-input mt-25">
                                    <label>Message</label>
                                    <div class="input-items default">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <i class="lni lni-pencil-alt"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="form-input light-rounded-buttons mt-30">
                                    <button type="submit" class="main-btn light-rounded-two">Send Message</button>
                                </div> <!-- form input -->
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- contact wrapper form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<!--====== CONTACT PART ENDS ======-->
