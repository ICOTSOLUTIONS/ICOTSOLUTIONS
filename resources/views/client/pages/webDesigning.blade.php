@extends('client.partial.master')
@section('content')
<section class="breadcrumbs2">
    <div class="col-12">

        <img src="{{ asset('assets/img/website/website.jpg') }}" alt="Nature" class="responsive" style="opacity: 0.5;" width="100%" height="700">
    </div>
</section>
<div class="container mt-5">
    <div class="row">
        <h4 class="text-white text-center font mb-5">Web Designing</h4>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-white pat">
            <p class="para">Grow your digital presence with our human-centered, compelling, and
                future-proof approach to web design. At ICOT SOLUTIONS, we are not just another web design company.
                Our design team is where you should turn when you need a strategic vision to set you apart from the
                competition while creating future growth. Your website is a vast experience of your brand's story.
                We initiate a collaborative process where your team is involved in every step to create a
                frictionless and delightful experience for your customers. Our designers immerse themselves in your
                industry and your brand aesthetic to deliver a website that represents your business while achieving
                your goals for a connected future. </p>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 img d">
            <img class="w-100 bordertop" src="{{ asset('assets/img/website/content.jpg') }}" alt="">
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