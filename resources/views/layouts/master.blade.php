<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<title>Proconnect </title>
	<!-- <meta name="description" content="Orixy - Digital Agency HTML Template
	"> -->
	<!-- <meta name="keywords" content="advertising, advertising agency, agency, agency theme, business, creative agency, digital, digital advertising, digital agency, digital marketing, digital marketing agency, digital theme, marketing, startup">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon"> -->
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
	integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/odometer-theme-default.css') }}">
	<link rel="stylesheet" href="{{ asset('css/video.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('css/global.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
	<link rel="stylesheet" href="{{ asset('css/rs6.css') }}">
</head>
<body class="digital-agency-2">
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
	<div class="cursor"></div>

<!-- Start of header section
	============================================= -->
	<header id="ori-header" class="ori-header-section header-style-seven">
		<div class="ori-header-content-area">
			<div class="ori-header-content d-flex align-items-center justify-content-between">
				<div class="brand-logo">
					<a href="{{ asset('index') }}"><img src="{{ asset('img/logo/logo5.png') }}" alt=""></a>
				</div>
				<div class="ori-main-navigation-cta-btn d-flex align-items-center">
					<div class="ori-main-navigation-area">
						<nav class="ori-main-navigation clearfix ul-li">
							<ul id="main-nav" class="nav navbar-nav clearfix">
								<li class="dropdown ori-megamenu">
									<a href="{{ asset('index') }}">Home</a>
								</li>
								<li class="dropdown">
									<a>Services</a>
									<ul class="dropdown-menu clearfix">
										<li><a href="{{ asset('services/web-design') }}">Web Design</a></li>
										<li><a href="{{ asset('services/seo') }}">SEO</a></li>
										<li><a href="{{ asset('services/data') }}">Data</a></li>
										<li><a href="{{ asset('services/content') }}">Content</a></li>
										<li><a href="{{ asset('services/formation') }}">Formation</a></li>
										<li><a href="{{ asset('services/media') }}">Media</a></li>
										<li><a href="{{ asset('services/social') }}">Social</a></li>
									</ul>
								</li>
								<li><a href="{{ asset('about') }}">About</a></li>
								<li><a href="{{ asset('contact') }}">Contact</a></li>
								<li><a href="{{ asset('faq') }}">FAQ</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="mobile_menu position-relative">
				<div class="mobile_menu_button open_mobile_menu">
					<i class="fal fa-bars"></i>
				</div>
				<div class="mobile_menu_wrap">
					<div class="mobile_menu_overlay open_mobile_menu"></div>
					<div class="mobile_menu_content">
						<div class="mobile_menu_close open_mobile_menu">
							<i class="fal fa-times"></i>
						</div>
						<div class="m-brand-logo">
							<a  href="{{ asset('index') }}"><img src="{{ asset('img/logo/logo1.png') }}" alt=""></a>
						</div>
						<nav class="mobile-main-navigation  clearfix ul-li">
							<ul id="m-main-nav" class="nav navbar-nav clearfix">
								<li class="ori-megamenu"><a href="{{ asset('index') }}">Home</a></li>
								<li class="dropdown">
									<a href="#">Services</a>
									<ul class="dropdown-menu clearfix">
										<li><a href="{{ asset('services/web-design') }}">Web Design</a></li>
										<li><a href="{{ asset('services/seo') }}">SEO</a></li>
										<li><a href="{{ asset('services/data') }}">Data</a></li>
										<li><a href="{{ asset('services/content') }}">Content</a></li>
										<li><a href="{{ asset('services/formation') }}">Formation</a></li>
										<li><a href="{{ asset('services/media') }}">Media</a></li>
										<li><a href="{{ asset('services/social') }}">Social</a></li>
									</ul>
								</li>
								<li><a href="{{ asset('about') }}">About</a></li>
								<li><a href="{{ asset('contact') }}">Contact</a></li>
								<li><a href="{{ asset('faq') }}">FAQ</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /Mobile-Menu -->
			</div>
		</div>
	</header>
<!-- End of header section
	============================================= -->

@yield('content')

<!-- Start of Footer CTA section
	============================================= -->
	<section id="ori-footer-cta-7" class="ori-footer-cta-section-7">
		<div class="container">
			<div class="ori-footer-content-7 position-relative">
				<div class="row">
					<div class="ori-footer-cta-text-7 text-center">
						<h3>Looking expand your business?</h3>
						<div class="ori-btn-7">
							<a href="/contact">Contact With Us <i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>					
<!-- End of Footer cta section
	============================================= -->

<!-- Start of Footer  section
	============================================= -->
	<footer id="ori-footer" class="ori-footer-section footer-style-seven">
		<div class="ori-footer-content-wrap">
			<div class="container">
				<div class="ori-footer-content-area">
					<div class="row">
						<div class="col-md-6">
							<div class="ori-footer-text">
								Here is where ambition and creativity converge, sincerity fosters teamwork, and impossibility yields to cooperation.
							</div>
						</div>
						<div class="col-md-6">
							<div class="ori-footer-newslatter">
								<form action="#" method="get">
									<div class="newslatter-form position-relative">
										<input class="email-field" type="email" name="email" placeholder="Your email address">
										<button type="submit">SUBSCRIBE</button>
									</div>
									<p><input class="checkbox-field" type="checkbox">*I have read the <a href="#">Privacy Policy </a> and agree
									to its terms.</p>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="ori-footer-logo-social d-flex justify-content-between align-items-center">
					<div class="ori-footer-logo">
						<div class="brand-logo">
							<a href="{{ asset('index') }}"><img src="{{ asset('img/logo/logo6.png') }}" alt=""></a>
						</div>
					</div>
					<div class="ori-footer-social">
						<a href="#"><i class="fab fa-facebook-f fa-3x"></i></a>
						<a href="#"><i class="fab fa-twitter fa-3x"></i></a>
						<a href="#"><i class="fab fa-instagram fa-3x"></i></a>
						<a href="#"><i class="fab fa-youtube fa-3x"></i></a>
					</div>
				</div>
				<div class="ori-footer-copyright text-center">
					© 2023 Proconnect. All rights reserved.
				</div>
			</div>
		</div>
	</footer>
<!-- Start of Footer  section
	============================================= -->			

	<!-- For Js Library -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/appear.js') }}"></script>
	<script src="{{ asset('js/slick.js') }}"></script>
	<script src="{{ asset('js/twin.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script src="{{ asset('js/knob.js') }}"></script>
	<script src="{{ asset('js/jquery.filterizr.js') }}"></script>
	<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/rbtools.min.js') }}"></script>
	<script src="{{ asset('js/rs6.min.js') }}"></script>
	<script src="{{ asset('js/jarallax.js') }}"></script>
	<script src="{{ asset('js/jquery.inputarrow.js') }}"></script>
	<script src="{{ asset('js/swiper.min.js') }}"></script>
	<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('js/waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var currentPageUrl = window.location.href;

			// Find the corresponding navigation link and add the 'active' class
			var navLinks = document.querySelectorAll("#main-nav a");
			navLinks.forEach(function(link) {
				if (link.getAttribute("href") === currentPageUrl) {
					link.classList.add("active");
				}
			});
		});

		document.addEventListener("DOMContentLoaded", function() {
			var currentPageUrl = window.location.href;
			var mobileNavLinks = document.querySelectorAll("#m-main-nav a");
			mobileNavLinks.forEach(function(link) {
				if (link.getAttribute("href") === currentPageUrl) {
					link.classList.add("active");
				}
			});
		});
	</script>

</body>
</html>		