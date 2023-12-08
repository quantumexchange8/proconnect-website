@extends('layouts.master')

@section('content')
<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="{{ asset('img/bg/bread-bg.png') }}">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>Social</h1>
				<ul>
					<li><a href="{{ asset('index') }}">Proconnect</a></li>
					<li>Services</li>
					<li>Social</li>
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
								<img src="{{ asset('img/icon/ic8.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Crisis Management</h3>
								<p>Put together a well-thought-out plan for responding to and lessening social media emergencies.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic9.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Ad Campaigns</h3>
								<p>Strategically run paid social media campains for specific users.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic10.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Community Building</h3>
								<p>Encourage participation in the communitity by answering quesetions and leaving ght comments.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic11.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Influencer Collaboration</h3>
								<p>Extend and increase your reach and credibility by collaborating with influencers.</p>
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