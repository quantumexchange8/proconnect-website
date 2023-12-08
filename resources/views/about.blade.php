@extends('layouts.master')

@section('content')
<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="{{ asset('img/bg/bread-bg.png') }}">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>About Us</h1>
				<ul>
					<li><a href="{{ asset('index') }}">Proconnect</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumbs section
	============================================= -->

<!-- Start of About Play  section
	============================================= -->
	<section id="ori-about-play" class="ori-about-play-section position-relative">
		<div class="container">
			<div class="ori-about-play-top-content d-flex justify-content-between align-items-center">
				<div class="ori-inner-section-title">
					<span class="sub-title text-uppercase">About us</span>
					<h2>Extend your reach to your target customers with Proconnect.</h2>
				</div>
				<div class="ori-about-play-top-text">
				We are an innovator and trailblazer of digital marketing. We craft and deliver engaging web experiences, generate organic web traffic through advanced and technical SEO,
				 and leverage data for guided decisions. Join us for an innovative and successful journey into the digital era, from design solutions to strategic brand formation.
				</div>
			</div>
			<div class="ori-about-play-area position-relative">
				<div class="ori-about-play-img">
					<img src="{{ asset('img/about/play-bg.png') }}" alt="">
				</div>
				<div class="about-play-btn position-absolute">
					<a class="text-uppercase video_box d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=bIoPkZRVll">Play</a>
				</div>
			</div>
			<!-- <div class="ori-about-counter-area">
				<div class="ori-about-counter-item-wrap d-flex justify-content-between">
					<div class="ori-about-counter-item pera-content">
						<h3><span class="counter">15</span>+</h3>
						<p class="text-uppercase"><span>//</span> YEARS EXPERIENCE</p>
					</div>
					<div class="ori-about-counter-item pera-content">
						<h3><span class="counter">330</span>+</h3>
						<p class="text-uppercase"><span>//</span> PROJECT FINISHED</p>
					</div>
					<div class="ori-about-counter-item pera-content">
						<h3><span class="counter">95</span>M</h3>
						<p class="text-uppercase"><span>//</span> RECOGNITION</p>
					</div>
					<div class="ori-about-counter-item pera-content">
						<h3><span class="counter">250</span>K+</h3>
						<p class="text-uppercase"><span>//</span> HAPPY CLIENTS</p>
					</div>
				</div>
			</div> -->
		</div>
	</section>		
<!-- End of About Play   section
	============================================= -->

<!-- Start of About Circle Progress  section
	============================================= -->
	<section id="ori-about-circle-progress" class="ori-about-circle-progress-section position-relative">
		<div class="container">
			<div class="ori-circle-progress-top-content d-flex justify-content-between align-items-center">
				<div class="ori-inner-section-title">
					<span class="sub-title text-uppercase">why choose us</span>
					<h2>Unlock Revenue Growth for Your Business</h2>
				</div>
				<div class="ori-circle-progress-btn">
					<a href="{{ asset('service.html') }}">See Our Service<i class="fal fa-arrow-right"></i></a>
					<!-- <ul class="clearfix">
						<li class="dropdown">
							<a>Services</a>
							<ul class="dropdown-menu clearfix">
								<li><a href="{{ asset('services/web-design') }}">Web Design</a></li>
								<li><a href="{{ asset('services/seo') }}">SEO</a></li>
								<li><a href="{{ asset('services/data') }}">Data</a></li>
								<li><a href="{{ asset('services/content') }}">Content</a></li>
								<li><a href="{{ asset('services/formation') }}">Formation</a></li>
								<li><a href="{{ asset('services/design') }}">Design</a></li>
								<li><a href="{{ asset('services/media') }}">Media</a></li>
								<li><a href="{{ asset('services/social') }}">Social</a></li>
							</ul>
						</li>
					</ul> -->
				</div>
			</div>
			<div class="ori-about-circle-progress-item-wrap d-flex align-items-center justify-content-between row">
				<div class="ori-about-circle-progress-item col-lg-3 col-sm-6">
					<div class="counter-boxed text-center headline position-relative">
						<div class="graph-outer">
							<input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="160" data-height="160" data-linecap="round"  value="85" >
							<div class="inner-text count-box"><span class="count-text" data-stop="85" data-speed="4500"></span>%</div>
						</div>
						<h3 class="text-uppercase">fRONTEND</h3>
					</div>
				</div>
				<div class="ori-about-circle-progress-item col-lg-3 col-sm-6">
					<div class="counter-boxed text-center headline position-relative">
						<div class="graph-outer">
							<input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="160" data-height="160" data-linecap="round"  value="90" >
							<div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="4500"></span>%</div>
						</div>
						<h3 class="text-uppercase">backend</h3>
					</div>
				</div>
				<div class="ori-about-circle-progress-item col-lg-3 col-sm-6">
					<div class="counter-boxed text-center headline position-relative">
						<div class="graph-outer">
							<input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="160" data-height="160" data-linecap="round"  value="70" >
							<div class="inner-text count-box"><span class="count-text" data-stop="70" data-speed="4500"></span>%</div>
						</div>
						<h3 class="text-uppercase">mobile development</h3>
					</div>
				</div>
				<div class="ori-about-circle-progress-item col-lg-3 col-sm-6">
					<div class="counter-boxed text-center headline position-relative">
						<div class="graph-outer">
							<input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="160" data-height="160" data-linecap="round"  value="92" >
							<div class="inner-text count-box"><span class="count-text" data-stop="92" data-speed="4500"></span>%</div>
						</div>
						<h3 class="text-uppercase">web development</h3>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of About Circle Progress  section
	============================================= -->

<!-- Start of Team section
	============================================= -->
	<section id="ori-team-1" class="ori-team-section-1 position-relative">
		<div class="ori-team-content-area">
			<div class="container">
				<div class="ori-team-top-content-1 d-flex justify-content-between align-items-center">
					<div class="ori-section-title-1 text-uppercase">
						<h2>Meet our team of <span>professional</span></h2>
					</div>
				</div>
				<div class="ori-team-content-1">
					<div class="row">
						<div class="col-lg-4">
							<div class="ori-team-inner-item position-relative">
								<div class="ori-team-img">
									<!-- <a href="https://www.freepik.com/free-photo/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer_10421502.htm#query=people&position=8&from_view=search&track=sph&uuid=112fab6d-d2a8-4ddb-a7b9-863cb8c85632">Image by wayhomestudio</a> on Freepik -->
									<img src="{{ asset('img/team/team-member-0.jpg') }}" alt="">
								</div>
								<div class="ori-team-text text-center position-absolute">
									<h3>Alextina Ditarson</h3>
									<span>SEO Consultant</span>
								</div>
								<div class="ori-team-social text-center position-absolute">
									<a href="{{ asset('#') }}"><i class="fab fa-facebook-f"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-twitter"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-instagram"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-youtube"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="ori-team-inner-item position-relative">
								<div class="ori-team-img">
									<!-- <a href="https://www.freepik.com/free-photo/happy-asian-man-standing-with-arms-crossed-grey-wall_7440380.htm#query=people&position=19&from_view=search&track=sph&uuid=112fab6d-d2a8-4ddb-a7b9-863cb8c85632">Image by drobotdean</a> on Freepik -->
									<img src="{{ asset('img/team/team-member-1.jpg') }}" alt="">
								</div>
								<div class="ori-team-text text-center position-absolute">
									<h3>Jackson Tang</h3>
									<span>GRAPHIC DESIGNER</span>
								</div>
								<div class="ori-team-social text-center position-absolute">
									<a href="{{ asset('#') }}"><i class="fab fa-facebook-f"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-twitter"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-instagram"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-youtube"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="ori-team-inner-item position-relative">
								<div class="ori-team-img">
									<!-- <a href="https://www.freepik.com/free-photo/positive-asian-man-pointing-finger-aside_4010324.htm#query=people&position=21&from_view=search&track=sph&uuid=112fab6d-d2a8-4ddb-a7b9-863cb8c85632">Image by katemangostar</a> on Freepik -->
									<img src="{{ asset('img/team/team-member-2.jpg') }}" alt="">
								</div>
								<div class="ori-team-text text-center position-absolute">
									<h3>Greg Yolk</h3>
									<span>Software Programmer</span>
								</div>
								<div class="ori-team-social text-center position-absolute">
									<a href="{{ asset('#') }}"><i class="fab fa-facebook-f"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-twitter"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-instagram"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-youtube"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Team section
	============================================= -->

<!-- Start of Sponsor section
	============================================= -->
	<section id="ori-sponsor-1" class="ori-sponsor-section-1 inner-sponsor position-relative">
		<div class="container">
			<div class="ori-sponsor-title text-uppercase text-center">
				<h3><i></i> <span>Our Clients</span><i></i></h3>
			</div>
			<div class="ori-sponsor-content">
				<div class="ori-sponsor-slider">
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="{{ asset('#') }}">
								<img src="{{ asset('img/logo/lomapro-high-resolution-logo-black-transparent.png') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="{{ asset('img/logo/ocean-logi-high-resolution-logo-black-transparent.png') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="{{ asset('img/logo/quagotech-high-resolution-logo-black-transparent.png') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="{{ asset('img/logo/penapcer-high-resolution-logo-black-transparent.png') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="{{ asset('img/logo/strategic-solutions-high-resolution-logo-black-transparent.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>				
<!-- End of Sponsor section
	============================================= -->		
@endsection