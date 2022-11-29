<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="inner-col">
							<div class="footer-widgets">
								<div class="footer-about"><a class="navbar-brand" href="#"><img src="./assets/images/ICAP-logo.png"></a></div>
								<div class="footer-about-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								<div class="app-link">
									<a class="appstore" href="#"><img src="./assets/images/appstore.svg"></a>
									<a class="googleplay" href="#"><img src="./assets/images/googleplay.svg"></a>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="inner-col">
							<div class="footer-widgets">
								<div class="widget-title">Contact</div>
									<div class="Address"><span class="icon"><img src="./assets/images/pin.svg"></span><span class="label">Lorem ipsum dolor sit amet,
									consectetur adipiscing elit.</span></div>
									<div class="mail"><span class="icon"><img src="./assets/images/at.svg"></span><span class="label">info@company.com</span></div>
									<div class="phone"><span class="icon"><img src="./assets/images/phone.svg"></span><span class="label">+1 (234) 5678 900</span></div>
								<div class="socila-pages">
									<a class="" href="#"><img src="./assets/images/facebook.svg"></a>
									<a class="googleplay" href="#"><img src="./assets/images/twitter.svg"></a>
									<a class="googleplay" href="#"><img src="./assets/images/instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="inner-col">
							<div class="footer-widgets">
								<div class="widget-title">Location</div>
								<div class="map">
									<a class="googlemap" href="#"><img src="./assets/images/google-Map.svg"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 pr-0">
						<div class="inner-col">
							<div class="footer-widgets quick-link-container">
								<div class="widget-title">Quick Links</div>
								<ul class="footer-pages-link">
									<li><a href="">Brokerage</a></li>
									<li><a href="">Asset management</a></li>
									<li><a href="./Investors-awareness.php">Investment banking</a></li>
									<li><a href="">Real estate</a></li>
									<li><a href="./annual-reports.php">Annual Reports</a></li>
									<li><a href="./forms-application-investment-account.php">Invest with us</a></li>
									<li><a href="./Investors-awareness.php">Investors Awareness</a></li>
									<li><a href="./information-security.php">Information Security</a></li>
									<li><a href="./complaint.php">Complaint</a></li>
									<li><a href="./careers.php">Careers</a></li>
									<li><a href="./contact-us.php">Contact Us</a></li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">						
					<div class="col-md-12">
							<div class="inner-col">
								<p class="copy-right-text">
									<a class="footer-info-pages-link" href="./terms-conditions.php">Terms</a>
									<a class="footer-info-pages-link" href="./privacy.php">Privacy</a>
									<a class="footer-info-pages-link" href="#">Support</a><br>
									© Copyright 2022. All Right Reserved. Developed by <b>GO-Globe</b></p>
							</div>
					</div>
				</div>
			</div>
			
		</footer>
		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="./assets/js/jquery.slim.min.js"><\/script>')</script>-->
	  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
	<script>

	$(document).ready(function() {
	    /*$('.dropdown-toggle').click(function() {
            var location = $(this).attr('href');
            window.location.href = location;
            return false;
            });*/
		$(".carousel-indicators-container1").click(function () {
			$(".carousel-indicators-container1").removeClass("active");
			// $(".tab").addClass("active"); // instead of this do the below 
			$(this).addClass("active");   
		});
		$(".searchbar-icon").click(function() {
	   $(".togglesearch").toggle();
	   $("input[type='text']").focus();
	 });
 
});
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
		  if (!$(this).next().hasClass('show')) {
			$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
		  }
		  var $subMenu = $(this).next(".dropdown-menu");
		  $subMenu.toggleClass('show');


		  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
			$('.dropdown-submenu .show').removeClass("show");
		  });


		  return false;
		});
		/************Silder start************/
		$('#recipeCarousel').carousel({
		  interval: 10000
		})

		$('.carousel .carousel-item').each(function(){
			var minPerSlide = 1;
			var next = $(this).next();
			if (!next.length) {
			next = $(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
			
			for (var i=0;i<minPerSlide;i++) {
				next=next.next();
				if (!next.length) {
					next = $(this).siblings(':first');
				}
				
				next.children(':first-child').clone().appendTo($(this));
			  }
		});

	</script>
	
	</body>
</html>
