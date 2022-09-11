<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{('assets/img/logo/icotsolutions_favicon.png')}}">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">

    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jQuery-plugin-progressbar.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/barfiller.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>ICOTSOLUTIONS</title>
</head>
<style>
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background-color: #111215;
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background: linear-gradient(90deg, #D90A2C 1.05%, #730000 100%);
    }
</style>

<body class="dark">
    <div class="cursor"></div>
    <div class="cursor2"></div>

    <div class="preloader_area_wrap">
        <div class="sk-cube-grid">
            <img src="{{asset('assets/img/logo/Icot-loader.gif')}}" alt="" srcset="">
            <!-- <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div> -->
        </div>
    </div>

    <!-- whatsapp -->
    <a href="https://wa.me/+923360394622" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- end -->

    <div class="main">
        @include('client.partial.header')
        @yield('content')
        @include('client.partial.footer')

        <div class="scroll-top">
            <span>Top<i class="bi bi-arrow-up"></i></span>
        </div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/js/jQuery-plugin-progressbar.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 250,
            duration: 1200,
        });

        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml2');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml2 .letter',
                scale: [4, 1],
                opacity: [0, 1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70 * i
            }).add({
                targets: '.ml2',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    </script>
</body>

</html>