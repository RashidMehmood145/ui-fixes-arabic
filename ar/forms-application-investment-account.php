<?php
include('header.php');
?>
		<main role="main">		
			<section class="awareness-hero-section">
				<div class="awareness-hero-line-box"></div>
				<div class="awareness-hero-content">
					<h2 class="awareness-hero-heading">Alistithmar Capital</h2>
					<h3 class="awareness-hero-sub-heading">Forms & Application</h3>
				</div>
				
				<div class="awareness-hero-image">
					<img src="./assets/images/new-client-hero-banner.svg">
					<div class="bar-box-bottom-right"></div>
				</div>
			</section>
			
			<!---------Content here------------>
			<section class="after-awareness-hero-section">
				<div class="container">
					<div class="row vertical-tabs careers-tabs">
						<div class="col-md-4">
							<!--------------------------->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
								  <a class="nav-link Investment-Account active" data-toggle="tab" href="#Investment_Account" role="tab" aria-controls="Investment Account">Investment Account</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link Asset-Management" data-toggle="tab" href="#Asset_Management" role="tab" aria-controls="Asset Management">Asset Management</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link Brokerage" data-toggle="tab" href="#Brokerage" role="tab" aria-controls="Brokerage"> Brokerage </a>
								</li>								
							</ul>
						</div>
						<div  class="col-md-8 careers-category-col">
							<div class="tab-content">
								<div class="tab-pane active" id="Investment_Account" role="tabpanel">
									<div class="row">	
										<div  class="col-md-12">
											<div class="awareness-content-wrapper">
												<ul>
													<li>Investment Account Application</li>
													<li>Investment Account Update Form</li>
													<li>Investment Account Closure Form</li>
													<li>FATCA (Individuals)</li>
													<li>FATCA (Institutions)</li>
													<li>Cash Transfer Form</li>
												</ul>												
											</div>
										</div>
									</div>
									<!--------------Row End-------------->
								</div>
								<div class="tab-pane" id="Asset_Management" role="tabpanel">
									<div class="row">
										<div  class="col-md-12">
											<div class="awareness-content-wrapper">
												<ul>
													<li>Fund Subscription Form</li>
													<li>Fund Redemption Form</li>
													<li>Fund Switch Form</li>
													<li>Fund Rights Disclosures</li>
												</ul>	
											</div>
										</div>
										
									</div>
									<!--------------Row End-------------->
								</div>
								<div class="tab-pane" id="Brokerage" role="tabpanel">
									<div class="row">
										<div  class="col-md-12">
											<div class="awareness-content-wrapper">
												<ul>
													<li>Buy Order Form</li>
													<li>Sell Order Form</li>
													<li>Share Transfer Form</li>
												</ul>	
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