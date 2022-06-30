@extends('client.partial.master')
@section('content')
    <section class="breadcrumbs">
        <img src="{{ asset('assets/img/hero-slider-1.jpg') }}" alt="Nature" class="responsive" width="100%" height="700">
    </section>
    {{-- <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 img">
                <img class="w-100 img-fluid" src="{{ asset('assets/img/graphic-design.jpeg') }}" alt="">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-white pa">
                <h4 class="text-white font">Graphic Designing</h4>
                <p class="para">If you are Looking for a creative & cost-effective graphics Design
                    Agency for all your Graphics Needs? We are here!
                    Need to market your business / Products and reposition your brand? Then surely you need a
                    professional creative graphics designing service that can output the eye-catching design that can
                    attract customers and helps you to generate sales & to grow your business. Our Creative Designers
                    team is capable of creating such designs according to the standard of your brand, like the way you
                    want it to be.</p>
                <h5 class="text-white">Out Team Expertise In Graphic Designing Are Given Bellow.</h5>
                <ul class="U">
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
    </div> --}}
    <section class="about-area sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="about-left dark">
                        {{-- <div class="title">
                            <span>About us</span>
                            <h2 class="mb-15">Our Mission</h2>
                        </div> --}}
                        <h1 class="para">Graphic Designing</h1>
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
                                    <ul class="U">
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
                <div class="col-lg-6 col-xl-6">
                    <div class="about-right">
                            <img class="w-100 img-fluid" src="{{ asset('assets/img/graphic-design.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
