<?php
include('header.php');
?>
		<main role="main">		
			<section class="complaint-hero-section new-client-hero-section-arabic">
				<div class="complaint-hero-line-box new-client-hero-line-box-revamp"></div>
				<div class="complaint-hero-content">
					<h2 class="complaint-hero-heading rtl">Alistithmar Capital</h2>
					<h3 class="complaint-hero-sub-heading rtl">Complaint</h3>
				</div>
				
				<div class="complaint-hero-image">
					<img src="./assets/images/new-client-hero-banner.svg">
					<div class="bar-box-bottom-right"></div>
				</div>
			</section>
			
			<!---------Content here------------>
			<!---------Content here------------>
			<section class="after-complaint-us-hero-section complaint-arabic">
				<div class="container-custom">
					<div class="row">
						<div  class="col-xl-6 order-1 order-xl-0">
							<div class="complaint-form">
								<h3 class="complaint-form-heading rtl">
									<span class="complaint-form-title rtl">Please fill out the form below to submit</span><span class="short-yellow-line"></span>
									<span class="complaint-form-title rtl">your complaint</span><span class="short-sub-yellow-line"></span>
								</h3>
								<form class="complaint-inner-form-wrapper">
									<div class="form-group">
										<div class="input-group rtl">
											<div class="input-group-addon">
											  <img src="./assets/images/at-icon.svg">
											</div>
											<input class="form-control" id="email" name="email" type="text" placeholder="Your email"/>
										 </div>
									</div>
									<div class="form-group">
										<div class="input-group rtl">
											<div class="input-group-addon">
											  <img src="./assets/images/select-Icons.svg">
											</div>
											<input class="form-control" id="mobile_number" name="mobile_number" type="text" placeholder="Mobile Number (required)"/>
										 </div>
									</div>
									<div class="form-group">
										<div class="input-group rtl">
											<div class="input-group-addon">
											 <img src="./assets/images/title-icon.svg">
											</div>
											<input class="form-control" id="subject" name="Subject" type="text" placeholder="Subject"/>
										 </div>
									</div>
									<div class="form-group">
										<div class="input-group message-input-group rtl">
											<div class="input-group-addon">
											  <img src="./assets/images/message-icon.svg">
											</div>
											<textarea class="form-control" id="message" name="message" type="text" placeholder="The Complaint"/></textarea>
										 </div>
									</div>
									<button type="submit" class="btn btn-complaint-form-btn rtl">Send</button>
								
								</form>
							</div>	
						</div>
						<div class="col-xl-6 order-0 order-xl-1">
							<div class="complaint-wrapper">
								<h3 class="complaint-heading rtl"><span>Dear Customer :</span></h3>
								<div class="complaint-inner-wrapper">
									<div class="complaint-inner-info-wrapper">
										<p class="rtl">You can submit your complaint through multiple channels as you see convenient:</p>
										<ul class="rtl">
											<li class="rtl">Complaints Unit , phone:  (800) 124-8282 Ext: 5 (after providing your login details)</li>
											<li class="rtl">Fax: (+966 11) 489-6270 addressed to Complaints Unit</li>
											<li class="rtl">Mail – P.O Box 6888, Riyadh, 11452 addressed to Complaints Unit</li>
											<li class="rtl">Walk in through to Complaints Unit staff at Head Office.</li>
										<ul>
									</div>
								
								</div>	<!--------complaint-inner-wrapper------->	
							</div>	
							<!-------------------------------------------------->
						</div>
						
					</div>
					<!-------------Row END-------------->
				</div>
			</section>
		</main>
			<?php
include('footer.php');
?>