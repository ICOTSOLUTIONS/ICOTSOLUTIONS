@extends('client.partial.master')
@section('content')
<section class="breadcrumbs2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Service</h1>
                    <span><a href="{{url('/')}}">Home</a><i><img src="assets/img/icons/breadcrumb-arrow.svg" alt=""></i>Service</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{--
    <section class="service-area sec-pad">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="title">
                        <span>what we do</span>
                        <h2>we work performed for client happy.</h2>
                        <div class="cmn-btn">
                            <a href="services.html">view all services</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="row g-4">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="single-service">
                                <span class="count">01</span>
                                <div class="service-icon">
                                    <i><img src="assets/img/icons/service-icon-1.png" alt=""></i>
                                </div>
                                <div class="service-content">
                                    <h4>web design</h4>
                                    <p>interger purus adio, placerat ni in, ullamcorper nec dolor.</p>
                                    <a href="service-details.html">read more<i><img src="assets/img/icons/arrow-circle.png"
                                                alt=""></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="single-service">
                                <span class="count">02</span>
                                <div class="service-icon">
                                    <i><img src="assets/img/icons/service-icon-2.png" alt=""></i>
                                </div>
                                <div class="service-content">
                                    <h4>App design</h4>
                                    <p>interger purus adio, placerat ni in, ullamcorper nec dolor.</p>
                                    <a href="service-details.html">read more<i><img src="assets/img/icons/arrow-circle.png"
                                                alt=""></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="single-service">
                                <span class="count">03</span>
                                <div class="service-icon">
                                    <i><img src="assets/img/icons/service-icon-3.png" alt=""></i>
                                </div>
                                <div class="service-content">
                                    <h4>Developing</h4>
                                    <p>interger purus adio, placerat ni in, ullamcorper nec dolor.</p>
                                    <a href="service-details.html">read more<i><img src="assets/img/icons/arrow-circle.png"
                                                alt=""></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="single-service">
                                <span class="count">04</span>
                                <div class="service-icon">
                                    <i><img src="assets/img/icons/service-icon-4.png" alt=""></i>
                                </div>
                                <div class="service-content">
                                    <h4>Graphic design</h4>
                                    <p>interger purus adio, placerat ni in, ullamcorper nec dolor.</p>
                                    <a href="service-details.html">read more<i><img src="assets/img/icons/arrow-circle.png"
                                                alt=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <span class="count">05</span>
                        <div class="service-icon">
                            <i><img src="assets/img/icons/service-icon-5.png" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>Video Animation</h4>
                            <p>interger purus adio, placerat ni in, ullamcorper nec dolor.</p>
                            <a href="service-details.html">read more<i><img src="assets/img/icons/arrow-circle.png"
                                        alt=""></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <span class="count">06</span>
                        <div class="service-icon">
                            <i><img src="assets/img/icons/service-icon-6.png" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>3D Design</h4>
                            <p>interger purus adio, placerat ni in, ullamcorper nec dolor.</p>
                            <a href="service-details.html">read more<i><img src="assets/img/icons/arrow-circle.png"
                                        alt=""></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <span class="count">07</span>
                        <div class="service-icon">
                            <i><img src="assets/img/icons/service-icon-7.png" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>UI/UX Design</h4>
                            <p>interger purus adio, placerat ni in, ullamcorper nec dolor.</p>
                            <a href="service-details.html">read more<i><img src="assets/img/icons/arrow-circle.png"
                                        alt=""></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<section class="service-area sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="title">
                    <span>what we do</span>
                    <h2>we work performed for client happy.</h2>
                    {{-- <div class="cmn-btn">
                            <a href="{{ url('/service') }}">view all services</a>
                </div> --}}
            </div>
        </div>
        <div class="col-md-12 col-lg-8 col-xl-8">
            <div class="row g-4">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="single-service">
                        <span class="count">01</span>
                        <div class="service-icon">
                            <i><img src="{{ asset('assets/img/icons/service-icon-1.png') }}" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>web designing</h4>
                            <p>Grow your digital presence with our human-centered, compelling, and future-proof
                                approach to web design.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="single-service">
                        <span class="count">02</span>
                        <div class="service-icon">
                            <i><img src="{{ asset('assets/img/icons/service-icon-2.png') }}" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>Web Development</h4>
                            <p>Your website creates a digital experience for your brand, making it an essential
                                component of your marketing and business strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="single-service">
                        <span class="count">03</span>
                        <div class="service-icon">
                            <i><img src="{{ asset('assets/img/icons/service-icon-3.png') }}" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>App Development</h4>
                            <p>Maecenas ut est in ante imperdiet laoreet eu quis elit Phasellus Door.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="single-service">
                        <span class="count">04</span>
                        <div class="service-icon">
                            <i><img src="{{ asset('assets/img/icons/service-icon-2.png') }}" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>Digital Marketing </h4>
                            <p>At ICOT SOLUTIONS, we believe your marketing strategy should create unique and
                                engaging experiences that help connect your brand to people to build customer
                                loyalty and drive revenue for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="single-service">
                        <span class="count">05</span>
                        <div class="service-icon">
                            <i><img src="{{ asset('assets/img/icons/service-icon-4.png') }}" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>Cohesive Branding Solutions</h4>
                            <p>Your brand is more than just your business logo design at ICOT SOLUTIONS. Our
                                branding strategy includes an initial brand audit to a full-scale branding identity
                                creating a cohesive story for your business to customers and prospects across all
                                channels.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="single-service">
                        <span class="count">06</span>
                        <div class="service-icon">
                            <i><img src="{{ asset('assets/img/icons/service-icon-4.png') }}" alt=""></i>
                        </div>
                        <div class="service-content">
                            <h4>Graphic Designing </h4>
                            <p>If you are Looking for a creative & cost-effective graphics Design Agency for all your Graphics Needs? We are here!
                                Need to market your business / Products and reposition your brand? Then surely you need a professional creative graphics designing service that can output the eye-catching design that can attract customers and helps you to generate sales & to grow your business. Our Creative Designers team is capable of creating such designs according to the standard of your brand, like the way you want it to be.</p>
                            <P>Out Team Expertise In Graphic Designing Are Given Bellow.</P>
                            <ul>
                                <li class="text-white">Visual Identity</li>
                                <li class="text-white">Marketing Advertising</li>
                                <li class="text-white">User Interface</li>
                                <li class="text-white">Publications Graphic</li>
                                <li class="text-white">Motion Graphics</li>
                                <li class="text-white">Environmental Graphics</li>
                                <li class="text-white">Web design</li>
                                <li class="text-white">Packaging Design</li>
                                <li class="text-white">Logo Design</li>
                                <li class="text-white">Boucher Design</li>
                                <li class="text-white">Letterhead Design</li>
                                <li class="text-white">T-Shirt Designs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="how-we-work sec-mar-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-4">
                <div class="title black">
                    <span>How We Work</span>
                    <h2>Our Unique Work Process.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper work-process">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/work-process-slider-1.png" alt="">
                                <div class="work-process-inner">
                                    <b>01</b>
                                    <h4>Brainstorm & Wirefirm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/work-process-slider-2.jpg" alt="">
                                <div class="work-process-inner">
                                    <b>02</b>
                                    <h4>Brainstorm & Wirefirm</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pricing-plan sec-mar">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6 col-xl-5 or2">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pay Monthly</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pay Yearly</button>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 col-xl-5 or1">
                <div class="title black">
                    <span>Pricing Plan</span>
                    <h2>Join Now For Your Business.</h2>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Small Business</h3>
                            <span>Single Business</span>
                            <h2>$15.99/<sub>Per Month</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Professional</h3>
                            <span>Small team</span>
                            <h2>$99.99/<sub>Per Month</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Enterprice</h3>
                            <span>Large Team</span>
                            <h2>$120.99/<sub>Per Month</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Small Business</h3>
                            <span>Single Business</span>
                            <h2>$150.99/<sub>Per Yearly</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Professional</h3>
                            <span>Small team</span>
                            <h2>$199.99/<sub>Per Yearly</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Enterprice</h3>
                            <span>Large Team</span>
                            <h2>$220.99/<sub>Per Yearly</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="lets-talk sec-pad">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <div class="title special">
                        <span>Let’s Talk</span>
                        <h2>About Your Next <br><b>Project</b> Your Mind</h2>
                    </div>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-5 text-end">
                    <div class="getin-touch">
                        <div class="cmn-btn">
                            <a href="contact.html">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection