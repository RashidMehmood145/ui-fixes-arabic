<?php
include('header.php');
?>
		<main role="main">		
			<section class="careers-hero-section">
				<div class="careers-hero-gray-box"></div>
				<div class="careers-hero-line-box"></div>
				<div class="careers-hero-content">
					<h2 class="careers-hero-heading">Alistithmar Capital</h2>
					<h3 class="careers-hero-sub-heading">Careers</h3>
					<div class="careers-hero-short-details">Working for Alistithmar Capital is more than a job.  You will be part of a family that is driven by its passion to lead, deliver value, and innovate financial solutions to our clients.  Regardless where you at in your life journey, we welcome you into our family.</div>
				</div>
				
				<div class="careers-hero-image">
					<img src="./assets/images/Careers-page-hero-banner.svg">
					<div class="bar-box-bottom-right"></div>
				</div>
			</section>
			
			<!---------Content here------------>
			<section class="after-careers-hero-section">
				<div class="container">
					<div class="row vertical-tabs careers-tabs">
						<div class="col-md-3">
							<!--------------------------->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
								  <a class="nav-link join-us active" data-toggle="tab" href="#business_development" role="tab" aria-controls="Business Development">join us</a>
								</li>							
							</ul>
						</div>
						<div  class="col-md-9 careers-category-col">
							<div class="tab-content">
								<div class="tab-pane active" id="business_development" role="tabpanel">
									<div class="row">		
										<div class="col-md-12">											
											<form class="advanced-search-careers-form">
												<h3>Advanced Job Search</h3>
												<p>You can search for a specific job by using the search filters below.</p>
												<h3>Search criteria</h3>
												<div class="row">
													<div class="col-md-3">
														<h4>Keywords</h4>
													</div>
													<div class="col-md-9">
														<input type="text" name="keyword" value="" maxlength="100">
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">	</div>
													<div class="col-md-9">
														<label class="">																		
															<input type="radio" name="keyword_radio" value="3" class="radio " checked="checked">
															<span id="label-keyword_radio3" class="">All words</span>
														</label>
														<label class="">																		
															<input type="radio" name="keyword_radio" value="1" class="radio ">
															<span id="label-keyword_radio1" class="">Any word</span>
														</label>
														<label class="">																		
															<input type="radio" name="keyword_radio" value="2" class="radio ">
															<span id="label-keyword_radio2" class="">Exact order</span>
														</label>										 
														<label class="">
															<input type="radio" name="keyword_radio" value="4" class="radio ">
															<span id="label-keyword_radio4" class="">Boolean</span>
														</label>
													</div>													
												</div>
												<div class="row">
													<div class="col-md-3">														
														<h4>Job Location:</h4>
													</div>
													<div class="col-md-9">
														<select name="jb_loc_list">
														<option value="">- No preference -</option>
														<option value="sa,0,0">Saudi Arabia</option>
														<option value="sa,45,0">Saudi Arabia - Abha</option>
														<option value="sa,46,0">Saudi Arabia - Abu Areesh</option>
														<option value="sa,234,0">Saudi Arabia - Al Abwa'</option>
														<option value="sa,226,0">Saudi Arabia - Al Hamdah</option>
														<option value="sa,229,0">Saudi Arabia - Al Hkak</option>
														<option value="sa,227,0">Saudi Arabia - Al Husayniyah</option>
														<option value="sa,225,0">Saudi Arabia - Al Johfah</option>
														<option value="sa,236,0">Saudi Arabia - Al Majardah</option>
														<option value="sa,213,0">Saudi Arabia - Al Majmaah</option>
														<option value="sa,228,0">Saudi Arabia - Al Nasayif</option>
														<option value="sa,223,0">Saudi Arabia - Al Nuaibea'a</option>
														<option value="sa,221,0">Saudi Arabia - Al Qadimah</option>
														<option value="sa,6,0">Saudi Arabia - Alahsa</option>
														<option value="sa,8,0">Saudi Arabia - Albaha</option>
														<option value="sa,211,0">Saudi Arabia - Albukairyah</option>
														<option value="sa,212,0">Saudi Arabia - Aldawadmi</option>
														<option value="sa,18,0">Saudi Arabia - Alkharj</option>
														<option value="sa,31,0">Saudi Arabia - Alqasim</option>
														<option value="sa,33,0">Saudi Arabia - Alqunfithah</option>
														<option value="sa,178,0">Saudi Arabia - Alquryat</option>
														<option value="sa,26,0">Saudi Arabia - Altaif</option>
														<option value="sa,76,0">Saudi Arabia - Arar</option>
														<option value="sa,182,0">Saudi Arabia - Aseer</option>
														<option value="sa,181,0">Saudi Arabia - Besha</option>
														<option value="sa,48,0">Saudi Arabia - Buraidah</option>
														<option value="sa,233,0">Saudi Arabia - Dahaban</option>
														<option value="sa,21,0">Saudi Arabia - Dammam</option>
														<option value="sa,208,0">Saudi Arabia - Dhahran Al Janoub</option>
														<option value="sa,1,0">Saudi Arabia - Eastern Province</option>
														<option value="sa,58,0">Saudi Arabia - Haeil</option>
														<option value="sa,59,0">Saudi Arabia - Hafr Albaten</option>
														<option value="sa,41,0">Saudi Arabia - Hofof</option>
														<option value="sa,2,0">Saudi Arabia - Jeddah </option>
														<option value="sa,57,0">Saudi Arabia - Jizan</option>
														<option value="sa,171,0">Saudi Arabia - Jouf</option>
														<option value="sa,13,0">Saudi Arabia - Jubail</option>
														<option value="sa,61,0">Saudi Arabia - Khamis Mushait</option>
														<option value="sa,17,0">Saudi Arabia - Khobar</option>
														<option value="sa,230,0">Saudi Arabia - Khulays</option>
														<option value="sa,222,0">Saudi Arabia - Klayah</option>
														<option value="sa,207,0">Saudi Arabia - Mahayil Asir</option>
														<option value="sa,217,0">Saudi Arabia - Mastoorah</option>
														<option value="sa,3,0">Saudi Arabia - Mecca</option>
														<option value="sa,4,0">Saudi Arabia - Medina</option>
														<option value="sa,220,0">Saudi Arabia - Mughynia</option>
														<option value="sa,82,0">Saudi Arabia - Najran</option>
														<option value="sa,78,0">Saudi Arabia - Onaizah</option>
														<option value="sa,32,0">Saudi Arabia - Qatif</option>
														<option value="sa,215,0">Saudi Arabia - Rabigh</option>
														<option value="sa,210,0">Saudi Arabia - Rafha</option>
														<option value="sa,216,0">Saudi Arabia - Ras Al Khair</option>
														<option value="sa,5,0">Saudi Arabia - Riyadh</option>
														<option value="sa,219,0">Saudi Arabia - Saabar</option>
														<option value="sa,69,0">Saudi Arabia - Sabia</option>
														<option value="sa,66,0">Saudi Arabia - Sakaka</option>
														<option value="sa,237,0">Saudi Arabia - Samta</option>
														<option value="sa,214,0">Saudi Arabia - Shaqra</option>
														<option value="sa,53,0">Saudi Arabia - Tabouk</option>
														<option value="sa,224,0">Saudi Arabia - Tamaya</option>
														<option value="sa,209,0">Saudi Arabia - Tanomah</option>
														<option value="sa,231,0">Saudi Arabia - Thuwal</option>
														<option value="sa,232,0">Saudi Arabia - Wadi Godaid</option>
														<option value="sa,84,0">Saudi Arabia - Yanbu</option>
													</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">														
														<h4>Job Role:</h4>
													</div>
													<div class="col-md-9">
													<select name="jb_role">
														<option value="">- No preference -</option>
														<option value="__UNSPECIFIED__">Unspecified</option>
														<option value="1">Administration</option>
														<option value="10">Management</option>
														<option value="11">Marketing and PR</option>
														<option value="12">Medical, Healthcare, and Nursing</option>
														<option value="13">Other</option>
														<option value="14">Purchasing and Procurement</option>
														<option value="15">Quality Control</option>
														<option value="16">Research and Development</option>
														<option value="17">Safety</option>
														<option value="18">Sales</option>
														<option value="19">Secretarial</option>
														<option value="2">Design, Creative, and Arts</option>
														<option value="20">Support Services</option>
														<option value="21">Information Technology</option>
														<option value="3">Customer Service and Call Center</option>
														<option value="4">Teaching and Academics</option>
														<option value="5">Engineering</option>
														<option value="534">Banking</option>
														<option value="539">Consulting</option>
														<option value="546">Finance and Investment</option>
														<option value="548">Maintenance, Repair, and Technician</option>
														<option value="551">Security</option>
														<option value="552">Training and Development</option>
														<option value="6">Accounting/Banking/Finance</option>
														<option value="7">Human Resources and Recruitment</option>
														<option value="8">Legal</option>
														<option value="9">Logistics and Transportation</option>
													</select>	
												</div>	
												</div>
												<div class="row">
													<div class="col-md-3">														
														<h4>Industry:</h4>
													</div>
												<div class="col-md-9">
												<select name="jb_cat_list">
													<option value="">- No preference -</option>
													<option value="__UNSPECIFIED__">Unspecified</option>
													<option value="1">Accounting/Auditing</option>
													<option value="2">Support Services</option>
													<option value="3">Advertising</option>
													<option value="4">Agriculture/Forestry/Fishing</option>
													<option value="5">Architecture</option>
													<option value="6">Arts/Entertainment/and Media</option>
													<option value="7">Banking</option>
													<option value="8">Pharmaceutical</option>
													<option value="9">Community/Social Services/and Nonprofit</option>
													<option value="10">Computer/Hardware</option>
													<option value="11">Computer/Software</option>
													<option value="12">Construction</option>
													<option value="13">Consulting Services</option>
													<option value="14">Customer Service</option>
													<option value="15">Education, Training, and Library</option>
													<option value="16">Employment Placement Agencies/Recruiting</option>
													<option value="17">Engineering</option>
													<option value="18">Finance/Economics</option>
													<option value="19">Financial Services</option>
													<option value="20">Government Sector</option>
													<option value="21">Healthcare, other</option>
													<option value="22">Healthcare, Practitioner and Technician</option>
													<option value="23">Hospitality/Tourism/Travel</option>
													<option value="24">Human Resources</option>
													<option value="25">Information Technology</option>
													<option value="26">Installation, Maintenance, and Repair</option>
													<option value="27">Insurance</option>
													<option value="28">Internet/E-commerce</option>
													<option value="29">Law Enforcement/Security Services</option>
													<option value="30">Legal</option>
													<option value="31">Manufacturing and Production</option>
													<option value="32">Military</option>
													<option value="33">Other</option>
													<option value="34">Personal Care and Service</option>
													<option value="35">Real Estate</option>
													<option value="36">Catering/Food Services/Restaurants</option>
													<option value="37">Retail/Wholesale</option>
													<option value="38">Sales</option>
													<option value="39">Science</option>
													<option value="40">Sports and Recreation</option>
													<option value="41">Administration</option>
													<option value="42">Airlines/Aviation</option>
													<option value="43">Facilities Management</option>
													<option value="44">Automotive</option>
													<option value="46">Mining</option>
													<option value="47">Biotechnology</option>
													<option value="48">Safety/Environment</option>
													<option value="49">Fashion Design</option>
													<option value="50">Graphic Design</option>
													<option value="51">Medical/Hospital</option>
													<option value="52">Industrial</option>
													<option value="53">Journalism</option>
													<option value="54">Manufacturing</option>
													<option value="55">Marketing</option>
													<option value="56">Mechanical</option>
													<option value="57">Merchandising</option>
													<option value="58">Modeling</option>
													<option value="59">Nursing</option>
													<option value="60">Oil/Gas</option>
													<option value="62">Photography</option>
													<option value="63">Public Relations</option>
													<option value="64">Publishing</option>
													<option value="65">Contracts/Purchasing</option>
													<option value="66">Secretarial</option>
													<option value="67">Security</option>
													<option value="68">Shipping</option>
													<option value="69">Technical/Maintenance</option>
													<option value="70">Telecommunications</option>
													<option value="71">Telemarketing</option>
													<option value="72">Transportation</option>
													<option value="74">Warehousing</option>
													<option value="75">Distributions and Logistics</option>
													<option value="76">Quantity Survey</option>
													<option value="77">Interior design</option>
													<option value="78">Translation</option>
													<option value="79">Management</option>
													<option value="80">FMCG</option>
													<option value="82">Petrochemicals</option>
													<option value="83">Marine Services</option>
													<option value="84">Entertainment</option>
													<option value="85">Natural Gas Distribution</option>
													<option value="86">Aviation/Marine Refueling</option>
													<option value="87">LPG Bottling</option>
													<option value="88">Lubricants/Greases Blending</option>
													<option value="89">Construction/Civil Engineering</option>
													<option value="90">Laboratory/QC</option>
													<option value="91">Business Support</option>
													<option value="92">Planning</option>
													<option value="93">Vehicle Inspection</option>
													<option value="94">Islamic Banking</option>
													<option value="121">Textiles</option>
													<option value="309">Utilities</option>
													<option value="572">Energy</option>
												</select>
												</div>
												</div>
												<div class="row">
													<div class="col-md-3">														
														<h4>Posted Date:</h4>
													</div>
													<div class="col-md-9">
													<select name="date_indexed">
														<option value="">- No preference -</option>
														<option value="__UNSPECIFIED__">Unspecified</option>
														<option value="1">Today</option>
														<option value="3">Past 2 days</option>
														<option value="8">Past 7 days</option>
														<option value="22">Past 21 Days</option>
													</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">														
														<h4>Company Name:</h4>
													</div>
													<div class="col-md-9">
													<select name="company_name">
														<option value="">- No preference -</option>
														<option value="__UNSPECIFIED__">Unspecified</option>
													</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">														
														<h4>Average Monthly Salary (SAR):</h4>
													</div>
													<div class="col-md-9">
													<select name="cv_trgt_job_range" >
														<option value="">- No preference -</option>
														<option value="1">1,875</option>
														<option value="2">3,750</option>
														<option value="3">5,626</option>
														<option value="4">7,501</option>
														<option value="5">11,252</option>
														<option value="6">15,003</option>
														<option value="7">18,754</option>
														<option value="8">22,505</option>
														<option value="9">26,256</option>
														<option value="10">30,007</option>
														<option value="11">33,758</option>
														<option value="12">37,509</option>
														<option value="13">56,264</option>
														<option value="14">112,528</option>
														<option value="15">187,546</option>
													</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">														
														<h4>Gender:</h4>
													</div>
													<div class="col-md-9">
													<label class="">																	
														<input type="radio" name="jb_gender" value="__UNSPECIFIED__" class="radio ">
														<span id="label-jb_gender__UNSPECIFIED__" class="">Unspecified</span>
													</label>
													<label class="">
														<input type="radio" name="jb_gender" value="m" class="radio ">
														<span id="label-jb_genderm" class="">Male</span>
													</label>
													<label class="">
														<input type="radio" name="jb_gender" value="f" class="radio ">
														<span id="label-jb_genderf" class="">Female</span>
													</label>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<h4>Company Type:</h4>
													</div>
													<div class="col-md-9">
														<select name="company_type" >
															<option value="">- No preference -</option>
															<option value="__UNSPECIFIED__">Unspecified</option>
															<option value="1">Employer (Private Sector)</option>
															<option value="3">Employer (Public Sector)</option>
															<option value="6">Non-Profit Organization</option>
															<option value="2">Recruitment Agency</option>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<h4>Employment Status:</h4>
													</div>
													<div class="col-md-9">
														<label class="">
															<input type="radio" name="job_timing" value="__UNSPECIFIED__" class="radio ">
															<span id="label-job_timing__UNSPECIFIED__" class="">Unspecified</span>
														</label>
														<label class="">
															<input type="radio" name="job_timing" value="1" class="radio ">
															<span id="label-job_timing1" class="">Part time</span>
														</label>
														<label class="">
															<input type="radio" name="job_timing" value="2" class="radio ">
															<span id="label-job_timing2" class="">Full time</span>
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<h4>Employment Type:</h4>
													</div>
													<div class="col-md-9">
														<label class="">
															<input type="checkbox" name="emptype" value="__UNSPECIFIED__" class="checkbox ">
															<span id="label-emptype__UNSPECIFIED__" class="">Unspecified</span>
														</label>
														<label class="">
															<input type="checkbox" name="emptype" value="3" class="checkbox ">
															<span id="label-emptype3" class="">Contractor</span>
														</label>
														<label class="">
															<input type="checkbox" name="emptype" value="46" class="checkbox ">
															<span id="label-emptype46" class="">COOP</span>
														</label>
														<label class="">
															<input type="checkbox" name="emptype" value="1" class="checkbox ">
															<span id="label-emptype1" class="">Employee</span>
														</label>
														<label class="">
															<input type="checkbox" name="emptype" value="2" class="checkbox ">
															<span id="label-emptype2" class="">Internship</span>
														</label>
														<label class="">
															<input type="checkbox" name="emptype" value="45" class="checkbox ">
															<span id="label-emptype45" class="">Tamheer</span>
														</label>
														<label class="">
															<input type="checkbox" name="emptype" value="4" class="checkbox ">
															<span id="label-emptype4" class="">Temporary Employee</span>
														</label>
													</div>
												</div>
												<div class="row">												
													<div class="col-md-12">
														<button type="submit" class="search-jobs">Search</button>
													</div>
												</div>		
											</form>
										</div>
									</div>
									<!--------------Row End-------------->
								</div>
									<!--------------Row End-------------->
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