@extends('client.partial.master')
@section('content')
<section class="breadcrumbs2">
    <img src="{{ asset('assets/img/portfolio/01.jpg') }}" alt="Nature" class="responsive" style="opacity: 0.5;" width="100%" height="700">
</section>
<!-- <section class="service-area sec-pad">
    <div class="container">
        <div class="row">
            <div class="title">
                <h1 class=" client">OUR HONOURABLE CLIENTS</h1>
            </div>
        </div>
    </div>

    <div class="portfolio-area sec-mar-top">
        <div>
            <div class="row">
                {{-- <div class="col-12 col-lg-7 col-xl-5"> --}}
                <div class="title">
                    <h1 class="h">OUR WORK SPEAKS MORE THEN OUR WORDS</h1>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        <div class="swiper portfolio-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-portfolio">
                        <div class="portfolio-data">
                            <a href="#"><img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" alt=""></a>
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
    </div> -->

<section class="breadcrumbs2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Project masonry</h1>
                    <span><a href="{{url('/')}}">Home</a><i><img src="assets/img/icons/breadcrumb-arrow.svg" alt="" /></i>Project masonry</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-area2">
    <div class="container-fluid g-0">
        <div class="row g-0 portfolio-masonary-wrapper">
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-1.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>WEBSITE</span>
                        <h4>WEB APP</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/webDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-1.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-2.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>WEBSITE</span>
                        <h4>WEB APP</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/webDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-2.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-3.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>WEBSITE</span>
                        <h4>WEB APP</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/webDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-3.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-6.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>WEBSITE</span>
                        <h4>WEB APP</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/webDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-6.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-4.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>WEBSITE</span>
                        <h4>WEB APP</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/webDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-4.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-5.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>WEBSITE</span>
                        <h4>WEB APP</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/webDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-5.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-7.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>WEBSITE</span>
                        <h4>WEB APP</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/webDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-7.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-8.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>UI & UX</span>
                        <h4>Design demo</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/webDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-8.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-9.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>APP</span>
                        <h4>MOBILE APPLICATIONS</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/AppDevelopment')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-9.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-12.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>APP</span>
                        <h4>MOBILE APPLICATIONS</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/AppDevelopment')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-12.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-10.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Graphic</span>
                        <h4>let love with Arts</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/GraphicDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-10.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                <div class="single-portfolio masonary">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/masonary-11.jpg" alt="" /></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Graphic</span>
                        <h4>let love with Arts</h4>
                        <div class="portfolio-hover">
                            <a href="{{url('/GraphicDesigning')}}" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/masonary-11.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

</section>
@endsection