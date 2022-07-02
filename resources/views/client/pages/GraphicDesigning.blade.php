@extends('client.partial.master')
@section('content')
<section class="breadcrumbs2">
    <img src="{{ asset('assets/img/graphic/01.jpg') }}" alt="Nature" class="responsive" style="opacity: 0.5;" width="100%" height="700">
</section>
<section class="about-area sec-mar">
    <div class="container">
        <div class="row">
            <h1 class="text-light text-center font mb-5">Graphic Designing</h1>
            <div class="col-lg-6 col-xl-6">
                <div class="about-left dark">
                    <p class="para text-white">If you are Looking for a creative & cost-effective graphics Design
                        Agency for all your Graphics Needs? We are here!
                        Need to market your business / Products and reposition your brand? Then surely you need a
                        professional creative graphics designing service that can output the eye-catching design that can
                        attract customers and helps you to generate sales & to grow your business. Our Creative Designers
                        team is capable of creating such designs according to the standard of your brand, like the way you
                        want it to be.</p>
                    <div class="our-mission">
                        <div class="msn-content">
                            <h6 class="text-white">Out Team Expertise In Graphic Designing Are Given Bellow.</h6>
                            <div class="d-flex">
                                <ol>
                                    <li class="text-white">(1) Visual Identity </li>
                                    <li class="text-white">(2) Marketing Advertising </li>
                                    <li class="text-white">(3) User Interface </li>
                                </ol>
                                <ol>
                                    <li class="text-white">(4) Publications Graphic </li>
                                    <li class="text-white">(5) Motion Graphics </li>
                                    <li class="text-white">(6) Environmental Graphics </li>
                                </ol>
                                <ol>
                                    <li class="text-white">(7) Web design </li>
                                    <li class="text-white">(8) Packaging Design </li>
                                    <li class="text-white">(9) Logo Design </li>
                                </ol>
                                <ol>

                                    <li class="text-white">(10) Boucher Design </li>
                                    <li class="text-white">(11) Letterhead Design </li>
                                    <li class="text-white">(12) T-Shirt Designs </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="about-right">
                    <img class="w-100 img-fluid bordertop" src="{{ asset('assets/img/graphic/graphic-design.jpeg') }}" alt="">
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
@endsection