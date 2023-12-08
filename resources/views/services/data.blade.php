@extends('layouts.master')

@section('content')
<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="{{ asset('img/bg/bread-bg.png') }}">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>Data</h1>
				<ul>
					<li><a href="{{ asset('index') }}">Proconnect</a></li>
					<li>Services</li>
					<li>Data</li>
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
								<h3>Predictive Analysis</h3>
								<p>Utilize data to forecast trends and inform future tactics through predictive analysis.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic9.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Customized Reporting</h3>
								<p>Deliver reports based on the objectives and preferences of your clients.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic10.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Data Security</h3>
								<p>Ensure best adherence of data security and compliance.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic11.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Segmentation</h3>
								<p>Segment data to study and comprehend the preferences and behaviours of audiences.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic12.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>User Conversion Tracking</h3>
								<p>Monitor and assess user conversions with efficiency for optimization.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
						<div class="ori-service-item-4">
							<div class="ori-service-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('img/icon/ic13.png') }}" alt="">
							</div>
							<div class="ori-service-text pera-content">
								<h3>Competitor Analysis</h3>
								<p>Analyze and study data from competitors to identify gaps and opportunities in the market.</p>
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