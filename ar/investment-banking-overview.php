<?php
include('header.php');
?> 
		<main role="main">		
		<section class="services-hero-section">
			<div class="container" style="position: relative;">
			<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-7" style="direction:rtl">
				<div class="services-hero-gray-box"></div>
				<div class="services-hero-line-box"></div>
				<div class="services-hero-content">
					<h2 class="services-hero-heading">SERVICES</h2>
					<h3 class="services-hero-sub-heading">Investment Banking</h3>
					<div class="services-hero-short-details">Expand your business with our expertise</div>
				</div>
				
				<div class="services-hero-image">
					<img src="./assets/images/handsome-middle-eastern-arab-businessman-holding.svg">
					<div class="bar-box-bottom-right"></div>
				</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-5">
				<div class="services-hero-gray-box-list-items">
					<div class="services-list-items">
						<h5 class="about-us-team-name"><a href="./brokerage.php" ><span class="about-us-team-value">Brokerage</span></a></h5>
						<h5 class="about-us-team-name"><a href="./asset-management.php" class="asset-management-line"><span class="about-us-team-value">Asset management</span></a></h5>
						<h5 class="about-us-team-name"><a href="./investment-banking-overview.php" class="active investment-banking-line"><span class="about-us-team-value">Investment Banking</span></a></h5>
						<h5 class="about-us-team-name"><a href="#" class=""><span class="about-us-team-value">Real Estate</span></a></h5>
					</div>
					
				</div>
</div>
</div>
</div>
			</section>
			<section class="after-services-hero-section" style="direction:rtl;">
				<div class="container">
					<div class="row vertical-tabs brokerage-tabs">
						<div class="col-md-3">
							<!--------------------------->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
								  <a class="nav-link ib-overview-yellow-line active" data-target="./investment-banking-overview.php" href="./investment-banking-overview.php" >Overview</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link ib-products-services-yellow-line" data-target="./investment-banking-products-services.php"  href="./investment-banking-products-services.php" >Products & Services</a>
								</li>							
							</ul>
						</div>
						<div  class="col-md-9">
							<div class="tab-content">
								<div class="tab-pane active" id="Local_Brokerage" role="tabpanel">
									<div class="row">	
										<div class="col-md-8">
											<div class="capital-markets-advisory-content-wrapper">
												<h3 class="cma-heading">Capital Markets<br> <span>Advisory</span></h3>
												<p>ICAP provides comprehensive investment banking services, including advisory on Initial Public Offerings, Private Placements, Right Issues, Underwriting and Lead Management, Valuation Services, Mergers and Acquisitions.</p>
												<div class="capital-markets-advisory-gray-wrapper">
													<div class="advisory-services-wrapper">
														<div class="advisory-services-icon"><img src="./assets/images/professional-team-icon.svg"></div>
														<div class="advisory-services-content">Highly experienced and professional team</div>
													</div>
													<div class="advisory-services-wrapper">
														<div class="advisory-services-icon"><img src="./assets/images/advisory-services-icon.svg"></div>
														<div class="advisory-services-content">Comprehensive advisory services</div>
													</div>													
												</div>
												<a class="learn-more-cta">Learn More</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="capital-markets-advisory-image-wrapper">
												<img src="./assets/images/capital-markets-advisory-pic.svg">
											</div>
										</div>
										
									</div>
									<!--------------Row End-------------->
								</div>
							</div>		
						</div>
					</div>
					<!--------------------------->
				</div>
			</section>
		</main>
<?php
include('footer.php');
?>