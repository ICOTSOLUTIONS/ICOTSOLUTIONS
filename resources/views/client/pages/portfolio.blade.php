@extends('client.partial.master')
@section('content')
<section class="service-area sec-pad">
    <div class="container">
        <div class="row">
            <div class="title">
                <h1 class=" client">OUR HONOURABLE CLIENTS</h1>
            </div>
        </div>
    </div>

    <div class="portfolio-area sec-mar-top">
        <div >
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
                                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg')}}"><i
                                        class="fas fa-search"></i></a>
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
                                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-2.jpg')}}"><i
                                        class="fas fa-search"></i></a>
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
                                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-3.jpg')}}"><i
                                        class="fas fa-search"></i></a>
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
                                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-4.jpg')}}"><i
                                        class="fas fa-search"></i></a>
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
                                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-5.jpg')}}"><i
                                        class="fas fa-search"></i></a>
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
                                <a data-lightbox="image1" href="assets/img/portfolio/portfolio-3.jpg')}}"><i
                                        class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</section>
@endsection