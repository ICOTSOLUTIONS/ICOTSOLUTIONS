@extends('client.partial.master')
@section('content')
<section class="hero-area">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content-wrapper">
                                <div class="hero-content-wrap">
                                    <div class="hero-content-img">
                                        <img src="{{ asset('assets/img/homebannar/01.jpg') }}" alt="">
                                    </div>
                                    <div class="hero-content">
                                        {{-- <h2>Creative</h2> --}}
                                        <h1>ICOT SOLUTIONS </h1>
                                        <h3 class="text-light">IQRA COMPUTER ORGANIZATION TECHNOLOGY</h3>
                                        <p>ICOTS is a very responsible team and is always up for a challenge. They put
                                            heart and passion into everything they do. We look forward to a continuing
                                            collaboration with the ICOTS's family and wish them all the success.</p>
                                        <a href="{{url('/about')}}" class="about-btn">Read More</a>
                                        <a href="{{url('/portfolio')}}" class="work-btn">How we work</a>
                                        <div class="slider-num">
                                            <span>01</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content-wrapper">
                                <div class="hero-content-wrap">
                                    <div class="hero-content-img">
                                        <img src="{{ asset('assets/img/homebannar/ourmission.jpg') }}" alt="">
                                    </div>
                                    <div class="hero-content">
                                        {{-- <h2>Creative</h2> --}}
                                        <h1>OUR MISSION</h1>
                                        <h3 class="text-light">Our WORK SPEAKS MORE THAN OUR WORDS.</h3>
                                        <p>To be our clients' trusted partner, helping them enhance their business
                                            performance by providing them with innovative, state-of-the-art software
                                            solutions, automated and integrated workflows and business processes, and
                                            the highest quality of, and quickest turnaround times for IT and IT-enabled
                                            services. We believe that we exist to serve our customers with mutual
                                            respect and care.</p>
                                        <a href="{{url('/about')}}" class="about-btn">Read More</a>
                                        <a href="{{url('/portfolio')}}" class="work-btn">How we work</a>
                                        <div class="slider-num">
                                            <span>02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content-wrapper">
                                <div class="hero-content-wrap">
                                    <div class="hero-content-img">
                                        <img src="{{ asset('assets/img/homebannar/ourvision.jpg') }}" alt="">
                                    </div>
                                    <div class="hero-content">
                                        {{-- <h2>Creative</h2> --}}
                                        <h1>OUR VISION</h1>
                                        <h3 class="text-light">Our First Priority is the Satisfaction of our honourable clients</h3>
                                        <p>To be recognized by our customers, employees, stakeholders, vendors,
                                            partners, and competitors as the number one Software house and IT-enabled
                                            services provider in Pakistan.</p>
                                        <a href="{{url('/about')}}" class="about-btn">Read More</a>
                                        <a href="{{url('/portfolio')}}" class="work-btn">How we work</a>
                                        <div class="slider-num">
                                            <span>03</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="social-media">
        <ul class="social-list">
            <li><a href="https://www.facebook.com/icotsolutions/" target="_blank">Facebook</a></li>
            <li><a href="https://www.instagram.com/icotsolutions/?hl=en" target="_blank">instagram</a></li>
            <li><a href="https://www.linkedin.com/in/icot-solutions-a5642a237/" target="_blank">Linked in</a></li>
        </ul>
    </div>
</section>

<section class="service-area sec-pad">
    <div class="container">
        {{-- <div class="row"> --}}
        {{-- <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="title">
                        {{-- <span>what we do</span> --}}
        {{-- <h2>Our WORK SPEAKS MORE THAN OUR WORDS.</h2> --}}
        {{-- <div class="cmn-btn">
                            <a href="{{url('/services')}}">view all services</a>
    </div> --}}
    {{-- </div> --}}
    {{-- </div>  --}}
    <div class="col-md-12 col-lg-12 col-xl-12 title">
        <h2 class="text-center">OUR WORK SPEAKS MORE THAN OUR WORDS.</h2>
    </div>
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="row g-4">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="single-service">
                    <span class="count">01</span>
                    <div class="service-icon">
                        <i><img src="{{ asset('assets/img/icons/service-icon-1.png') }}" alt=""></i>
                    </div>
                    <div class="service-content">
                        <h4>web designing</h4>
                        <p>Grow your digital presence with our human-centered, compelling, and future-proof approach to web design.</p>
                        <a href="{{url('/webDesigning')}}">read more<i><img src="{{ asset('assets/img/icons/arrow-circle.png') }}" alt=""></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="single-service">
                    <span class="count">02</span>
                    <div class="service-icon">
                        <i><img src="{{ asset('assets/img/icons/service-icon-2.png') }}" alt=""></i>
                    </div>
                    <div class="service-content">
                        <h4>Web Development</h4>
                        <p>Your website creates a digital experience for your brand, making it an essential
                            component of your marketing and business strategy.</p>

                        <a href="{{url('/WebDevelopment')}}">read more<i><img src="{{ asset('assets/img/icons/arrow-circle.png') }}" alt=""></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="single-service">
                    <span class="count">03</span>
                    <div class="service-icon">
                        <i><img src="{{ asset('assets/img/icons/service-icon-3.png') }}" alt=""></i>
                    </div>
                    <div class="service-content">
                        <h4>React Native App Development</h4>
                        <p>ICOTS uses this conspicuous Hybrid Mobile Application Framework to equip the app with vigorous and quick performance.Hybrid app development is one way for companies to save money and time.</p>
                        <a href="{{url('/AppDevelopment')}}">read more<i><img src="{{ asset('assets/img/icons/arrow-circle.png') }}" alt=""></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
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
                        <a href="{{url('/DigitalMarketing')}}">read more<i><img src="{{ asset('assets/img/icons/arrow-circle.png') }}" alt=""></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
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
                        <a href="{{url('/CohesiveBranding')}}">read more<i><img src="{{ asset('assets/img/icons/arrow-circle.png') }}" alt=""></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="single-service">
                    <span class="count">06</span>
                    <div class="service-icon">
                        <i><img src="{{ asset('assets/img/icons/service-icon-4.png') }}" alt=""></i>
                    </div>
                    <div class="service-content">
                        <h4>Graphic Designing </h4>
                        <p>If you are Looking for a creative & cost-effective graphics Design Agency for all
                            your Graphics Needs? We are here!</p>
                        <a href="{{url('/GraphicDesigning')}}">read more<i><img src="{{ asset('assets/img/icons/arrow-circle.png') }}" alt=""></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>



<section class="our-partner">
    <div class="container-fluid g-0 overflow-hidden">
        <div class="row align-items-center g-0">
            <div class="col-12 col-xl-6">
                <div class="newsletter">
                    <div class="subscribes">
                        <span>Get In Touch</span>
                        <h1>Subscribe Our</h1>
                        <h2>Newsletter</h2>
                        <div class="subscribe-form">
                            <form action="#" method="post">
                                <input type="email" name="email" placeholder="Type Your Email">
                                <input type="submit" value="Connect">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="our-clients">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-4 col-xl-6">
                            <div class="title">
                                <span>Our partner</span>
                                <h2>Join our Icots community.</h2>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-1.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-2.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-3.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-4.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-5.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-6.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-7.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-8.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-9.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.org</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="{{ asset('assets/img/partner-icons/partner-10.png') }}" alt="">
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div class="portfolio-area sec-mar-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 col-xl-5">
                    <div class="title">
                        <span>Case Study</span>
                        <h2>A diversified resilient portfolio.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper portfolio-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-portfolio">
                        <div class="portfolio-data">
                            <a href="#"><img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
alt=""></a>
</div>
<div class="portfolio-inner">
    <span>Template</span>
    <h4>Creative Agency</h4>
    <div class="portfolio-hover">
        <a href="project-details.html" class="case-btn">Case Study</a>
        <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg')}}"><i class="fas fa-search"></i></a>
    </div>
</div>
</div>
</div>
<div class="swiper-slide">
    <div class="single-portfolio">
        <div class="portfolio-data">
            <a href="#"><img src="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}" alt=""></a>
        </div>
        <div class="portfolio-inner">
            <span>UI Kit</span>
            <h4>E-Shop Ecommerce</h4>
            <div class="portfolio-hover">
                <a href="project-details.html" class="case-btn">Case Study</a>
                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-2.jpg')}}"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="swiper-slide">
    <div class="single-portfolio">
        <div class="portfolio-data">
            <a href="#"><img src="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" alt=""></a>
        </div>
        <div class="portfolio-inner">
            <span>Software</span>
            <h4>Desktop Mockup</h4>
            <div class="portfolio-hover">
                <a href="project-details.html" class="case-btn">Case Study</a>
                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-3.jpg')}}"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="swiper-slide">
    <div class="single-portfolio">
        <div class="portfolio-data">
            <a href="#"><img src="{{ asset('assets/img/portfolio/portfolio-4.jpg') }}" alt=""></a>
        </div>
        <div class="portfolio-inner">
            <span>Graphic</span>
            <h4>Art Deco Cocktails</h4>
            <div class="portfolio-hover">
                <a href="project-details.html" class="case-btn">Case Study</a>
                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-4.jpg')}}"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="swiper-slide">
    <div class="single-portfolio">
        <div class="portfolio-data">
            <a href="#"><img src="{{ asset('assets/img/portfolio/portfolio-5.jpg') }}" alt=""></a>
        </div>
        <div class="portfolio-inner">
            <span>App</span>
            <h4>Mobile Crypto Wallet</h4>
            <div class="portfolio-hover">
                <a href="project-details.html" class="case-btn">Case Study</a>
                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-5.jpg')}}"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="swiper-slide">
    <div class="single-portfolio">
        <div class="portfolio-data">
            <a href="#"><img src="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" alt=""></a>
        </div>
        <div class="portfolio-inner">
            <span>Template</span>
            <h4>Creative Agency</h4>
            <div class="portfolio-hover">
                <a href="project-details.html" class="case-btn">Case Study</a>
                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-3.jpg')}}"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>
</div>
</div> --}}


{{-- <section class="why-choose-us sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="title">
                        <span>Why Choose Finibus</span>
                        <h2>success is just around the next online corner</h2>
                    </div>
                    <div class="video-demo">
                        <img src="{{ asset('assets/img/play-video.jpg') }}" alt="">
<div class="play-btn">
    <a class="popup-video" href="https://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fas fa-play"></i> Play now</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-6">
    <div class="valuable-skills dark">
        <img src="{{ asset('assets/img/valuable-skill.jpg') }}" alt="">
        <div class="signle-bar">
            <h6>Web Design</h6>
            <div id="bar1" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="90"></span>
            </div>
        </div>
        <div class="signle-bar">
            <h6>App Development</h6>
            <div id="bar2" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="98"></span>
            </div>
        </div>
        <div class="signle-bar">
            <h6>Backend</h6>
            <div id="bar3" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="80"></span>
            </div>
        </div>
        <div class="signle-bar">
            <h6>Video Animation</h6>
            <div id="bar4" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="85"></span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section> --}}


<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="{{ asset('assets/img/testonomial/03.jpeg') }}" alt="">
                                    </div>
                                    <div class="client-details">
                                        <h4>Muhammad Aman</h4>
                                        <span>CTO Founder & CEO</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Cumque veniam perferendis repudiandae ad eaque laborum nulla fugiat quos deleniti
                                    doloremque mollitia ipsam, nihil vel est labore voluptatibus eligendi id aliquid?
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="{{ asset('assets/img/testonomial/hassan.jpg') }}" alt="">
                                    </div>
                                    <div class="client-details">
                                        <h4>Hassan Sabit</h4>
                                        <span>CTO Founder</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Cumque veniam perferendis repudiandae ad eaque laborum nulla fugiat quos deleniti
                                    doloremque mollitia ipsam, nihil vel est labore voluptatibus eligendi id aliquid?
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="{{ asset('assets/img/testonomial/hassan.jpg') }}" alt="">
                                    </div>
                                    <div class="client-details">
                                        <h4>ABDUL QAYYUM</h4>
                                        <span>CTO Founder</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Cumque veniam perferendis repudiandae ad eaque laborum nulla fugiat quos deleniti
                                    doloremque mollitia ipsam, nihil vel est labore voluptatibus eligendi id aliquid?
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="{{ asset('assets/img/testonomial/hassan.jpg') }}" alt="">
                                    </div>
                                    <div class="client-details">
                                        <h4>DANIYAL KHAN</h4>
                                        <span>CEO & Manager</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Cumque veniam perferendis repudiandae ad eaque laborum nulla fugiat quos deleniti
                                    doloremque mollitia ipsam, nihil vel est labore voluptatibus eligendi id aliquid?
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="latest-news sec-mar">
        <div class="container">
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="signle-news dark">
                        <div class="tag">
                            <a href="#">Web Design</a>
                        </div>
                        <div class="post-img">
                            <a href="blog_details.html"><img src="{{ asset('assets/img/post/post-1.jpg') }}" alt=""></a>
</div>
<div class="news-content">
    <div class="author">
        <div class="author-pic">
            <img src="{{ asset('assets/img/author/author-1.jpg') }}" alt="">
        </div>
        <div class="author-info">
            <h5>Posted by, Alen Jodge</h5>
            <span>05 January, 2022</span>
        </div>
    </div>
    <h3><a href="blog_details.html">Donec a porttitor phari sod tellus Nunc quis erosn.</a>
    </h3>
    <p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor
        ti venenatis consectetur eu quis ex.</p>
    <div class="view-btn">
        <a href="blog_details.html">View details</a>
    </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 col-xl-4">
    <div class="signle-news dark">
        <div class="tag">
            <a href="#">Software</a>
        </div>
        <div class="post-img">
            <a href="blog_details.html"><img src="{{ asset('assets/img/post/post-2.jpg') }}" alt=""></a>
        </div>
        <div class="news-content">
            <div class="author">
                <div class="author-pic">
                    <img src="{{ asset('assets/img/author/author-2.jpg') }}" alt="">
                </div>
                <div class="author-info">
                    <h5>Posted by, Kim karden</h5>
                    <span>05 January, 2022</span>
                </div>
            </div>
            <h3><a href="blog_details.html">Mekusa a porttitor phari sod tellus algo quis ksro.</a>
            </h3>
            <p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor
                ti venenatis consectetur eu quis ex.</p>
            <div class="view-btn">
                <a href="blog_details.html">View details</a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 col-xl-4">
    <div class="title">
        <span>Blog</span>
        <h2>Latest news And Article modern design.</h2>
        <div class="cmn-btn">
            <a href="blog.html">View All Blog</a>
        </div>
    </div>
</div>
</div>
</div>
</section> --}}


<section class="lets-talk sec-pad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <div class="title special">
                    <span>Let’s Talk</span>
                    <h2>About Your Next <br /><b>Project</b> Your Mind</h2>
                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-xl-5 text-end">
                <div class="getin-touch">
                    <div class="cmn-btn">
                        <a href="{{url('/contact')}}">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection