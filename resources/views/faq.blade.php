@extends('layouts.master')

@section('content')
<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="/img/bg/bread-bg.png">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>Faq</h1>
				<ul>
					<li><a href="index.html">Proconnect</a></li>
					<li>Faq</li>
				</ul>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumbs section
	============================================= -->

<!-- Start of Faq  section
	============================================= -->
	<section id="ori-faq" class="ori-faq-section position-relative">
		<div class="container">
			<div class="ori-faq-content">
				<div class="row">
					<div class="col-lg-5">
						<div class="ori-faq-tab-btn">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">General Digital Marketing</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Website Design</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Search Engine Optimization (SEO)</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button" role="tab" aria-controls="support" aria-selected="false">Content Marketing</button>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="ori-faq-text-wrapper-content">
							<div class="ori-inner-section-title">
								<span class="sub-title text-uppercase">Good to Know</span>
								<h2>Frequently Asked
								Questions</h2>
							</div>
							<div class="ori-faq-accordion-area">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane animated fadeInUp show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="ori-faq-accordion-item-area">
											<div class="accordion" id="accordionExample_2">
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingOne">
														<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														What is digital marketing?
														</button>
													</h2>
													<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample_2">
														<div class="accordion-body">
														Digital marketing is the process of promoting or advertising your business, service, or product online or through the Internet. 
														The efforts will vary depending on the nature of the business, its objectives, and its stage in the lifecycle.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingTwo">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														Why is it important for my business?
														</button>
													</h2>
													<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample_2">
														<div class="accordion-body">
														An inbound marketing strategy has replaced an outbound strategy as the predominant marketing paradigm thanks to digital marketing. 
														Consumers go online to order products because they are aware of what they want and when they want it.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingThree">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														Why do I need digital marketing for my business?
														</button>
													</h2>
													<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample_2">
														<div class="accordion-body">
														These days it is insufficient to just have a website. Due to the enormous volume of traffic and users on the internet, competition has become fierce in one of the most competitive arenas. 
														Although your online marketing presence is built upon a website, which is why it is so crucial, a website is merely a foundation.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane animated fadeInUp" id="profile" role="tabpanel" aria-labelledby="profile-tab">
										<div class="ori-faq-accordion-item-area">
											<div class="accordion" id="accordionExample_3">
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading5">
														<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
														What should be included on my business website?
														</button>
													</h2>
													<div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="heading5" data-bs-parent="#accordionExample_3">
														<div class="accordion-body">
														In general, websites should have the following pages: Home Page, About Us Page, Services/Products Page, Blog, and a Contact Us page. 
														However, this entirely depends on the kind of business you are in. <br><br>

														Please don't worry if you are unsure of what should be on your website. Our team of professionals always conducts a thorough analysis of your company to ensure 
														that we are adding all the necessary pages to really make your product or service stand out.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading6">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
														What is the general cost for developing a business website?
														</button>
													</h2>
													<div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample_3">
														<div class="accordion-body">
														Every single website for a business is unique. Website costs can range from $5,000 to $100,000, contingent on the project's complexity. 
														Customized websites will fall between those that just need the bare minimum of functionality and basic information and those that require more.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading7">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
														What tools and technology will you use to build my business website?
														</button>
													</h2>
													<div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample_3">
														<div class="accordion-body">
														We make use of whatever equipment and technology will work best for your company. After deciding which platform is best for your company, 
														we will design and develop your website accordingly. But in more detail, we know how to work with WordPress, Joomla, Magento, Drupal, custom PHP-based websites, and many other platforms.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane animated fadeInUp" id="contact" role="tabpanel" aria-labelledby="contact-tab">
										<div class="ori-faq-accordion-item-area">
											<div class="accordion" id="accordionExample_31">
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading10">
														<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
														What is Search Engine Optimization (SEO)?
														</button>
													</h2>
													<div id="collapse10" class="accordion-collapse collapse show" aria-labelledby="heading10" data-bs-parent="#accordionExample_31">
														<div class="accordion-body">
														The acronym for search engine optimization is SEO. The goal of search engine optimization is to make your website more visible for targeted keyword searches 
														while simultaneously promoting it to rank well for those same keywords.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading12">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
														Why is SEO so important?
														</button>
													</h2>
													<div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample_31">
														<div class="accordion-body">
														SEO is crucial because it increases the prominence of your online presence and visibility. When we work on SEO, we are producing useful content and social evidence that directs internet visitors back to your company. 
														You may connect with potential clients that you may not have previously been able to reach thanks to this inbound marketing strategy, which is extremely valuable. 
														With the right SEO plan, your company can grow from zero to one hundred and establish an unstoppable online presence.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading13">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
														Why do search engine rankings change so often?
														</button>
													</h2>
													<div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample_31">
														<div class="accordion-body">
														Due to search engines' ongoing efforts to enhance their functionality and give users better results, search engine rankings fluctuate frequently. 
														As such, the factors that determine SEO ranking are ever-evolving. 
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane animated fadeInUp" id="support" role="tabpanel" aria-labelledby="support-tab">
										<div class="ori-faq-accordion-item-area">
											<div class="accordion" id="accordionExample_4">
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading17">
														<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
														Why is content marketing so important?
														</button>
													</h2>
													<div id="collapse17" class="accordion-collapse collapse show" aria-labelledby="heading17" data-bs-parent="#accordionExample_4">
														<div class="accordion-body">
														Due to its ability to direct visitors to your website, content marketing is crucial. You can demonstrate your expertise in your field to potential clients and 
														perhaps even provide them with helpful products or services by producing high-quality content.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading18">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
														How can the content that is created be used for my business?
														</button>
													</h2>
													<div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample_4">
														<div class="accordion-body">
														There are numerous applications for the content that is produced for your company. The following tasks are possible with the content:
															<br>
															<ul>
																<li>Share it on Social Media</li>
																<li>Distribute via Email Campaign</li>
																<li>Post on Your Website</li>
																<li>Utilize for Hard Copy Marketing Materials</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="heading19">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
														Who determines what topics you will create content about?
														</button>
													</h2>
													<div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample_4">
														<div class="accordion-body">
														Together, we ascertain what queries or worries your prospective clients might have and how we can address them in our content.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Faq  section
	============================================= -->

<!-- Start of Faq price section
	============================================= -->
	<section id="ori-faq-price" class="ori-faq-price-section position-relative">
		<div class="container">
			<div class="ori-inner-section-title">
				<span class="sub-title text-uppercase">PRICING PLANS</span>
				<h2>Our Affordable Pricing Plans</h2>
			</div>
			<div class="ori-faq-price-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="ori-faq-price-inner-item">
							<div class="ori-faq-price-title">
								<span class="price-plan text-uppercase">STANDARD</span>
								<h2>$160.00 <span>Per month</span></h2>
							</div>
							<div class="ori-faq-price-slug">
								Perfect for Professional 
							</div>
							<div class="ori-faq-price-list ul-li-block">
								<ul>
									<li>Up to 100 keyphrases otimized</li>
									<li>Custom dashboards: 4</li>
									<li>Digital marketing expert</li>
									<li>Content, and link monitoring</li>
									<li>Content marketing assets: 4</li>
									<li>Upload your document</li>
									<li>Export PDF</li>
								</ul>
							</div>
							<div class="ori-faq-price-btn text-center text-uppercase">
								<a href="#">purchase now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="ori-faq-price-inner-item">
							<div class="ori-faq-price-title">
								<span class="price-plan text-uppercase">ultra</span>
								<h2>$180.00 <span>Per month</span></h2>
							</div>
							<div class="ori-faq-price-slug">
								Perfect for Professional 
							</div>
							<div class="ori-faq-price-list ul-li-block">
								<ul>
									<li>Up to 100 keyphrases otimized</li>
									<li>Custom dashboards: 4</li>
									<li>Digital marketing expert</li>
									<li>Content, and link monitoring</li>
									<li>Content marketing assets: 4</li>
									<li>Upload your document</li>
									<li>Export PDF</li>
								</ul>
							</div>
							<div class="ori-faq-price-btn text-center text-uppercase">
								<a href="#">purchase now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="ori-faq-price-inner-item">
							<div class="ori-faq-price-title">
								<span class="price-plan text-uppercase">premium</span>
								<h2>$210.00 <span>Per month</span></h2>
							</div>
							<div class="ori-faq-price-slug">
								Perfect for Professional 
							</div>
							<div class="ori-faq-price-list ul-li-block">
								<ul>
									<li>Up to 100 keyphrases otimized</li>
									<li>Custom dashboards: 4</li>
									<li>Digital marketing expert</li>
									<li>Content, and link monitoring</li>
									<li>Content marketing assets: 4</li>
									<li>Upload your document</li>
									<li>Export PDF</li>
								</ul>
							</div>
							<div class="ori-faq-price-btn text-center text-uppercase">
								<a href="#">purchase now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>			
<!-- End of Faq Price section
	============================================= -->

<!-- Start of Sponsor section
	============================================= -->
	<section id="ori-sponsor-1" class="ori-sponsor-section-1 inner-sponsor position-relative">
		<div class="container">
			<div class="ori-sponsor-title text-uppercase text-center">
				<h3><i></i> <span>Trusted by</span><i></i></h3>
			</div>
			<div class="ori-sponsor-content">
				<div class="ori-sponsor-slider">
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="/img/logo/penapcer-high-resolution-logo-black-transparent.png" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="/img/logo/ocean-logi-high-resolution-logo-black-transparent.png" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="/img/logo/quagotech-high-resolution-logo-black-transparent.png" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="/img/logo/lomapro-high-resolution-logo-black-transparent.png" alt="">
							</a>
						</div>
					</div>
					<div class="ori-sponsor-item">
						<div class="ori-sponsor-img">
							<a href="#">
								<img src="/img/logo/strategic-solutions-high-resolution-logo-black-transparent.png" alt="">
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