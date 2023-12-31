@extends('layouts.master')

@section('content')
<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="{{ asset('img/bg/hal-gatewood-tZc3vjPCk-Q-unsplash.jpg') }}">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>Web Design</h1>
				<ul>
					<li><a href="{{ asset('index') }}">Proconnect</a></li>
					<li>Services</li>
					<li>Web Design</li>
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
								<img src="{{ asset('img/icon/ic4.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Enhanced User Experience</h3>
								<p>Enable prioritization on the user-friendly interface as well as intuitive navigation.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic10.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Consistent Visuals</h3>
								<p>Adhere to brand guidelines and preserve a unified visual entity.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic9.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Mobile Responsiveness</h3>
								<p>Optimizing contents for mobile devices to reach users across multiple platforms.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic13.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Optimized Load Times</h3>
								<p>Ensure pages load quickly for a flawless online experience.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic1.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Scalability</h3>
								<p>Designing websites that enables growth and flexibility of the business.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic5.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Conversion Optimization</h3>
								<p>Optimize your design elements to maximize user conversions.</p>
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