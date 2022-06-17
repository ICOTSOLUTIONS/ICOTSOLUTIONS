<header class="position_top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-2">
                <div class="logo">
                    <a href="#"><img src="assets/img/logo/icotsolutions3.png" alt=""></a>
                </div>
            </div>
            <div class="col col-sm-5 col-md-6 col-lg-6 col-xl-8 text-end">
                <nav class="main-nav">
                    <div class="mobile-menu-logo">
                        <a href="index-2.html"><img src="assets/img/logo/icotsolutions3.png" alt=""></a>
                    </div>
                    <ul>
                        <li class="">
                            <a href="#">Home</a>
                            {{-- <i class="bi bi-chevron-down"></i> --}}
                            {{-- <ul class="sub-menu">
                                <li><a href="index-2.html">Home 01</a></li>
                                <li><a href="index2.html">Home 02</a></li>
                            </ul> --}}
                        </li>
                        <li><a href="{{url('/about')}}">About us</a></li>
                        <li class="has-child">
                            <a href="{{url('/service')}}">Services</a>
                            <i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <li><a href="services.html">Web Development</a></li>
                                <li><a href="service-details.html">App Development</a></li>
                                <li><a href="service-details.html">Graphic Design</a></li>
                                <li><a href="service-details.html">Social Media Marketing</a></li>
                                <li><a href="service-details.html">Content Writing</a></li>
                                <li><a href="service-details.html">Domain & Hosting</a></li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="{{url('/portfolio')}}">Portfolio</a>
                            {{-- <i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <li><a href="project.html">Project</a></li>
                                <li><a href="project2.html">Project masonry</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul> --}}
                        </li>
                        {{-- <li class="has-child">
                            <a href="blog.html">Blogs</a>
                            <i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog2.html">Blog standard</a></li>
                                <li><a href="blog_details.html">Blog Details</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="has-child">
                            <a href="#">Pages</a>
                            <i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <li><a href="commingsoon.html">Comming soon</a></li>
                                <li><a href="error.html">Error 404</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="contact.html">Contact us</a></li> --}}
                    </ul>
                    {{-- <div class="get-quate dn">
                        <div class="cmn-btn">
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div> --}}
                </nav>
                <div class="mobile-menu">
                    <a href="javascript:void(0)" class="cross-btn">
                        <span class="cross-top"></span>
                        <span class="cross-middle"></span>
                        <span class="cross-bottom"></span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 text-end">
                <div class="get-quate">
                    <div class="cmn-btn">
                        <a href="{{url('/contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>