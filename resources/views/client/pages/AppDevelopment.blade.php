@extends('client.partial.master')
@section('content')
<section class="breadcrumbs2">
    <img src="{{ asset('assets/img/appdev/01.jpg') }}" alt="Nature" class="responsive" style="opacity: 0.5;" width="100%" height="700">
</section>
<div class="container mt-5">
    <div class="row">
        <h4 class="text-white text-center font mb-5">React Native App Development</h4>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-white pa">
            <p class="para">ICOTS uses this conspicuous Hybrid Mobile Application Framework to
                equip the app with vigorous and quick performance.Hybrid app development is one way for companies to
                save money and time. The professional service has tech-savvy experts who work on your hybrid apps,
                taking them to new heights with our react native developer making beautiful creations that can run
                across various platforms! It helps reduce costs while still being speedy in execution- building
                different versions of an application costly takes up quite some valuable resources, but luckily
                there’s always something we’ve got here at Team Reactive with specialized tools all in one smooth
                process.The app designers at ICOTS make personalized Hybrid Mobile apps that are compatible with
                many platforms and customer preferences. We provide high-level solutions for all the applications,
                doing maintenance as well so you can focus on your business goals without worrying about technical
                details like updates or security measures needed in order to maintain a stable application
                portfolio!In this industry, there is always room for improvement which means we’re constantly
                looking into ways of improving our services even more – one-way being budgeting before starting any
                project because it allows us an opportunity not only to give accurate estimates but also to identify
                potential cost.</p>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 img d">
            <img class="w-100 bordertop" src="{{ asset('assets/img/appdev/02.jpg') }}" alt="">
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