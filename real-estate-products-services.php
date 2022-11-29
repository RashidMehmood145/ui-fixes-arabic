<?php
include('header.php');
?> 
		<main role="main">		
			<section class="services-hero-section">
				<div class="services-hero-gray-box"></div>
				<div class="services-hero-line-box"></div>
				<div class="services-hero-content">
					<h2 class="services-hero-heading">SERVICES</h2>
					<h3 class="services-hero-sub-heading">Real Estate</h3>
					<div class="services-hero-short-details">Diversify your portfolio with hand-picked real estate opportunities</div>
				</div>
				
				<div class="services-hero-image">
					<img src="./assets/images/arabic-business-businessmen-working-together.svg">
					<div class="bar-box-bottom-right"></div>
				</div>
				<div class="services-hero-gray-box-list-items">
					<div class="services-list-items">
						<h5 class="about-us-team-name"><a href="./brokerage.php" ><span class="about-us-team-value">Brokerage</span></a></h5>
						<h5 class="about-us-team-name"><a href="./asset-management.php" class="asset-management-line"><span class="about-us-team-value">Asset management</span></a></h5>
						<h5 class="about-us-team-name"><a href="./investment-banking-overview.php" class="investment-banking-line"><span class="about-us-team-value">Investment Banking</span></a></h5>
						<h5 class="about-us-team-name"><a href="./real-estate-overview.php" class="active real-estate-line"><span class="about-us-team-value">Real Estate</span></a></h5>
					</div>
					
				</div>
			</section>
			<section class="after-services-hero-section-real-estate">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="real-estate-after-image-left">
								<img src="./assets/images/right-yellow-box.svg" class="right-yellow-box">
								<img class="real-estate-after-image-left-img" src="./assets/images/making-great-decisions-arab-muslim-business.svg">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="after-services-hero-section">
				<!--<div class="gray-box-ib"></div>-->
				<div class="container">
					<div class="row vertical-tabs brokerage-tabs">
		
						<div class="col-md-3">
							<!--------------------------->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
								  <a class="nav-link ib-overview-yellow-line " data-target="./real-estate-overview.php" href="./real-estate-overview.php" >Overview</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link ib-products-services-yellow-line active" data-target="./real-estate-products-services.php"  href="./real-estate-products-services.php" >Products & Services</a>
								</li>							
							</ul>
						</div>
						<div  class="col-md-9">
							<div class="tab-content">
								<div class="tab-pane active" id="Local_Brokerage" role="tabpanel">
									<div class="row">	
										<div class="col-md-6">
											<div class="rsdf-wrapper">											
												<h3 class="rsdf-heading">Real Estate <br> Development  <br> <span>Funds</span></h3>
												<p>It aims to promote capital growth in the medium and long term for investors by investing in real estate development projects and then selling them to exit the fund.</p>
												<a href="#" class="learn-more-cta">Learn More</a>
											</div>
										</div>	
										<div class="col-md-6">
											<div class="rsdf-image-right">
												<img class="real-state-bar-line" src="./assets/images/bar-line-image.svg" alt="">
												<img class="rsdf-image-right-img" src="./assets/images/real-estate-development-bulding.png">
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
			<section class="idrl-section">
				<div class="idrl-gray-box"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						<img src="./assets/images/laptop-boy-image.svg">
						</div>
						<div class="col-md-6">
							<div class="international-brokerage-contant-wrapper">
								<h3 class="idrl-type-title">Infrastructure <br> Development <span class="yellow-text-line idrl-yellow-bar">Funds</span> <br> (Raw Land): <span class="line-span"><img src="./assets/images/Line-11.svg"></span></h3>
								<p>It aims to promote capital growth in the medium and long term for investors by investing in the infrastructure development of raw lands and then sorting them out to be sold as developed lands to exit the fund.</p>
								<a class="learn-more-cta">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="real-estate-income-funds">
				<div class="container">
					<div class="row">	
						<div class="col-md-7">
							<div class="reif-wrapper">
								<h3 class="reif-heading"><span class="reif-line-span"><img src="./assets/images/Line-11.svg"></span> <span class="reif-content-heading">Real estate <br>income <span class="reif-yellow-box">funds:</span></span></h3>
								<p>It aims to generate current income for investors by investing in high-quality real estate assets that provide predictable stable income through cash flow from high-return investments.</p>
								<a href="#" class="learn-more-cta">Learn More</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="reif-feature-image-wrapper">
								<div class="reif-feature-image-inner-wrapper">
									<img class="reif-bar-line" src="./assets/images/bar-line-image.svg" alt="">
									<img src="./assets/images/real-estate-income-funds-image.svg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php
include('footer.php');
?>