@extends('layouts.master')

@section('content')
<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="{{ asset('img/bg/bread-bg.png') }}">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>Contact Us </h1>
				<ul>
					<li><a href="{{ asset('index') }}">proconnect</a></li>
					<li>Contact Us </li>
				</ul>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumbs section
	============================================= -->

<!-- Start of Contact form  section
	============================================= -->
	<section id="ori-contact-form" class="ori-contact-form-section position-relative">
		<div class="container">
			<div class="ori-contact-form-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ori-contact-form-text-info pera-content">
							<h3>Get a free quote now</h3>
							<p>In need of a digital marketing or SEO expertise services? Simply connect with us.</p>
							<hr>
							<div class="ori-contact-form-item-info">
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="info-text pera-content">
										<h4>Phone</h4>
										<p>(+880)155 69569 365)</p>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-envelope"></i>
									</div>
									<div class="info-text pera-content">
										<h4>Email</h4>
										<p>debra.holt@example.com</p>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="info-text pera-content">
										<h4>Location</h4>
										<p>Ta-134/A, Gulshan Badda Link</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ori-contact-form-wrap">
							 <form action="#" method="get">
							 	<label>Name *</label>
							 	<input type="text" name="name">
							 	<label>Email *</label>
							 	<input type="text" name="email" placeholder="Proconnect@example.com">
							 	<label>Phone Number *</label>
							 	<input type="text" name="text" placeholder="(629) 555-0129">
							 	<label>Subject *</label>
							 	<input type="text" name="text" placeholder="Subject..">
							 	<label>Message *</label>
							 	<textarea name="message" placeholder="Inquiry description.. "></textarea>
							 	<button type="submit">submit now</button>
							 </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Contact Form section
	============================================= -->			
@endsection