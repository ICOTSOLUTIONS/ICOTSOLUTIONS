@extends('client.partial.master')
@section('content')
<section class="breadcrumbs2">
    <img src="{{ asset('assets/img/websitedev/01.jpg') }}" alt="Nature" class="responsive" style="opacity: 0.5;" width="100%" height="700">
</section>
<div class="container mt-5">
    <div class="row">
        <h4 class="text-white text-center font mb-5">Web Development</h4>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 img">
            <img class="w-100 bordertopleft" src="{{ asset('assets/img/websitedev/02.jpg') }}" alt="">
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-white pa">
            <p class="para">Your website creates a digital experience for your brand, making it
                an essential component of your marketing and business strategy.
                ICOT SOLUTIONS provides software innovation and market-leading solutions tailored to your business
                goals and objectives as your trusted web development partner. From conception to delivery, our
                experienced web development team digitally transforms your business through seamless front-end and
                back-end development software that is secure and tailor-made for your company's future. We Develop &
                Design bugs-free save & Secure websites as per our honorable Client’s requirements.</p>
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