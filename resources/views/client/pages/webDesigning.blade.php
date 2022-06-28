@extends('client.partial.master')
@section('content')
<section class="breadcrumbs">
    <img src="{{ asset('assets/img/hero-slider-1.jpg') }}" alt="Nature" class="responsive" width="100%" height="700">
</section>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-white pat">
            <h4 class="text-white font ">Web Designing</h4>
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
            <img class="w-100" src="{{ asset('assets/img/webDesigning.jpeg') }}" alt="">
        </div>
    </div>
</div>
@endsection
