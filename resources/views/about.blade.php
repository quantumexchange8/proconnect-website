@extends('layouts.master')

@section('content')
<!-- Start of Breadcrumbs  section
	============================================= -->
	<!-- <a href="https://www.freepik.com/free-photo/group-business-executives-discussing-laptop-their-des_1006083.htm#query=creative%20digital%20agency%20office%20with%20employees%20as%20background%20image&position=40&from_view=search&track=ais&uuid=208c120a-36e4-4919-a7fc-36b1ff87c3d4">Image by peoplecreations</a> on Freepik -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="{{ asset('img/bg/group-business-executives-discussing-laptop-their-des.jpg') }}">
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
			</div>
			<div class="ori-about-circle-progress-item-wrap d-flex align-items-center justify-content-between row">
				<div class="ori-about-circle-progress-item col-lg-3 col-sm-6">
					<div class="counter-boxed text-center headline position-relative">
						<div class="graph-outer">
							<input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="160" data-height="160" data-linecap="round"  value="88" >
							<div class="inner-text count-box"><span class="count-text" data-stop="88" data-speed="4500"></span>%</div>
						</div>
						<h3 class="text-uppercase">SEO Excellence: <br>Driving Organic <br> Growth</h3>
					</div>
				</div>
				<div class="ori-about-circle-progress-item col-lg-3 col-sm-6">
					<div class="counter-boxed text-center headline position-relative">
						<div class="graph-outer">
							<input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="160" data-height="160" data-linecap="round"  value="91" >
							<div class="inner-text count-box"><span class="count-text" data-stop="91" data-speed="4500"></span>%</div>
						</div>
						<h3 class="text-uppercase">Data-Driven Insights: Unleashing Business Potential</h3>
					</div>
				</div>
				<div class="ori-about-circle-progress-item col-lg-3 col-sm-6">
					<div class="counter-boxed text-center headline position-relative">
						<div class="graph-outer">
							<input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="160" data-height="160" data-linecap="round"  value="95" >
							<div class="inner-text count-box"><span class="count-text" data-stop="95" data-speed="4500"></span>%</div>
						</div>
						<h3 class="text-uppercase">Mobile Optimization Mastery: Crafting Seamless Experiences</h3>
					</div>
				</div>
				<div class="ori-about-circle-progress-item col-lg-3 col-sm-6">
					<div class="counter-boxed text-center headline position-relative">
						<div class="graph-outer">
							<input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="160" data-height="160" data-linecap="round"  value="94" >
							<div class="inner-text count-box"><span class="count-text" data-stop="94" data-speed="4500"></span>%</div>
						</div>
						<h3 class="text-uppercase">Strategic Content Impact: Web Presence Revolution</h3>
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
						<h2>Our <span>Mission & Vision</span></h2>
					</div>
				</div>
				<div class="ori-team-content-1">
					<div class="row">
						<div class="col-lg-6">
							<div class="ori-team-inner-item position-relative">
								<div class="ori-team-img">
									<!-- <a href="https://www.freepik.com/free-photo/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer_10421502.htm#query=people&position=8&from_view=search&track=sph&uuid=112fab6d-d2a8-4ddb-a7b9-863cb8c85632">Image by wayhomestudio</a> on Freepik -->
									<img src="{{ asset('img/bg/dane-deaner-_-KLkj7on_c-unsplash.jpg') }}" alt="">
								</div>
								<div class="ori-team-text text-center position-absolute">
									<h3>Our Mission</h3>
									<hr>
									<span>
										<ul style="text-align: start; list-style:none;">
											<li style="margin: 15px">
												To create custom solutions to take brands to new heights.
											</li>
											<li style="margin: 15px">
												To provide state-of-the-art web design.
											</li>
											<li style="margin: 15px">
												To enable our clients to thrive in the constantly changing digital ecosystem.
											</li>
											<li style="margin: 15px">
												To create custom solutions to take brands to new heights.
											</li>
										</ul>
									<!-- Our goal at Proconnect is to create custom solutions that take brands to new heights while navigating the ever-changing world of digital marketing. 
										Our dedication lies in providing state-of-the-art web design, search engine optimization tactics, data analysis, and all-encompassing media and content services. 
										By means of a strategic vision and unwavering dedication, we enable our clients to thrive in the constantly changing digital ecosystem, not just survive it. 
										Our goal is to create a digital legacy, build enduring relationships, and act as a catalyst for their online successes. -->
									</span>
								</div>
								<!-- <div class="ori-team-social text-center position-absolute">
									<a href="{{ asset('#') }}"><i class="fab fa-facebook-f"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-twitter"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-instagram"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-youtube"></i></a>
								</div> -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="ori-team-inner-item position-relative">
								<div class="ori-team-img">
									<!-- <a href="https://www.freepik.com/free-photo/happy-asian-man-standing-with-arms-crossed-grey-wall_7440380.htm#query=people&position=19&from_view=search&track=sph&uuid=112fab6d-d2a8-4ddb-a7b9-863cb8c85632">Image by drobotdean</a> on Freepik -->
									<img src="{{ asset('img/bg/sean-pollock-PhYq704ffdA-unsplash.jpg') }}" alt="">
								</div>
								<div class="ori-team-text text-center position-absolute">
									<h3>Our Vision</h3>
									<hr>
									<span>Encouraging Digital Triumphs: We envision a digital world where brands resonate, businesses flourish, 
										and online experiences redefine success. This is where innovation meets excellence.</span>
								</div>
								<!-- <div class="ori-team-social text-center position-absolute">
									<a href="{{ asset('#') }}"><i class="fab fa-facebook-f"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-twitter"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-instagram"></i></a>
									<a href="{{ asset('#') }}"><i class="fab fa-youtube"></i></a>
								</div> -->
							</div>
						</div>
						<!-- <div class="col-lg-4">
							<div class="ori-team-inner-item position-relative">
								<div class="ori-team-img">
									<a href="https://www.freepik.com/free-photo/positive-asian-man-pointing-finger-aside_4010324.htm#query=people&position=21&from_view=search&track=sph&uuid=112fab6d-d2a8-4ddb-a7b9-863cb8c85632">Image by katemangostar</a> on Freepik
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
						</div> -->
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
				<h3><i></i> <span>Our Services</span><i></i></h3>
			</div>
			<div class="ori-sponsor-content">
				<div class="ori-sponsor-slider">
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">	
							<h3>Web Design</h3>
							<a href="{{ url('services/web-design') }}">
								<img src="{{ asset('img/bg/hal-gatewood-tZc3vjPCk-Q-unsplash.jpg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">	
							<h3>SEO</h3>
							<a href="{{ url('services/seo') }}">
								<img src="{{ asset('img/bg/growtika-70L6WwrvSC0-unsplash.jpg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<h3>Data</h3>
							<a href="{{ url('services/data') }}">
								<img src="{{ asset('img/bg/campaign-creators-774sCXD0dDU-unsplash.jpg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<h3>Content</h3>
							<a href="{{ url('services/content') }}">
								<img src="{{ asset('img/bg/thought-catalog-505eectW54k-unsplash.jpg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<h3>Formation</h3>
							<a href="{{ url('services/formation') }}">
								<img src="{{ asset('img/bg/faizur-rehman-pHPzdEHN6Os-unsplash.jpg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<h3>Media</h3>
							<a href="{{ url('services/media') }}">
								<img src="{{ asset('img/bg/lukas-blazek-mcSDtbWXUZU-unsplash.jpg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<h3>Social</h3>
							<a href="{{ url('services/social') }}">
								<img src="{{ asset('img/bg/mariia-shalabaieva-HBkpnDVc_Ic-unsplash.jpg') }}" alt="">
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