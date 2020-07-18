<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Proudct - About</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
	{{-- <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" /> --}}
	<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}"/>
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
			<li><a href="{{url('/about')}}" class="active">About</a></li>
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
					</script> All rights reserved {{ $profile->name}}
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

	<!-- Page top section -->
	<div class="page-top-section">
		<div class="page-top-warp set-bg" data-setbg="{{url('frontend/img/page-bg-1.jpg')}}">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<h2>Hello</h2>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore amet possimus nam error
							magni? Omnis nemo, repellendus dolorem quidem beatae repudiandae.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page top section end -->

	<!-- About section -->
	<section class="about-section">
		<div class="container">
			<div class="row about-item">
				<div class="col-lg-3">
					<h2>Our Story</h2>
				</div>
				<div class="col-lg-9">
					<div class="ai-text">
						<h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, ducimus consequatur
							adipisci delectus distinctio possimus laborum culpa earum iste?
						</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error reiciendis facere autem dolore
							provident animi nisi explicabo eaque iusto beatae quam nobis enim perferendis, minus magnam
							alias vitae, pariatur architecto suscipit qui facilis. Atque autem eum fugiat culpa sit
							facilis dolorum ducimus asperiores corporis odit eveniet perferendis, odio quod, laudantium
							ipsam ad repudiandae vero nemo optio. Obcaecati veniam vel inventore quas mollitia nobis
							cupiditate dolor neque ipsa tenetur. Laboriosam officia soluta esse harum laudantium nemo
							sint. Esse aspernatur quaerat provident quisquam neque necessitatibus, animi adipisci eius
							odio culpa voluptate et illo iure nisi sint earum facere dolorem? Distinctio quos blanditiis
							laboriosam natus maxime adipisci laudantium, quae dignissimos magni. Quae consequuntur
							debitis quibusdam ut voluptas cumque. Cumque cum quo, obcaecati ea officiis architecto?</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end -->

	<!-- Team section -->
	<section class="team-section">
		<div class="container-fluid">
			<div class="text-center text-white mb-5">
				<h2>Our Team</h2>
			</div>
			<div class="row" style="justify-content: center;">
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="team-item">
						<img src="{{url('frontend/img/team-1.jpg')}}" alt="">
						<div class="team-meta">
							<div class="tm-text">
								<h5>dr.Silvy</h5>
								<p>Make Up Artist</p>
								<div class="tm-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="team-item">
						<img src="{{url('frontend/img/team-2.jpg')}}" alt="">
						<div class="team-meta">
							<div class="tm-text">
								<h5>Joshua</h5>
								<p>Photographer</p>
								<div class="tm-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="team-item">
						<img src="{{url('frontend/img/team-3.jpg')}}" alt="">
						<div class="team-meta">
							<div class="tm-text">
								<h5>Miranda</h5>
								<p>Editor</p>
								<div class="tm-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team section end -->

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
</body>

</html>