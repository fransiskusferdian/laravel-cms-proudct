<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Product - Blog</title>
    <meta charset="UTF-8">
    <meta name="description" content="Cassi Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/fresco.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" />
<style>
    .related-slider .owl-nav button[type=button] {
    font-size: 30px;
    position: absolute;
    left: -62px;
    top: 25%;
    color: #171717;
    opacity: 0.3;
}

.related-slider .owl-nav button[type=button].owl-next {
    left: auto;
    right: -62px;
    color: #171717;
    opacity: 1;
}

.owl-theme .owl-controls .owl-page {
    display: inline-block;
}
.owl-theme .owl-controls .owl-page span {
    background: none repeat scroll 0 0 #869791;
    border-radius: 20px;
    display: block;
    height: 12px;
    margin: 5px 7px;
    opacity: 0.5;
    width: 12px;
}
</style>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/sass/style.css') }}" />
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section -->
    <div class="offcanvas-menu-wrapper">
        <div class="menu-header">
            <a href="{{url('/')}}" class="site-logo">
                <img src="{{url('frontend/img/logo.png')}}" alt="">
            </a>
            <div class="menu-switch" id="menu-canvas-close">
                <i class="icon_close"></i>
            </div>
        </div>
        <ul class="main-menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/ourwork/photo-product')}}">Our Work</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/blog')}}" class="active">Blog</a></li>
        </ul>
        <div class="menu-footer">
            <div class="footer-social">
                <a href="#" target="_blank">Facebook</a>
                <a href="{{ $profile->link_whatsapp }}" target="_blank">Whatsapp</a>
                <a href="{{ $profile->instagram }}" target="_blank">Instagram</a>
                <a href="#" target="_blank">Studio</a>
            </div>
            <div class="copyright">
                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved {{ $profile->lname }}
                </p>
            </div>
        </div>
    </div>
    <!-- Offcanvas Menu Section end -->

    <!-- Header section -->
    <header id="header" class="header-section headroom header--fixed" style="background-color: #0d2237;">
        <a href="{{url('/')}}" class="site-logo">
            <img src="{{url('frontend/img/logo.png')}}" alt="">
        </a>
        <div class="menu-switch" id="menu-canvas-show">
            <i class="icon_menu"></i>
        </div>
    </header>
    <!-- Header section end -->

    <section class="blog-single-section">
        <div class="blog-single-header set-bg" data-setbg="{{url($post->featured_image)}}">
            <div class="container">
            <div class="fb-cata">{{$post->tags['0']['name']}}</div>
                <h2>{{$post->title}}</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto blog-content">
                  {{!! $post->body !!}}
                </div>
            </div>
        </div>
    </section>

    <section class="related mt-4">
        <div class="container">
            <div class="row">          
                <h3 style="color: white" class="mb-3">Related Tag</h3>
                <div class="related-slider owl-carousel">
                @foreach ($related as $r)            
                    {{-- <div class="blog-col related-item" id="posts"> --}}
                        <div class="blog-item set-bg" data-setbg="{{ $r->featured_image }}">
                            <div class="blog-text">
                                <div class="bi-cata">{{$r->tags['0']['name']}}</div>
                                <h6><a href="{{ route('blog.show', $r->slug) }}">{{ $r->summary }}</a></h6>
                            </div>
                        </div>
                    {{-- </div> --}}
                @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Footer section -->
	<footer class="footer-section" style="padding-bottom: 0px;">
        <div class="footer-social">
            <a href="#" target="_blank">Facebook</a>
            <a href="{{ $profile->link_whatsapp }}" target="_blank">Whatsapp</a>
            <a href="{{ $profile->instagram }}" target="_blank">Instagram</a>
            <a href="#" target="_blank">Studio</a>
        </div>
        <div class="copyright">
            <p>
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());

                </script> {{ $profile->name }}, All rights reserved.
            </p>
        </div>
    </footer>
	<!-- Footer section end -->


    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fresco.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://unpkg.com/headroom.js@0.11.0/dist/headroom.min.js"></script>
    <script>
        (function ($) {
            "use strict";
            // headroom js activation
            var myElement = document.querySelector("header");
            // construct an instance of Headroom, passing the element
            var headroom = new Headroom(myElement);
            // initialise
            headroom.init();
        }(jQuery));

    </script>
    <script>
         $(".related-slider").owlCarousel({
        loop: true,
        margin: 25,
        nav: true,
        items: 3,
        dots: true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        }
    });
    </script>
</body>

</html>
