<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home - Proudct</title>
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
            <li><a href="{{url('/')}}" class="active">Home</a></li>
            <li><a href="{{url('/ourwork/photo-product')}}">Our Work</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/blog')}}">Blog</a></li>
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

                    </script> All rights reserved {{ $profile->name }}
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

    <!-- Hero section -->
    <section class="hero-section" style="padding-top: 80px;">
        <div class="hero-slider owl-carousel">
            @if ($promotions) 
                @foreach ($promotions as $promotion)                
                <div class="hero-item">
                    <div class="hero-text" data-aos="zoom-in">
                        <!-- <div class="ht-cata">Nature</div> -->
                        <h2>{{$promotion->title}}</h2>
                        <p>{{$promotion->summary}}</p>
                        <a href="{{url('event/'.$promotion->slug)}}" class="ht-btn mt-3 btn btn-outline-light btn-lg">More Info<i class="arrow_right"></i></a>
                        <a href="{{$promotion->link}}" target="_blank" class="ht-btn mt-3 btn btn-outline-warning btn-lg ml-4">ORDER NOW</a>
                    </div>
                    <div class="hi-bg set-bg" data-setbg="{{ Storage::url($promotion->image) }}"></div>
                </div>
                @endforeach
            @endif
            @foreach ($banners as $banner)             
            <div class="hero-item">
                <div class="hero-text">
                    <!-- <div class="ht-cata">Nature</div> -->
                    <h2>{{$banner->title}}</h2>
                    <p>{{$banner->summary}}</p>
                    <a href="#" class="ht-btn">See More <i class="arrow_right"></i></a>
                </div>
                <div class="hi-bg set-bg" data-setbg="{{Storage::url($banner->image)}}"></div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Hero section end -->

    <!-- Hero section -->
    {{-- <section class="spec-section col-sm-12" style="padding-top: 80px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12 p-0 text-center">
                    <figure class="figure" data-aos="zoom-in-right">
                        <img src="{{ url('frontend/img/360.png') }}" class="figure-img img-fluids" style="max-height: 100px;">
                        <figcaption class="figure-caption text-center">
                            <p>Give your customers the whole picture with 360 photos. Interactive and engaging, 360
                                photos let shoppers
                                rotate, pause, even zoom in on a product image for a closer look—and help boost their
                                confidence in their
                                online purchase.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-6 col-sm-12 p-0 text-center">
                    <figure class="figure" data-aos="zoom-in-left">
                        <img src="{{ url('frontend/img/printer.png') }}" class="figure-img img-fluids" style="max-height: 100px;">
                        <figcaption class="figure-caption text-center">
                            <p>Multiple image sizes are delivered with each photo whether you intend to use
                                them on the
                                web or in high
                                quality prints.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-6 col-sm-12 p-0 text-center">
                    <figure class="figure" data-aos="zoom-in-right">
                        <img src="{{ url('frontend/img/ecommerce1.png') }}" class="figure-img img-fluids" style="max-height: 100px;">
                        <figcaption class="figure-caption text-center">
                            <p>Our photos integrate seamlessly with popular platforms such as Tokopedia, Shopee,
                                Bukalapak, Lazada, etc.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-6 col-sm-12 p-0 text-center">
                    <figure class="figure" data-aos="zoom-in-left">
                        <img src="{{ url('frontend/img/instagram.svg') }}" class="figure-img img-fluids" style="max-height: 100px;">
                        <figcaption class="figure-caption text-center">
                            <p>Our photos optimized for social media feeds such as Instagram.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>   
    </section> --}}
    <!-- Hero section end -->



   
    <section class="mt-5" style="padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ Storage::url($content->image) }}" alt="">
            </div>
            <div class="col-lg-6 text-center">
                <div class="mt-5">
                <h4 style="color: #fff;">{{$about->title}}</h4>
                <br>
                <p>{{$about->summary}}
                </p>
                <a href="#" class="ht-btn" style="color: #fad02c;">See More <i class="arrow_right"></i></a>
                </div>
                <div class="mt-5">
                <h4 style="color: #fff;">{{$content->title}}</h4>
                <br>
                {!!$content->content!!}
                </div>
			</div>
        </div>
    </div>
    </section>

    <section class="mt-5" style="padding-top: 50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 style="color: #fff;">Custom Your Instagram Feeds & Stories!!</h2>
                <br>
                <p>Instagram is the most leading social media platform nowadays, it makes Instagram one of the greatest marketing tool. So, to help you to market your product through Instagram, we also provide Content & Story Customization wich is important to engage audiences on your business Instagram.</p>
			</div>
        </div>
    </div>
    </section>
    
    <section class="features mt-5">
        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col-lg-8 col-sm-12 col-md-12 feature owl-carousel">    
                    @foreach ($feeds as $f)
                    <div class="feature-item">
                      <a href="{{ route('gallery',$f->slug) }}"><img src="{{ Storage::url($f->display->image) }}" alt=""></a>  
                    </div>
                   @endforeach
                </div> 
            </div>
        </div>
    </section>

    <!-- Team section -->
    <section class="latest-work mt-5">
        <div class="container-fluid">
            <div class="text-center mb-5">
                <h2 style="color: #fff;">Latest Work</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($photos as $p)
                <div class="col-xl-2 col-md-4 col-sm-12 p-0 paddinglr">
                    <div class="product-item" data-aos="zoom-in">
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
        </div>
    </section>
    <!-- Team section end -->


    <!-- Footer section -->
    <footer class="footer-section" style="padding-bottom: 0px;">
        <div class="footer-social">
            <a href="#" target="_blank">Facebook</a>
            <a href="{{ $profile->link_whatsapp }}" target="_blank">Whatsapp</a>
            <a href="{{ $profile->instagram }}"target="_blank">Instagram</a>
            <a href="#"target="_blank">Studio</a>
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
    <script>
    $('.feature').owlCarousel({
        loop:true,
        margin:2,
        nav:true,
        autoplay: true,
        smartSpeed: 2000,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }  
        }
    })
    </script>
</body>

</html>
