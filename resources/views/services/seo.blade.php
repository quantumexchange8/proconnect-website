@extends('layouts.master')

@section('content')
<!-- Start of Video Play section
	============================================= -->
	<!-- <section id="ori-video-play" class="ori-video-play-section">
		<div class="background_parallax  position-relative"  data-background="/img/bg/play-bg.png">
			<div class="ori-video-play-btn">
				<a class="video_box d-flex align-items-center text-uppercase justify-content-center" href="https://www.youtube.com/watch?v=PxjV_1oPirk">Play Video</a>
			</div>
		</div>
	</section> -->
<!-- End of Video Play section
	============================================= -->

<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="{{ asset('img/bg/growtika-70L6WwrvSC0-unsplash.jpg') }}">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>SEO</h1>
				<ul>
					<li><a href="{{ asset('index') }}">Proconnect</a></li>
					<li>Services</li>
					<li>SEO</li>
				</ul>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumbs section
	============================================= -->

<!-- Start of Service section
	============================================= -->
	<section id="ori-service-4" class="ori-service-section-4 position-relative" data-background="{{ asset('img/bg/ser-bg.png') }}">
		<div class="container">
			<div class="ori-section-title-4 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<h2>What<span> We Offer</span></h2>
			</div>
			<div class="ori-serviec-content-4">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic9.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Keyword Optimization</h3>
								<p>Effectively incorporate relevant keywords into your content for elevated search engine visibility.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic12.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Analytics Integration</h3>
								<p>Monitor and assess SEO performance with analytics tools.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic5.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Local SEO</h3>
								<p>Reach specific geographic audience by optimizing for local searches.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic1.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Backlink Building</h3>
								<p>Build solid backlink profile to boost domain authority.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic8.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Technical SEO</h3>
								<p>Optimize meta tags, website structure, and other technical elements for search engines.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic10.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Quality Content</h3>
								<p>Ensure that users receives valuable and informative content.</p>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>						
<!-- End of Service section
	============================================= -->
@endsection('content')