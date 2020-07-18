<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Proudct - Ourwork</title>
    <meta charset="UTF-8">
    <meta name="description" content="Cassi Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
      <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/sass/style.css') }}"/>


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
        <div class="menu-header" style="color: white;">
            <a href="{{url('/')}}" class="site-logo">
                <img src="{{url('frontend/img/logo.png')}}" alt="">
            </a>
            <div class="menu-switch" id="menu-canvas-close">
                <i class="icon_close"></i>
            </div>
        </div>
        <ul class="main-menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/ourwork/photo-product')}}" class="active">Our Work</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/blog')}}">Blog</a></li>
        </ul>
        <div class="menu-footer">
            <div class="footer-social">
                <a href="#" target="_blank">Facebook</a>
                <a href="{{ $profile->name }}" target="_blank">Whatsapp</a>
                <a href="{{ $profile->instagram }}" target="_blank">Instagram</a>
                <a href="#" target="_blank">Studio</a>
            </div>
            <div class="copyright">
                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved {{ $profile->name}}
                </p>
            </div>
        </div>
    </div>
    <!-- Offcanvas Menu Section end -->

    <!-- Header section -->
    <header id="header" class="header-section headroom header--fixed" style="background-color: #0d2237;">
        <a href="{{url('/')}}" class="site-logo">
            <img src="{{url('frontend/img/logo.png')}}">
        </a>
        <div class="menu-switch" id="menu-canvas-show">
            <i class="icon_menu"></i>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Team section -->
    <section class="latest-work" style="padding-top: 80px;">
        <div class="container">
            <div class="text-center">
                <h2 style="color: white" class="mb-4">Our Work</h2>
                @foreach ($categories as $category)            
                    <a href="{{$category->slug}}" class="@if($selected == $category->slug) active @endif  btn btn-outline-warning">{{$category->name }}</a>
                @endforeach
            </div>
        
            <div class="row justify-content-center mt-4">
                @foreach ($portfolios as $p)
                <div class="col-xl-3 col-md-4 col-sm-6 p-0 paddinglr">
                    <div class="product-item">
                        <img src="{{ Storage::url($p->display->image) }}" alt="">
                        <div class="product-meta">
                            <div class="prod-text">
                                <h5>{{$p->name}}</h5>
                                <div class="prod-social">
                                    <a href="{{ route('gallery',$p->slug) }}" class="btn btn-dark">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
             <div class="d-flex justify-content-center mt-5">
                {{$portfolios->links()}}
            </div>
        </div>
    </section>
    <!-- Team section end -->

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
    <script src=" {{ asset('frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
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
</body>

</html>