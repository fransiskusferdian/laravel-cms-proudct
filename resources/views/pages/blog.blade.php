<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Proudct - Blog</title>
    <meta charset="UTF-8">
    <meta name="description" content="Cassi Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" />

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

                    </script> All rights reserved Show Me Your Wish Production
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

    <section class="blog-section">
        
        {{-- <div class="feature-blog set-bg" data-setbg="{{url('frontend/img/blog/big.jpg')}}">
            <div class="container">
                <div class="fb-cata">Nature</div>
                <h2>The Function Of The Logo</h2>
                <p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative
                    lifestyle photo studio making emotional photography.</p>
                <a href="#" class="site-btn">Read More <i class="arrow_right"></i></a>
            </div>
        </div> --}}
            <div class="text-center" style="margin-top: 95px;">
                <h2 style="color: white" class="mb-4">Blog</h2>
                <a href="{{url('/blog')}}" class="@if($selectedtag == 'all') active @endif btn btn-outline-warning" >All</a>
                @foreach ($tags as $tag)            
                    <a href="{{url('blog/tag',$tag->slug)}}" class=" @if($selectedtag == $tag->slug) active @endif btn btn-outline-warning">{{$tag->name }}  </a>
                @endforeach
            </div>
        
            <div class="blog-post-items mt-4">
                @foreach ($posts as $post)
                <div class="blog-col" id="posts">
                    <div class="blog-item set-bg" data-setbg="{{ $post->featured_image }}">
                        <div class="blog-text">
                            <div class="bi-cata">{{$post->tags['0']['name']}}</div>
                            <h6><a href="{{ route('blog.show', $post->slug) }}">{{ $post->summary }}</a></h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{$posts->links()}}
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
    {{-- <script>
        $(function() {
  var $posts = $("#posts");
  var $ul = $("ul.pagination");
  $ul.hide(); // Prevent the default Laravel paginator from showing, but we need the links...

  $(".see-more").click(function(event) {
      event.preventDefault();
      $.get($ul.find("a[rel='next']").attr("href"), function(response) {
           $posts.append(
               $(response).find("#posts").html()
           );
      });
  });
});
    </script> --}}

    <script>
        $("#next").click(function(){

        $("#lanjut").attr("href"), function(response) {
           $posts.append($(response).find("#posts").html());
        };
        });
    
    </script>
</body>

</html>
