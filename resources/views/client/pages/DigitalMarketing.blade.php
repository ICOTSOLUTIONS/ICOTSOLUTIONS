@extends('client.partial.master')
@section('content')
<section class="breadcrumbs2">
    <img src="{{ asset('assets/img/digital/01.jpg') }}" alt="Nature" class="responsive" style="opacity: 0.5;" width="100%" height="700">
</section>
<div class="container mt-5">
    <div class="row">
        <h4 class="text-white text-center font mb-5">Digital Marketing</h4>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-white pa img">
            <p class="para">At ICOT SOLUTIONS, we believe your marketing strategy should create
                unique and engaging experiences that help connect your brand to people to build customer loyalty and
                drive revenue for your business. That's exactly what we do.Our full-service digital marketing
                agency works with you to create multi-channel marketing initiatives that build customer engagement
                from leads to conversions. With our award-winning full-service marketing solutions, we create unique
                and customized experiences that speak to your target audience and initiate acquisitions that result
                in conversions, retention, and loyalty. Our marketing specialists transform your digital marketing
                strategy through executing extensively researched and planned cohesive marketing campaigns. With
                near-constant optimization, we identify gaps and build your brand awareness to deliver the right
                traffic volume to your website and propel your business forward. In addition, we provide marketing
                solutions that will expand your digital presence to give you the edge over your competition and
                drive rapid growth to maximize your ROI potential. Big Drop wants to help create long-term growth
                for your business. </p>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <img class="w-100 bordertop" src="{{ asset('assets/img/digital/02.jpg') }}" alt="">
        </div>
    </div>
</div>
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