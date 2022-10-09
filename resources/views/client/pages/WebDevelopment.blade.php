@extends('client.partial.master')
@section('content')

<style>
    .development_bg {
           background: url("{{asset('assets/img/development.jpg') }}");
           /* border: 2px solid red; */
           height: 650px;
           background-size: 100%;
           background-repeat: no-repeat;
           /* background-attachment: fixed; */
           background-position: center;
           background-size: cover;
           position: relative;
       }

       .development_bg::before {
           content: "";
           display: block;
           width: 100%;
           height: 100%;
           background-color: black ;
           position: absolute;
           top: 0;
           left: 0;
           opacity: 0.7;
           /* margin-top: 125px; */
       }

       .development_bg>* {
           z-index: 10;
           position: relative;
       }
       .development_text{
           font-size: 50px;
           margin-top: 210px !important;
           position: absolute;
           margin-left: 110px;
           line-height: 78px;
           font-weight: 500;
           color: #fff;
           padding: 0px 40px;
           width: 80%;
       }
       .dev_text{
        font-size: 65px;
       }
</style>

<section class="breadcrumbs2">
    <div class="development_bg">
        <h2 class="development_text">
            Also, check out our list of garden quotes that inspire personal growth.<br>–<em>Paulo Coelho</em>
        </h2>
    {{-- <img src="{{ asset('assets/img/websitedev/01.jpg') }}" alt="Nature" class="responsive" style="opacity: 0.5;" width="100%" height="700"> --}}
    </div>
</section>
<div class="container mt-5">
    <div class="row">
        <h4 class="text-white mb-5 dev_text">Web Development</h4>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 img">
            <img class="w-100 bordertopleft" src="{{ asset('assets/img/backend.jpg') }}" alt="">
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-white pa">
            <h2>
                Heading Goes Here
            </h2>
            <p class="para">
                Your website creates a digital experience for your brand, making it
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