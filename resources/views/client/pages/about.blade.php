@extends('client.partial.master')
@section('content')
    <style>
        .bg_img_main {
            background: url("{{ asset('assets/img/about_bg.jpg') }}");
            /* border: 2px solid red; */
            height: 650px;
            background-size: 100%;
            background-repeat: no-repeat;
            /* background-attachment: fixed; */
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .bg_img_main::before {
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            background-color: black;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.5;
            /* margin-top: 125px; */
        }

        .bg_img_main>* {
            z-index: 10;
            position: relative;
        }

        .about_text {
            font-size: 65px;
            margin-top: 210px !important;
            position: absolute;
            margin-left: 130px
        }
    </style>
    <section class="bg_img_main">
        {{-- <img src="{{ asset('assets/img/bannarimg/bannar04.jpg') }}" alt="Nature" class="responsive" style="opacity: 0.5;" width="100%" height="700"> --}}
        <div>
            <h2 class="about_text text-light">
                About Our Company
            </h2>
        </div>


    </section>

    <section class="about-area sec-mar">
        <div class="container">
            <div class="out-story">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-15" style="color: #d90a2c; font-size:70px; padding: 40px;">Welcome to
                            ICOTS</h2>
                    </div>
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
                                    <h4>ICOTS's Services</h4>
                                    <p>Create your Dream with a beautiful and premium product for multipurpose Bugs free
                                        save & Secure Websites with Digital Solutions from Web Design and Digital Marketing
                                        Company in Pakistan.</p>
                                    {{-- <a href="{{ url('/webDesigning') }}">read more<i><img
                                                src="{{ asset('assets/img/icons/arrow-circle.png') }}"
                                                alt=""></i></a> --}}
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
                                    <h4>Our Specialization</h4>
                                    <p>We specialize in Web Design & Development, Web App Development, Android & IOS
                                        Applications Design & Development, Digital Marketing, E-Commerce App Development,
                                        Multimedia Solutions, Content Creation, and Graphic Design. We build Web Solutions,
                                        which develop gradually with the updated languages & changing needs of your
                                        business.</p>

                                    {{-- <a href="{{ url('/WebDevelopment') }}">read more<i><img
                                                src="{{ asset('assets/img/icons/arrow-circle.png') }}"
                                                alt=""></i></a> --}}
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
                                    <h4>We Got You Covered</h4>
                                    <p>ICOTS's Professionalism, Skills, and Expertise are the tools we use to make the
                                        professional websites for your business bringing in a maximal return on your
                                        investment in the shortest time. For our very challenging and internet-savvy
                                        customers spread across the globe, we have produced variable complexities on IT
                                        projects. We are developing distinctive internet solutions that guarantee greater
                                        effectiveness and competitive advantage for your company and therefore for your
                                        end-users.</p>
                                    {{-- <a href="{{ url('/AppDevelopment') }}">read more<i><img
                                                src="{{ asset('assets/img/icons/arrow-circle.png') }}"
                                                alt=""></i></a> --}}
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
                                    <h4>Advanced Communication</h4>
                                    <p>ICOTS’s project managers and business analysts set great value for building a clean
                                        and decent communication link with you as they acknowledge it as the key ingredient
                                        for the success of any project. ICOT’s team members are not only IT professionals
                                        but they also have well-developed communication skills and people skills that work
                                        in tandem with your needs. They are known to take care of every minute detail, and
                                        thus what you communicate is taken on board, discussed, and responded to in a
                                        specified period during the building process of your project.</p>
                                    {{-- <a href="{{ url('/DigitalMarketing') }}">read more<i><img
                                                src="{{ asset('assets/img/icons/arrow-circle.png') }}"
                                                alt=""></i></a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>







                {{--  --}}

                {{-- <div class="row">
                    <div class="col-md-6 ">
                        <div class="story-right">
                            <div class="title black">

                                <h2 class="mb-15 text-center" style="color: white;">ICOTS's Services</h2>
                            </div>
                            <p class="pa text-center" style="color: white;">Create your Dream with a beautiful and premium
                                product for multipurpose Bugs free save & Secure Websites with Digital Solutions from Web
                                Design and Digital Marketing Company in Pakistan.
                                .</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="story-right">
                            <div class="title black">

                                <h2 class="mb-15 text-center" style="color: white;">Our Specialization</h2>
                            </div>
                            <p class="pa text-center" style="color: white;">We specialize in Web Design & Development, Web
                                App Development, Android & IOS Applications Design & Development, Digital Marketing,
                                E-Commerce App Development, Multimedia Solutions, Content Creation, and Graphic Design. We
                                build Web Solutions, which develop gradually with the updated languages & changing needs of
                                your business</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="story-right">
                        <div class="title black">

                            <h2 class="mb-15 text-center" style="color: white;">We Got You Covered</h2>
                        </div>
                        <p class="pa text-center" style="color: white;">ICOTS's Professionalism, Skills, and Expertise are
                            the tools we use to make the professional websites for your business bringing in a maximal
                            return on your investment in the shortest time. For our very challenging and internet-savvy
                            customers spread across the globe, we have produced variable complexities on IT projects. We are
                            developing distinctive internet solutions that guarantee greater effectiveness and competitive
                            advantage for your company and therefore for your end-users.</p>
                    </div>
                </div>
                <div class="col-md-6  ">
                    <div class="story-right">
                        <div class="title black">

                            <h2 class="mb-15 text-center" style="color: white;">Advanced Communication</h2>
                        </div>
                        <p class="pa text-center" style="color: white;">ICOTS’s project managers and business analysts set
                            great value for building a clean and decent communication link with you as they acknowledge it
                            as the key ingredient for the success of any project.
                            ICOT’s team members are not only IT professionals but they also have well-developed
                            communication skills and people skills that work in tandem with your needs. They are known to
                            take care of every minute detail, and thus what you communicate is taken on board, discussed,
                            and responded to in a specified period during the building process of your project.</p>
                    </div>
                </div>
            </div> --}}
        </div>
        </div>
        </div>
    </section>
    {{-- <section class="about-area sec-mar">
        <div class="container">
            <div class="out-story">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="story-left">
                            <div class="office-group-img">
                                <img src="assets/img/story.png" alt="">
                                <div class="cto-message-wrapper">
                                    <div class="cto-message">
                                        <p >Integer purus odio, placerat neclessi rhoncus in, ullamcorper nec dolor.ol aptent
                                            taciti sociosqu.</p>
                                        <h4>Carlo Rabil. <span>CTO & FOUNDER, Finibus</span></h4>
                                        <img src="assets/img/cto-signature.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="story-right">
                            <div class="title black">
                                {{-- <span>Inside Story</span> --}}
    {{-- <h2 class="mb-15 text-white">Services</h2> --}}
    {{-- </div>
                            <p class="para text-white">Create your Dream with a beautiful and premium
                                product for multipurpose Bugs free save & Secure Websites with Digital Solutions from Web
                                Design and Digital Marketing Company in Pakistan.
                                .</p>
                            <div class="story-skills">
                                <div class="story-skill">
                                    <div class="progress-bar-circle" data-percent="90" data-duration="1000"></div>
                                    <span>Idea & Research</span>
                                </div>
                                <div class="story-skill">
                                    <div class="progress-bar-circle" data-percent="95" data-duration="1000"></div>
                                    <span>Wirfirm & Design</span>
                                </div>
                                <div class="story-skill">
                                    <div class="progress-bar-circle" data-percent="85" data-duration="1000"></div>
                                    <span>Developing & Launch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
    {{-- <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="about-left">
                        <div class="title black">
                            <span>About us</span>
                            <h2 class="mb-15 text-white">Direction with our company.</h2>
                        </div>
                        <p class="text-white">Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. Classe aptent taciti sociosqu
                            ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent nec neque at dolor
                            venenatis consectetur eu quis ei Donec lacinia placerat felis non aliquam.Integer purus odio.
                        </p>
                        <div class="our-mission">
                            <div class="msn-icon">
                                <i><img src="assets/img/icons/mission-icon.png" alt=""></i>
                            </div>
                            <div class="msn-content">
                                <h5 class="text-white">Our Mission</h5>
                                <p class="text-white">Our WORK SPEAKS MORE THAN OUR WORDS.</p>
                            </div>
                            <div class="cto">
                                <img src="assets/img/ctoFounder.png" alt="">
                            </div>
                        </div>
                        {{-- <div class="cmn-btn">
                            <a href="about.html">About more</a>
                        </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}x
    {{-- <div class="col-lg-6 col-xl-6">
                    <div class="about-right">
                        <div class="group-images">
                            <img src="assets/img/about-bottom.jpg" alt="">
                            <div class="about-top">
                                <img src="assets/img/about-top.png" alt="">
                            </div>
                            <div class="about-skills">
                                <div class="signle-skill">
                                    <div class="progress-bar-circle" data-percent="90" data-duration="1000"></div>
                                    <div class="skill-content">
                                        <h6>web</h6>
                                        <p>Clean Design</p>
                                    </div>
                                </div>
                                <div class="signle-skill">
                                    <div class="progress-bar-circle" data-percent="85" data-duration="1000"></div>
                                    <div class="skill-content">
                                        <h6>App</h6>
                                        <p>Developing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
    {{-- </div> --}}
    {{-- <div class="features-count">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="single-count">
                            <i><img src="{{ asset('assets/img/icons/count-1.png') }}" alt=""></i>
<div class="counter">
    <span class="odometer">150</span><sup>+</sup>
</div>
<p>Project Completed</p>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
    <div class="single-count">
        <i><img src="{{ asset('assets/img/icons/count-2.png') }}" alt=""></i>
        <div class="counter">
            <span class="odometer">250</span><sup>+</sup>
        </div>
        <p>Satisfied Clients</p>
    </div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
    <div class="single-count">
        <i><img src="{{ asset('assets/img/icons/count-3.png') }}" alt=""></i>
        <div class="counter">
            <span class="odometer">150</span><sup>+</sup>
        </div>
        <p>Expert Teams</p>
    </div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
    <div class="single-count xsm">
        <i><img src="{{ asset('assets/img/icons/count-4.png') }}" alt=""></i>
        <div class="counter">
            <span class="odometer">28</span><sup>+</sup>
        </div>
        <p>Win Awards</p>
    </div>
</div>
</div>
</div> --}}
    </div>
    </section> --}}

    <section class="about-area sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="about-left dark">
                        <div class="title">
                            {{-- <span>About us</span> --}}
                            <h2 class="mb-15">Our Mission</h2>
                        </div>
                        <h3 class="para">Our WORK SPEAKS MORE THAN OUR WORDS.</h3>
                        <p class="para text-white">To be our clients' trusted partner, helping them enhance their business
                            performance by providing them with innovative, state-of-the-art software
                            solutions, automated and integrated workflows and business processes, and
                            the highest quality of, and quickest turnaround times for IT and IT-enabled
                            services. We believe that we exist to serve our customers with mutual
                            respect and care.</p>
                        <div class="our-mission">
                            <div class="msn-icon">
                                <i><img src="{{ asset('assets/img/icons/mission-icon.png') }}" alt=""></i>
                            </div>
                            <div class="msn-content">
                                <h5>OUR VISION</h5>
                                <h6 class="text-white">Our First Priority is the Satisfaction of our honourable clients.
                                </h6>
                                <p class="para text-white">To be recognized by our customers, employees, stakeholders,
                                    vendors,
                                    partners, and competitors as the number one Software house and IT-enabled
                                    services provider in Pakistan.</p>
                            </div>
                            {{-- <div class="cto">
                                    <img src="{{ asset('assets/img/ctoFounder-dark.png') }}" alt="">
                    </div> --}}
                        </div>
                        {{-- <div class="cmn-btn">
                            <a href="about.html">About more</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="about-right">
                        <div class="group-images">
                            <img src="{{ asset('assets/img/about-bottom.jpg') }}" alt="">
                            <div class="about-top">
                                <img src="{{ asset('assets/img/about-top.png') }}" alt="">
                            </div>
                            <div class="about-skills">
                                <div class="signle-skill">
                                    <div class="progress-bar-circle" data-percent="90" data-duration="1000"></div>
                                    <div class="skill-content">
                                        <h6>web</h6>
                                        <p>Clean Design</p>
                                    </div>
                                </div>
                                <div class="signle-skill xsm">
                                    <div class="progress-bar-circle" data-percent="85" data-duration="1000"></div>
                                    <div class="skill-content">
                                        <h6>App</h6>
                                        <p>Developing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-count">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="single-count">
                            <i><img src="{{ asset('assets/img/icons/count-1.png') }}" alt=""></i>
                            <div class="counter">
                                <span class="odometer">150</span><sup>+</sup>
                            </div>
                            <p>Project Completed</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="single-count">
                            <i><img src="{{ asset('assets/img/icons/count-2.png') }}" alt=""></i>
                            <div class="counter">
                                <span class="odometer">250</span><sup>+</sup>
                            </div>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="single-count">
                            <i><img src="{{ asset('assets/img/icons/count-3.png') }}" alt=""></i>
                            <div class="counter">
                                <span class="odometer">150</span><sup>+</sup>
                            </div>
                            <p>Expert Teams</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="single-count xsm">
                            <i><img src="{{ asset('assets/img/icons/count-4.png') }}" alt=""></i>
                            <div class="counter">
                                <span class="odometer">28</span><sup>+</sup>
                            </div>
                            <p>Win Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                    <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit.
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
                                    <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit.
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
                                    <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit.
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
                                    <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit.
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
                            <a href="{{ url('/contact') }}">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="why-choose-us sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="title black">
                        <span>Why Choose Finibus</span>
                        <h2 class="mb-15">success is just around the next online corner</h2>
                    </div>
                    <div class="video-demo">
                        <img src="assets/img/play-video.jpg" alt="">
                        <div class="play-btn">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                    class="fas fa-play"></i> Play now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="valuable-skills">
                        <img src="assets/img/valuable-skill.jpg" alt="">
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
                            <h6>Video Animtion</h6>
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


    {{-- <section class="latest-news sec-mar">
        <div class="container">
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="signle-news">
                        <div class="tag">
                            <a href="#">Web Design</a>
                        </div>
                        <div class="post-img">
                            <a href="blog_details.html"><img src="assets/img/post/post-1.jpg" alt=""></a>
                        </div>
                        <div class="news-content">
                            <div class="author">
                                <div class="author-pic">
                                    <img src="assets/img/author/author-1.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h5>Posted by, Alen Jodge</h5>
                                    <span>05 January, 2021</span>
                                </div>
                            </div>
                            <h3><a href="blog_details.html">Donec a porttitor phari sod tellus Nunc quis erosn.</a></h3>
                            <p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti
                                venenatis consectetur eu quis ex.</p>
                            <div class="view-btn">
                                <a href="blog_details.html">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="signle-news">
                        <div class="tag">
                            <a href="#">Software</a>
                        </div>
                        <div class="post-img">
                            <a href="blog_details.html"><img src="assets/img/post/post-2.jpg" alt=""></a>
                        </div>
                        <div class="news-content">
                            <div class="author">
                                <div class="author-pic">
                                    <img src="assets/img/author/author-2.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h5>Posted by, Alen Jodge</h5>
                                    <span>05 January, 2021</span>
                                </div>
                            </div>
                            <h3><a href="blog_details.html">Mekusa a porttitor phari sod tellus algo quis ksro.</a></h3>
                            <p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti
                                venenatis consectetur eu quis ex.</p>
                            <div class="view-btn">
                                <a href="blog_details.html">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="title black">
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
