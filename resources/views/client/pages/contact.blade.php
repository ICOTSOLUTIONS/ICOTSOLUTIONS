@extends('client.partial.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <h1>Contact Us</h1>
                        <span><a href="index-2.html">Home</a><i><img src="assets/img/icons/breadcrumb-arrow.svg"
                                    alt=""></i>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area sec-mar">
        <div class="container">
            <div class="row">
                <div class="col col-xl-6">
                    <div class="title black">
                        {{-- <span>Get In Touch</span> --}}
                        <h2 class="text-white">contact us if you have more questions.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="office-info">
                        <div class="icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h4 class="text-white">Location</h4>
                        <p class="text-white">Pakistan ,Karachi Liaquatabad.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="office-info">
                        <div class="icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h4 class="text-white">Phone</h4>
                        <a href="tel:03360394622" class="text-white">+92 336 0394 622</a>
                        {{-- <a href="tel:013456789102" class="text-white">+012-3456-789102</a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="office-info">
                        <div class="icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <h4 class="text-white">Email</h4>
                        <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#f891969e97b89d80999588949dd69b9795"><span
                                class="__cf_email__ text-white"
                                data-cfemail="056c6b636a45607d64687569602b666a68">icotsolutions@gmail.com</span></a>
                        {{-- <a
                            href="https://demo.egenslab.com/cdn-cgi/l/email-protection#92e1e7e2e2fde0e6d2f7eaf3ffe2fef7bcf1fdff"><span
                                class="__cf_email__"
                                data-cfemail="3d4e484d4d524f497d58455c504d5158135e5250" class="text-white">[email&#160;protected]</span></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-information">
            <div class="container">
                <div class="row c">
                    <div class="col-lg-6 col-xl-6">
                        <div class="contact-form">
                            <h3>Have Any Questions</h3>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" cols="30" rows="10" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.8936415110775!2d67.05371441499015!3d24.901609284034528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fc219dfb981%3A0xdc1064dba86c11b2!2sIcots!5e0!3m2!1sen!2s!4v1656518832631!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
