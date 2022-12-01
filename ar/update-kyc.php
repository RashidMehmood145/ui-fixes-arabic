<?php
include('header.php');
?>
		<main role="main">		
			<section class="update-kyc-hero-section">
				<img src="./assets/images/icap-fund-banner.svg">
			</section>
			<section class="after-update-kyc-hero-section">
				<div class="container-fluid">
					<div class="row">
						<div class="content-outer-line-container">
							<div class="inner-col">
								<div class="row justify-content-center">
									<div class="col-md-8">
										<div class="inner-col">
											<h2 class="form-company-title">Alistithmar Capital</h2>
											<h3 class="KYC-Update-name">Online <span>KYC Update</span></h3>
											<div class="KYC-Update-wrapper">
												<div class="form-type-label">Personal Information</div>													
													<form action="/action_page.php">
														<div class="form-group">
															<label for="id_number">ID Number (required)</label>
															<input type="text" class="form-control" placeholder="Enter email" id="id_number">
														</div>
														<div class="form-group">
															<label for="customer_number">Customer Number (required)<img src="./assets/images/hint-Icons.svg"></label>
															<input type="password" class="form-control" placeholder="" id="customer_number">
														</div>
														<div class="form-group captcha-box">
														  <div class="input-group-prepend">
															<span class="input-group-text"><img src="./assets/images/captcha.svg"></span>
														  </div>
														 <input type="text" class="form-control" placeholder="VCJ9nI" readonly >
														</div>
														<div class="form-group">
															<label for="pwd">Customer Number (required)</label>
															<input type="text" class="form-control" id="pwd">
														</div>
														<button type="submit" class="btn btn-primary KYC-Update-btn">Send</button>
													</form>
											</div>
										</div>
									</div>
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