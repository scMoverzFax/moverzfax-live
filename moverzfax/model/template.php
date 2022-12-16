<!doctype html>
<html lang="en">

<head>
	<title>Report</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.0.2 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="template.css">
	<style type="text/css">

	</style>
</head>

<body>

	<?php
	require_once '../model/connection.php';
	//get the movers information from the mover table
	$search = $_GET['usdot'];

	//check is mover usdot is in claimed_movers table. If it is, then redirect to claimed_template and exit this file
	$check = "SELECT * FROM mover_register WHERE usdot = '" . $search . "';";
	$checkResult = mysqli_query($con, $check);
	$resultChecking = mysqli_num_rows($checkResult);
	$rows2 = mysqli_fetch_assoc($checkResult);
	if($resultChecking > 0 && $rows2['approved'] = 1){
		header("Location: http://localhost/moverzfaxdevelop/MoverzFax/moverzfax/model/registered_template.php?usdot=".$search);
	}


	$sql = "SELECT  name, address, url, phone, contact_person, fax, usdot, mc, state_id FROM mover WHERE usdot = '" . $search . "';";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		$validMover = true;
		while ($rows = mysqli_fetch_assoc($result)) {
			$movername = $rows['name'];
			$address = $rows['address'];
			$url = $rows['url'];
			$phone = $rows['phone'];
			$contact_person = $rows['contact_person'];
			$fax = $rows['fax'];
			$usdot = $rows['usdot'];
			$mc = $rows['mc'];
			$state_id = $rows['state_id'];

			if ($movername == null) {
				$movername = "Not Specified";
			}
			if ($address == null) {
				$address = "No Address Listed";
			}
			if ($url == null) {
				$url = "No Website Listed";
			}
			if ($phone == null) {
				$phone = "Not Specified";
			}
			if ($contact_person == null) {
				$contact_person = "Not Specified";
			}
			if ($fax == null) {
				$fax = "Not Specified";
			}
			if ($usdot == null) {
				$usdot = "Not Specified";
			}
			if ($mc == null) {
				$mc = "Not Specified";
			}
		}

		$sql1 = "SELECT  * FROM state WHERE id = '" . $state_id . "';";
		$result1 = mysqli_query($con, $sql1);
		$resultCheck1 = mysqli_num_rows($result1);

		if ($resultCheck1 > 0) {
			$rows = mysqli_fetch_array($result1);
			$state_code = $rows["code"];
		} else {
			$state_code = " "; //this edge case has not been tested
		}
	} else {
		$validMover = false;
		echo '
		<div class="report_body" id="report_body">
		<section>
			<div class="d-flex">
				<div class="heading-left">
					<a href="https://moverzfax.com">Moverzfax.com</a>
					<h2>Unrecognized Mover</h2>
					<p>Sorry, the mover you have requested is not present in our database. Please notify <a href="http://moverzfax.com/home/support.php">customer support</a> and we will be sure to update our records with their information.</p>
				</div>
				<div class="logo">
					<img class="logo_img" src="../img/MoverZfax.png" alt="">
				</div>
			</div>
		</section>
		</div>
		'; //. $conn->error;
	}
	?>

	<div class="report_body" id="report_body" <?php if ($resultCheck < 1){ echo 'style="display:none;"'; } ?> >

		<!--Report Card heading and logo-->
		<section>
			<div class="d-flex">
				<div class="heading-left">
					<a href="https://moverzfax.com">Moverzfax.com</a>
					<h2>Report Card</h2>
					<!--Need to display proper date information here. 
					Try to access date variable from previous file, or make a new query to the payment table.
					It might be best to make another query because there are multiple previous files that direct to
					this template. -->
					<p>This reputation data report is valid up until
						Wednesday 9th of February 2022 06:01:28 PM
					</p>
				</div>
				<div class="logo">
					<img class="logo_img" src="../img/MoverZfax.png" alt="">
				</div>
			</div>
		</section>

		<!--Disclaimer-->
		<section>
			<div class="row">
				<div class="col-md-12">
					<div class="disclaimer">
						<h2>DISCLAIMER</h2>
						<p style="margin-bottom:0;">
							Information contained in this Report Card is factual and is based on real data
							gathered from
							reputable sites and government agencies. The GRADE presented is computed based
							on the data
							gathered on the exact date this report was generated. Thus, the links provided
							may no longer
							be updated if the current date is too far from the date this report was
							generated.
							Therefore, we advise you to login to your MoverZfax.com account and re-run the
							report to get
							the latest facts and information about this company.
						</p>
						<p>A link is provided in every section to verify the validity of the report presented.</p>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="row">
				<!-- left side company INFO -->
				<div class="col-md-5">
					<div class="companyDetails">
						<h3 class=" mb-2"><?php echo " " . $movername; ?></h3>
						<div id="address" class="mb-2"><?php echo "" . $address; ?></div>
						<div class="mb-4">Website : <a href='<?php echo $url ?>' target="_blank"><?php echo $url; ?></a></div>
						<div class="row mb-2">
							<table class="tbl_contact">
								<tr>
									<td class="header">Contact Number : </td>
									<td class="data"><?php echo "" . $phone; ?></td>
								</tr>
								<tr>
									<td class="header">Contact Person : </td>
									<td class="data"><?php echo "" . $contact_person; ?></td>
								</tr>
								<tr>
									<td class="header">Fax : </td>
									<td class="data"><?php echo "" . $fax; ?></td>
								</tr>
								<tr>
									<td class="header">USDOT# : </td>
									<td class="data"><?php echo "" . $usdot; ?></td>
								</tr>
								<tr>
									<td class="header">MC# : </td>
									<td class="data"><?php echo "" . $mc; ?></td>
								</tr>
							</table>
						</div>
						<div class="st mb-2" id="overall_average"><strong>00.00%</strong></div>
						<!-- PASSED -->
						<div class="passed mb-2">
							<div class="row">
								<img src="" alt="" id="Status_image">
								<div class="recommand">
									<p>
										Though MoverZfax.com personally recommends those movers with a grade of
										85%
										or higher, it is still your decision that matters
									</p>
								</div>
							</div>
							<div class="row">
								<div class="recommand-continue">
									<p>
										We advise you to check the links provided on each of the report items on
										the
										right to better understand the current standing and reputation of this
										company.
									</p>
								</div>
							</div>
						</div>

						<!-- SPECIAL MOVING TASK -->
						<div class="movingtask mb-2">
							<a href="../home/task_force.php" target="_blank">
								<h5>SPECIAL MOVING TASK FORCE</h5>
							</a>
						</div>

						<!-- Important notice -->
						<div class="notice">
							<h3>IMPORTANT NOTICE:</h3>
							<p>
								Based on all reviews given accross all website on the net regarding your
								chosen
								mover, we summarized the grade based on honesty, professionalism,
								appearance,
								and punctuality. Our grade is calculated based on complex algorithm to
								provide
								you, our customer, this detailed evaluation on your service provider. Any
								grades
								above 85% is worth considering for your upcoming move.
							</p>
						</div>

						<div class="break_page"></div>
						<!-- CONSUMER RESOURCES -->
						<div class="consumerresources mb-2 mt-3">
							<h4>CONSUMER RESOURCES</h4>
							<a href="https://www.protectyourmove.gov/related-sites/contactstate_view.aspx" target="_blank">States
								Department of Transportation: <br>Investigations and Assessments</a>
							<a href="https://nccdb.fmcsa.dot.gov/AddComplaint.asp?public=open" target="_blank">USDOT
								complaint
								Forum</a>
							<a href="http://ai.fmcsa.dot.gov/hhg/search.asp" target="_blank">Complaint history on moving
								companies:<br> Per USDOT# and MC# (Only Long Distance Movers)</a>
							<a href="http://safer.fmcsa.dot.gov/CompanySnapshot.aspx" target="_blank">Movers in a Glance:
								Synopsis of your chosen mover</a>
							<a href="http://ai.fmcsa.dot.gov/SMS/Default.aspx" target="_blank">Safety Summary on Moving
								companies</a>
						</div>

						<!-- REIMBURSEMENT POLICY: -->
						<div class="notice">
							<h3>REIMBURSEMENT POLICY:</h3>
							<p>
								Purchases are final. However, If any of these links are not correct or
								information is not available, please contact us by providing us the Moving
								company name, USDOT number and we will provide you with updated information
								on
								that mover. We constantly check every link for accuracy so we will make
								sure to
								update you with any changes on the mover's status.
							</p>
						</div>
						<br><br>
						<!-- MOVING AND STORAGE INDUSTRY TRENDS -->
						<div class="owing mb-5">
							<h5>MOVING AND STORAGE INDUSTRY TRENDS</h5>
							<a href="http://www.promover.org/content.asp?contentid=1118" target="_blank">Courtesy from AMSA "Moving America Professionally"</a>
							<p class="mb-4">
								Consists of 35,000 companies operating at 17,000 locations primarily
								providing
								moving and storage services for household and office goods includes van
								lines,
								van line agents, independent
								full-service movers, international movers,
								forwarders, and auto transporters employs 122,600 people with an annual
								payroll
								of $3.6
								billion is composed of mostly small businesses:
							</p>
							<ul class="mb-2">
								<li>47.8% of industry companies employ fewer than 5 people.</li>
								<li>Only 8.5% of industry companies employ 100 or more people.</li>
							</ul>
							<p class="mb-2">
								AMSA members report operating a fleet of 50,000 trucks 32,000 tractor units
								for
								pulling semi-trailers
								and 18,000 straight trucks) regulated by the U.S. Department of
								Transportation
								and state motor vehicle agencies.
							</p>
							<p>
								If services are conducted across state lines, the firm must be licensed by
								the
								Federal Motor Carrier Safety Administration. Professional movers may also be
								under the jurisdiction of state regulatory agencies.
							</p>
						</div>
					</div>

				</div>
				<!-- Right Side Leagle information -->
				<?php

				// LEGAL INFORMATION
				//$sql = "SELECT state_registration_listed, state_registration_details, state_registration_link, safer_listed, safer_details, safer_link,fmcsa_listed, safer_details, safer_link,fmcsa_listed,fmcsa_details,fmcsa_link, bbb_listed,bbb_details,bbb_link,amsa_listed,amsa_details,amsa_link,hhgfaa_listed,hhgfaa_details,hhgfaa_link,ripoffreport_listed,ripoffreport_details,ripoffreport_link,movingscam_listed,movingscam_details,movingscam_link,mymovingreviews_rating,mymovingreviews_details,mymovingreviews_link,yelp_rating,yelp_details,yelp_link,insiderpages_rating,insiderpages_details,insiderpages_link,kudzu_rating,kudzu_details,kudzu_link,kudzu_rate,moversreviewed_rating,moversreviewed_details,moversreviewed_link,reviewamover_rating,reviewamover_details,reviewamover_link,moverssearchandreviews_rating,moverssearchandreviews_details,moverssearchandreviews_link,angies_rating,angies_details,angies_link,transportreviews_rating,transportreviews_details,transportreviews_link,transportreports_rating,transportreports_details,transportreports_link,movingguardian_rating,movingguardian_details,movingguardian_link 
				//		FROM mover WHERE usdot = '" . $search . "';";
				$sql = "SELECT state_registration_listed, state_registration_details, state_registration_link, safer_listed, safer_details, safer_link,fmcsa_listed, safer_details, safer_link,fmcsa_listed,fmcsa_details,fmcsa_link, bbb_listed,bbb_details,bbb_link,amsa_listed,amsa_details,amsa_link,hhgfaa_listed,hhgfaa_details,hhgfaa_link,ripoffreport_listed,ripoffreport_details,ripoffreport_link,movingscam_listed,movingscam_details,movingscam_link,mymovingreviews_rating,mymovingreviews_details,mymovingreviews_link,yelp_rating,yelp_details,yelp_link,insiderpages_rating,insiderpages_details,insiderpages_link,kudzu_rating,kudzu_details,kudzu_link,kudzu_rate,moversreviewed_rating,moversreviewed_details,moversreviewed_link,reviewamover_rating,reviewamover_details,reviewamover_link,moverssearchandreviews_rating,moverssearchandreviews_details,moverssearchandreviews_link,angies_rating,angies_details,angies_link,transportreviews_rating,transportreviews_details,transportreviews_link,transportreports_rating,transportreports_details,transportreports_link,movingguardian_rating,movingguardian_details,movingguardian_link 
				FROM mover WHERE usdot = '" . $search . "';";

				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					// code...
					while ($rows = mysqli_fetch_assoc($result)) {
						// code...

						// State registered
						$state_registration_listed = $rows['state_registration_listed'];
						$state_registration_details = $rows['state_registration_details'];
						$state_registration_link = $rows['state_registration_link'];

						// Federal registration 
						$safer_listed = $rows['safer_listed'];
						$safer_details = $rows['safer_details'];
						$safer_link = $rows['safer_link'];

						// licensing and inforamtion
						$fmcsa_listed = $rows['fmcsa_listed'];
						$fmcsa_details = $rows['fmcsa_details'];
						$fmcsa_link = $rows['fmcsa_link'];

						// MOVING ASSOCIATION
						// member of bbb
						$bbb_listed = $rows['bbb_listed'];
						$bbb_details = $rows['bbb_details'];
						$bbb_link = $rows['bbb_link'];

						// member of american moving and storage association
						$amsa_listed = $rows['amsa_listed'];
						$amsa_details = $rows['amsa_details'];
						$amsa_link = $rows['amsa_link'];

						// MEMBER OF HHGFFAA (Household Good Forwarders of America)?
						$hhgfaa_listed = $rows['hhgfaa_listed'];
						$hhgfaa_details = $rows['hhgfaa_details'];
						$hhgfaa_link = $rows['hhgfaa_link'];

						// Scam Alert Portal 
						// PRESENT ON RIPOFF REPORT? 
						$ripoffreport_listed = $rows['ripoffreport_listed'];
						$ripoffreport_details = $rows['ripoffreport_details'];
						$ripoffreport_link = $rows['ripoffreport_link'];

						// BLACKLISTED ON MOVING SCAM? 
						$movingscam_listed = $rows['movingscam_listed'];
						$movingscam_details = $rows['movingscam_details'];
						$movingscam_link = $rows['movingscam_link'];

						// Recommendation Portal
						// PRESENT ON MOVERZFAX?
						//IT WILL HAVE TO BE SELECTED FROM OUR DATABASE

						// PRESENT ON MY MOVING REVIEWS?
						$mymovingreviews_rating = $rows['mymovingreviews_rating'];
						$mymovingreviews_details = $rows['mymovingreviews_details'];
						$mymovingreviews_link = $rows['mymovingreviews_link'];

						// PRESENT ON YELP?
						$yelp_rating = $rows['yelp_rating'];
						$yelp_details = $rows['yelp_details'];
						$yelp_link = $rows['yelp_link'];

						//PRESENT ON INSIDER PAGES?
						$insiderpages_rating = $rows['insiderpages_rating'];
						$insiderpages_details = $rows['insiderpages_details'];
						$insiderpages_link = $rows['insiderpages_link'];

						// PRESENT ON KUDZU? No longer a site
						// $kudzu_rating = $rows['kudzu_rating'];
						// $kudzu_details = $rows['kudzu_details'];
						// $kudzu_link = $rows['kudzu_link'];
						// $kudzu_rate = $rows['kudzu_rate'];

						// PRESENT ON MOVER REVIEWS?
						$moversreviewed_rating = $rows['moversreviewed_rating'];
						$moversreviewed_details = $rows['moversreviewed_details'];
						$moversreviewed_link = $rows['moversreviewed_link'];

						// PRESENT ON REVIEW A MOVER? No longer a site
						// $reviewamover_rating = $rows['reviewamover_rating'];
						// $reviewamover_details = $rows['reviewamover_details'];
						// $reviewamover_link = $rows['reviewamover_link'];

						// PRESENT ON MOVERS SEARCH AND REVIEWS? No longer a site
						// $moverssearchandreviews_rating = $rows['moverssearchandreviews_rating'];
						// $moverssearchandreviews_details = $rows['moverssearchandreviews_details'];
						// $moverssearchandreviews_link = $rows['moverssearchandreviews_link'];

						// PRESENT ON EPINIONS? No longer a site
						//epinions not found


						// PRESENT ON ANGIE'S LIST? 
						$angies_rating = $rows['angies_rating'];
						$angies_details = $rows['angies_details'];
						$angies_link = $rows['angies_link'];

						// PRESENT ON TRANSPORT REVIEWS? 
						$transportreviews_rating = $rows['transportreviews_rating'];
						$transportreviews_details = $rows['transportreviews_details'];
						$transportreviews_link = $rows['transportreviews_link'];

						// PRESENT ON TRANSPORT REPORTS?  No longer a site
						// $transportreports_rating = $rows['transportreports_rating'];
						// $transportreports_details = $rows['transportreports_details'];
						// $transportreports_link = $rows['transportreports_link'];

						// PRESENT ON MOVING GUARDIAN?  No longer a site
						// $movingguardian_rating = $rows['movingguardian_rating'];
						// $movingguardian_details = $rows['movingguardian_details'];
						// $movingguardian_link = $rows['movingguardian_link'];

						// PRESENT ON MOVERS REVIEWED?  No longer a site
						// movers reviewed not found
					}
					// echo "".$kudzu_rate;
				} else {
					echo "No data found " . $conn->error;
				}
				?>

				<div class="col-md-7">
					<div class="leagal_info_col">
						<!--Legal Information Card-->
						<div class="row mb-1">
							<div class="col-md-12">
								<div class="headings d-flex align-items-center p-1">
									<label>Legal Information</label>
								</div>
							</div>
						</div>
						<div class="leagal_info_table mb-4">
							<table>
								<tbody>
									<!--ARE THEY STATE REGISTERED?-->
									<tr class="row_dark" id="tr1">
										<td class=""><label class="status_lable"><img src="../img/flags/<?php echo $state_code; ?>.png"></label></td>
										<td>
											<label class="section_heading">ARE THEY STATE REGISTERED?</label>
											<?php

											if (!empty($state_registration_listed) && isset($state_registration_listed)) {
												//echo "<p id='register'>" . $state_registration_details . "</p>";
												echo "<p id='register'>Check to see if this company is state registered</p>";
												echo "<span>Check <a href='" . $state_registration_link . "' target='_blank'>details</a></p>";
												$pointers_logo = 10;
											} else {
												echo "<p id='register'>This company is not state registered</p>";
												echo "<span>No url available</span>";
												$pointers_logo = 0;
											}
											?>
										</td>
									</tr>
									<!-- ARE THEY FEDERALLY REGISTERED? HTML Link -->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($safer_listed == "YES") {
													//echo "<strong style ='color: green'>" . $safer_listed . "</strong>";
													echo "<strong style ='color: green'>YES</strong>";
													$pointers_registerd = 10;
												} else {
													//echo "<strong style ='color: red'>" . $safer_listed . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
													$pointers_registerd = 0;
												}
												?>
											</label>
										</td>
										<td>
										<label class="section_heading">ARE THEY FEDERALLY REGISTERED?</label>
											<?php
											if ($safer_listed == "YES") {
												//echo "<p id='register'>" . $safer_details . "</p>";
												echo "<p id='register'>This company is registered federally</p>";
												// echo "<span>Check <a href='" . $safer_link . "' target='_blank'>details</a></span>";
												echo "<span>Check <a href='https://safer.fmcsa.dot.gov/query.asp?searchtype=ANY&query_type=queryCarrierSnapshot&query_param=USDOT&query_string=" . $usdot . "' target='_blank'>details</a></span>";
												//echo "<span target='_blank'>" . $safer_link . "</span>";
												$pointers_licensing = 10;
											} else {
												echo "<p id='register'>This company is not registered federally</p>";
												echo "<span>No url available</span>";
												$pointers_licensing = 0;
											}
											?>
										</td>
									</tr>
									<!--DO THEY HAVE A PUBLIC LICENSE?-->
									<tr class="row_dark">
										<td>
											<label class="status_lable">
												<?php
												if ($fmcsa_listed == "YES") {
													//echo "<strong style ='color: green'>" . $fmcsa_listed . "</strong>";
													echo "<strong style ='color: green'>YES</strong>";
												} else if ($fmcsa_listed == "NO") {
													//echo "<strong style ='color: red'>" . $fmcsa_listed . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												}
												?>
											</label>
										</td>
										<td>
										<label class="section_heading">DO THEY HAVE A PUBLIC LICENSE?</label>
											<?php
											if ($safer_listed == "YES") {
												echo "<p id='register'>" . $fmcsa_details . "</p>";
												echo "<span>Check <a href='" . $fmcsa_link . "' target='_blank'>details</a></span>";
											} else if ($safer_listed == "NO") {

												echo "<p id='register'>This company is not a member of the American Moving and Storage Association.</p>";
												echo "<span>No url available</span>";
											}
											?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Moving Association Card-->
						<div class="row mb-1">
							<div class="col-md-12">
								<div class="headings d-flex align-items-center p-1">
									<label>Moving Association</label>
								</div>
							</div>
						</div>
						<div class="leagal_info_table mb-4">
							<table>
								<tbody>
									<!--MEMBER OF BETTER BUSINESS BUREAU? HTML link-->
									<tr class="row_dark" id="tr1">
										<td class="">
											<label class="status_lable">
												<?php
												if ($bbb_listed != "NO") {
													//Try this if you want to display the bbb icon grade. bbb_listed is a img tag value
													echo "<strong>" . $bbb_listed . "</strong>";
													//echo "<strong style ='color: green'>YES</strong>";
													$points = 10;
												} else {
													//echo "<strong style ='color: red'>" . $bbb_listed . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
													$points = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">MEMBER OF BETTER BUSINESS BUREAU?</label>
											<?php
											if ($bbb_listed != "NO") {
												//echo "<p id='register'>" . $bbb_details . "</p>";
												echo "<p id='register'>This company is a member of Better Business Bureau</p>";
												//echo "<span>Check <a href='" . $bbb_link . "' target='_blank'>details</a></span>";
												//temporary solution below
												echo "<span>" . $bbb_link . "</span>";
											} else {
												//echo "<p id='register'>" . $bbb_details . "</p>";
												echo "<p id='register'>This company is not a member of Better Business Bureau</p>";
												echo "<span>No url available</span>";
											}
											$listing_value = substr($bbb_listed, 63, -6);

											if ($listing_value == 'a-plus' || $listing_value == 'a') {
												$points = 45;
											} else if ($listing_value == 'b-plus' || $listing_value == 'b') {
												$points = 35;
											} else if ($listing_value == 'c-plus' || $listing_value == 'c') {
												$points = 25;
											} else if ($listing_value == 'd-plus' || $listing_value == 'd' || $listing_value == 'e' || $listing_value == 'f') {
												$points = 15;
											} else {
												$points = 5;
											}

											?>
										</td>
									</tr>
									<!--MEMBER OF MSC/PROMOVER?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($amsa_listed == "YES") {
													//echo "<strong style ='color: green'>" . $amsa_listed . "</strong>";
													echo "<strong style ='color: green'>YES</strong>";
													$pointers_assosiation = 10;
												} else {
													//echo "<strong style ='color: red'>" . $amsa_listed . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
													$pointers_assosiation = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">MEMBER OF THE MOVING AND STORAGE CONFERENCE?</label>
											<?php
											if ($amsa_listed == "YES") {
												echo "<p id='register'>This company is a member of the Moving and Storage Conference.</p>";
												//echo "<p id='register'>" . $amsa_details . "</p>";
												echo "<span>Check <a href='" . $amsa_link . "' target='_blank'>details</a></span>";
											} else if ($amsa_listed == "NO") {
												echo "<p id='register'>This company is not a member of the Moving and Storage Conference.</p>";
												//echo "<p id='register'>" . $amsa_details . "</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--MEMBER OF HHGFFAA (Household Good Forwarders of America)? HTML link -->
									<tr class="row_dark">
										<td>
											<label class="status_lable">
												<?php
												if ($hhgfaa_listed == "YES") {
													//echo "<strong style ='color: blue'>" . $hhgfaa_listed . "</strong>";
													echo "<strong style ='color: blue'>YES</strong>";
													$pointers_member = 5;
												} else {
													//echo "<strong style ='color: red'>" . $hhgfaa_listed . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
													$pointers_member = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">MEMBER OF HHGFFAA (Household Good Forwarders of America)?</label>
											<?php
											if ($hhgfaa_listed == "YES") {
												echo "<p id='register'>This company is a member of the Household Good Forwarders of America.</p>";
												//echo "<p id='register'>" . $hhgfaa_details . "</p>";
												echo "<span>" . $hhgfaa_link . "</span>";
											} else if ($hhgfaa_listed == "NO") {
												echo "<p id='register'>This company is not a member of the Household Good Forwarders of America.</p>";
												//echo "<p id='register'>" . $hhgfaa_details . " </p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Scam Alert Portal Card-->
						<div class="row mb-1">
							<div class="col-md-12">
								<div class="headings d-flex align-items-center p-1">
									<label>Scam Alert Portal</label>
								</div>
							</div>
						</div>
						<div class="leagal_info_table mb-4">
							<table>
								<tbody>
									<!--PRESENT ON RIPOFF REPORT?-->
									<tr class="row_dark">
										<td class="" style="width:0;">
											<label class="status_lable">
												<?php
												if ($ripoffreport_listed != "NO") {
													//echo "<strong style ='color: blue'>" . $ripoffreport_listed . "</strong>";
													echo "<strong style ='color: blue'>YES</strong>";
												} else {
													//echo "<strong style ='color: red'>" . $ripoffreport_listed . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												}
												?>

											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON RIPOFF REPORT?</label>
											<?php
											if ($ripoffreport_listed != "NO") {
												echo "<p id='register'>This company is listed on Ripoff Report.</p>";
												//echo "<p id='register'>" . $ripoffreport_details . "</p>";
												echo "<span>Check <a href='" . $ripoffreport_link . "'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not listed on Ripoff Report.</p>";
												//echo "<p id='register'>" . $ripoffreport_details . " </p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--BLACKLISTED ON MOVING SCAM?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($movingscam_listed != "NO") {
													//echo "<strong style ='color: blue'>" . $movingscam_listed . "</strong>";
													echo "<strong style ='color: blue'>YES</strong>";
												} else if ($movingscam_listed == "NO") {
													//echo "<strong style ='color: red'>" . $movingscam_listed . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">BLACKLISTED ON MOVING SCAM?</label>
											<?php
											if ($movingscam_listed != "NO") {
												echo "<p id='register'>This company is blacklisted on Moving Scam.</p>";
												//echo "<p id='register'>" . $movingscam_details . "</p>";
												echo "<span>Check <a href='" . $movingscam_link . "'>details</a></span>";
											} else if ($movingscam_listed == "NO") {
												echo "<p id='register'>This company is not blacklisted on Moving Scam.</p>";
												//echo "<p id='register'>" . $movingscam_details . "</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="break_page"></div>

						<!--The code below here is different approach to reading the table data. We are going to leave it this way for now.-->

						<!--Recommended Portal Card-->
						<div class="row mb-1 mt-2">
							<div class="col-md-12">
								<div class="headings d-flex align-items-center p-1">
									<label>Recommended Portal</label>
								</div>
							</div>
						</div>
						<div class="leagal_info_table mb-4">
							<table>
								<tbody>
									<!--PRESENT ON GOOGLE?-->
									<tr><!-- Our mover table does not have Google links, so this will always be NO data -->
										<td>
											<label class="status_lable">
												<?php
													echo "<strong style ='color: red'>NO</strong>";
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON GOOGLE?</label>
											<?php
												echo "<p id='register'>This company is not present on Google</p>";
												echo "<span>No url available</span>";
											?>
										</td>
									</tr>
									<!--PRESENT ON MY MOVING REVIEWS?-->
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">
												<?php
												if (strtoupper($mymovingreviews_rating) != "NO" && $mymovingreviews_rating != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($mymovingreviews_rating) . "</strong>";
													echo "<strong style ='color: green'>YES</strong>";
												} else if (strtoupper($mymovingreviews_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($mymovingreviews_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($mymovingreviews_rating != NULL) {
													echo $mymovingreviews_rating;
												} else {
													echo "<strong style ='color: red'>No Reviews</strong>";
												}
												$star_rating1 = substr($mymovingreviews_rating, 48, -11);
												if (!empty($star_rating1) && isset($star_rating1)) {
													$star_rating1 = $star_rating1;
												} else {
													$star_rating1 = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON MY MOVING REVIEWS?</label>
											<?php
											if ($mymovingreviews_rating != "NO" && $mymovingreviews_rating != NULL) {
												//echo "<p id='register'>" . $mymovingreviews_details . "</p>";
												echo "<p id='register'>This company is listed on My Moving Reviews</p>";
												echo "<span>Check <a href='" . $mymovingreviews_link . "' target='_blank'>details</a></span>";
											} else if ($mymovingreviews_rating == "NO") {
												//echo "<p id='register'>" . $mymovingreviews_details . "</p>";
												echo "<p id='register'>This company is not listed on My Moving Reviews</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON YELP?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if (strtoupper($yelp_rating) != "NO" && $yelp_rating != NULL) {
													//echo "<strong style ='color: green'>" . $yelp_rating . "</strong>";
													echo "<strong>" . $yelp_rating . "</strong>";
												} else if (strtoupper($yelp_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($yelp_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($yelp_rating != NULL) {
													echo "<strong>" . $yelp_rating . "</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating2 = substr($yelp_rating, 48, -11);
												if (!empty($star_rating2) && isset($star_rating2)) {
													$star_rating2 = $star_rating2;
												} else {
													$star_rating2 = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON YELP?</label>
											<?php
											if ($yelp_rating != "NO" && $yelp_rating != NULL) {
												echo "<p id='register'>" . $yelp_details . "</p>";
												echo "<span>Check <a href='" . $yelp_link . "' target='_blank'>details</a></span>";
											} else if ($yelp_rating == "NO") {
												echo "<p id='register'>" . $yelp_details . "</p>";
												echo "<span>No url available</span>";
											} else if ($yelp_rating == null) {
												echo "<p>There is no data for this mover on Yelp yet.</p>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON INSIDER PAGES?-->
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">
												<?php
												if (strtoupper($insiderpages_rating) != "NO" && strtoupper($insiderpages_rating) != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($insiderpages_rating) . "</strong>";
													echo "<strong style ='color: green'>" . $insiderpages_rating . "</strong>";
												} else if (strtoupper($insiderpages_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($insiderpages_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($insiderpages_rating != NULL) {
													echo $insiderpages_rating;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating3 = substr($insiderpages_rating, 48, -11);
												if (!empty($star_rating3) && isset($star_rating3)) {
													$star_rating3 = $star_rating3;
												} else {
													$star_rating3 = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON INSIDER PAGES?</label>
											<?php
											if ($insiderpages_rating != "NO" && $insiderpages_rating != NULL) {
												echo "<p id='register'>" . $insiderpages_details . "</p>";
												echo "<span>Check <a href='" . $insiderpages_link . "' target='_blank'>details</a></span>";
											} else if ($insiderpages_rating == "NO") {

												echo "<p id='register'>" . $insiderpages_details . "</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON KUDZU?
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if (strtoupper($kudzu_rating) != "NO" && strtoupper($kudzu_rating) != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($kudzu_rating) . "</strong>";
													echo "<strong style ='color: green'>YES</strong>";
												} else if (strtoupper($kudzu_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($kudzu_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($kudzu_rating != NULL) {
													echo $kudzu_rating;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating4 = substr($kudzu_rating, 48, -11);
												if (!empty($star_rating4) && isset($star_rating4)) {
													$star_rating4 = $star_rating4;
												} else {
													$star_rating4 = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON KUDZU?</label>
											<?php
											if ($kudzu_rating != "NO" && $kudzu_rating != NULL) {
												echo "<p id='register'>" . $kudzu_details . "</p>";
												echo "<span>Check <a href='" . $kudzu_link . "' target='_blank'>details</a></span>";
											} else if ($kudzu_rating == "NO") {

												echo "<p id='register'>" . $kudzu_details . "<p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>-->
									<!--PRESENT ON MOVER REVIEWS?-->
									<tr>
										<td class="">
											<label class="status_lable">
												<?php
												if (strtoupper($moversreviewed_rating) != "NO" && strtoupper($moversreviewed_rating) != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($moversreviewed_rating) . "</strong>";
													echo "<strong>" . $moversreviewed_rating . "</strong>";
												} else if (strtoupper($moversreviewed_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($moversreviewed_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($moversreviewed_rating != NULL) {
													echo $moversreviewed_rating;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}

												$star_rating5 = substr($moversreviewed_rating, 48, -11);
												if (!empty($star_rating5) && isset($star_rating5)) {
													$star_rating5 = $star_rating5;
												} else {
													$star_rating5 = 0;
												}
												?>

											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON MOVER REVIEWS?</label>
											<?php
											if ($moversreviewed_rating != "NO" && $moversreviewed_rating != NULL) {
												//echo "<p id='register'>" . $moversreviewed_details . "</p>";
												echo "<p id='register'>This company is listed on Mover Reviews</p>";
												echo "<span>Check <a href='" . $moversreviewed_link . "' target='_blank'>details</a></span>";
											} else if ($moversreviewed_rating == "NO") {

												//echo "<p id='register'>" . $moversreviewed_details . "<p>";
												echo "<p id='register'>This company is not listed on Mover Reviews</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON REVIEW A MOVER?
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if (strtoupper($reviewamover_rating) != "NO" && $reviewamover_rating != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($reviewamover_rating) . "</strong>";
													echo "<strong>" . $reviewamover_rating . "</strong>";
												} else if (strtoupper($reviewamover_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($reviewamover_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($reviewamover_rating != NULL) {
													echo $reviewamover_rating;
												} else {
													echo "<strong style ='color: red'>No Reviews</strong>";
												}
												$star_rating6 = substr($reviewamover_rating, 48, -11);
												if (!empty($star_rating6) && isset($star_rating6)) {
													$star_rating6 = $star_rating6;
												} else {
													$star_rating6 = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON REVIEW A MOVER?</label>
											<?php
											if ($reviewamover_rating != "NO" && $reviewamover_rating != NULL) {
												//echo "<p id='register'>" . $reviewamover_details . "</p>";
												echo "<p id='register'>This company is listed on Review a Mover<p>";
												echo "<span>Check <a href='" . $reviewamover_link . "' target='_blank'>details</a></span>";
											} else if ($reviewamover_rating == "NO") {
												//echo "<p id='register'>" . $reviewamover_details . "<p>";
												echo "<p id='register'>This company is not listed on Review a Mover<p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>-->
									<!--PRESENT ON MOVERS SEARCH AND REVIEWS? HTML Link
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">
												<?php
												if (strtoupper($moverssearchandreviews_rating) != "NO" && $moverssearchandreviews_rating != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($moverssearchandreviews_rating) . "</strong>";
													echo "<strong>" . $moverssearchandreviews_rating . "</strong>";
												} else if (strtoupper($moverssearchandreviews_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($moverssearchandreviews_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($moverssearchandreviews_rating != NULL) {
													echo $moverssearchandreviews_rating;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating7 = substr($moverssearchandreviews_rating, 48, -11);
												if (!empty($star_rating7) && isset($star_rating7)) {
													$star_rating7 = $star_rating7;
												} else {
													$star_rating7 = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON MOVERS SEARCH AND REVIEWS?</label>
											<?php
											// star needed
											if ($moverssearchandreviews_rating != "NO" && $moverssearchandreviews_rating != NULL) {
												echo "<p id='register'>" . $moverssearchandreviews_details . "</p>";
												//echo "<span>Check <a href='" . $moverssearchandreviews_link . "' target='_blank'>details</a></span>";
												echo "<span>" . $moverssearchandreviews_link . "</span>";
											} else if ($moverssearchandreviews_rating == "NO") {

												echo "<p id='register'>" . $moverssearchandreviews_details . "<p>";
												echo "<span>No url available</span>";
											} else if ($moverssearchandreviews_rating == null) {
												// code...
												echo "<br><p>Nothing found from Mover Search and Reviews</p>";
											}
											?>
										</td>
									</tr>-->
									<!--PRESENT ON TRANSPORT REVIEWS?-->
									<tr class="row_dark">
										<td>
											<label class="status_lable">

												<?php
												if (strtoupper($transportreviews_rating) != "NO" && $transportreviews_rating != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($transportreviews_rating) . "</strong>";
													echo "<strong style ='color: green'>YES</strong>";
												} else if (strtoupper($transportreviews_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($transportreviews_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($transportreviews_rating != NULL) {
													echo $transportreviews_rating;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}

												$star_rating9 = substr($transportreviews_rating, 48, -11);
												if (!empty($star_rating9) && isset($star_rating9)) {
													$star_rating9 = $star_rating9;
												} else {
													$star_rating9 = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON TRANSPORT REVIEWS?</label>
											<?php
											if ($transportreviews_rating != "NO" && $transportreviews_rating != NULL) {
												//echo "<p id='register'>" . $transportreviews_details . "</p>";
												echo "<p id='register'>This company is present on Transport Reviews</p>";
												echo "<span>Check <a href='" . $transportreviews_link . "' target='_blank'>details</a></span>";
											} else if ($transportreviews_rating == "NO") {

												//echo "<p id='register'>" . $transportreviews_details . "<p>";
												echo "<p id='register'>This company is not present on Transport Reviews</p>";
												//echo "<span>" . $transportreviews_link . "</span>";
												echo "<span>No url available</span>";
											} else if ($transportreviews_rating ==  null) {
												echo "Nothing found from Transport Reviews";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON ANGIES LIST?-->
									<tr>
										<td>
											<label class="status_lable">

												<?php
												if (strtoupper($angies_rating) != "NO" && $angies_rating != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($angies_rating) . "</strong>";
													echo "<strong style ='color: green'>YES</strong>";
												} else if (strtoupper($angies_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($angies_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($angies_rating != NULL) {
													echo $angies_rating;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}

												$star_rating9 = substr($angies_rating, 48, -11);
												if (!empty($star_rating9) && isset($star_rating9)) {
													$star_rating9 = $star_rating9;
												} else {
													$star_rating9 = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON ANGIES LIST?</label>
											<?php
											if ($angies_rating != "NO" && $angies_rating != NULL) {
												//echo "<p id='register'>" . $angies_details . "</p>";
												echo "<p id='register'>This company is present on Angies List</p>";
												echo "<span>" . $angies_link . "</span>";
											} else if ($angies_rating == "NO") {

												//echo "<p id='register'>" . $angies_details . "<p>";
												echo "<p id='register'>This company is not present on Angies List</p>";
												//echo "<span>" . $angies_link . "</span>";
												echo "<span>No url available</span>";
											} else if ($angies_rating ==  null) {
												echo "Nothing found from Angies List";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON TRUST PILOT?-->
									<tr class="row_dark"><!-- Our default mover table does not include Trust Pilot, so this will always be NO data -->
										<td>
											<label class="status_lable">
												<?php
													echo "<strong style ='color: red'>NO</strong>";
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON TRUST PILOT?</label>
											<?php
												echo "<p id='register'>This company is not present on Trust Pilot</p>";
												echo "<span>No url available</span>";
											?>
										</td>
									</tr>
									<!--PRESENT ON TRANSPORT REPORTS?
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">

												<?php
												if (strtoupper($transportreports_rating) != "NO" && $transportreports_rating != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($transportreports_rating) . "</strong>";
													echo "<strong>" . $transportreports_rating . "</strong>";
												} else if (strtoupper($transportreports_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($transportreports_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($transportreports_rating != NULL) {
													echo $transportreports_rating;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}

												$star_rating10 = substr($transportreports_rating, 48, -11);
												if (!empty($star_rating10) && isset($star_rating10)) {
													$star_rating10 = $star_rating10;
												} else {
													$star_rating10 = 0;
												}

												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON TRANSPORT REPORTS?</label>

											<?php
											if ($transportreports_rating != "NO" && $transportreports_rating != NULL) {
												//echo "<p id='register'>" . $transportreports_details . "</p>";
												echo "<p id='register'>This company is listed on Transport Reports</p>";
												echo "<span>Check <a href='" . $transportreports_link . "' target='_blank'>details</a></span>";
											} else if ($transportreports_rating == "NO") {

												//echo "<p id='register'>" . $transportreviews_details . "<p>";
												echo "<p id='register'>This company is not listed on Transport Reports</p>";
												//echo "<span>" . $transportreports_link . "</span>";
												echo "<span>No url available</span>";
											} else if ($transportreports_rating ==  null) {
												echo "Nothing found from Transport Reports";
											}
											?>
										</td>
									</tr>-->
									<!--PRESENT ON MOVING GUARDIAN?
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if (strtoupper($movingguardian_rating) != "NO" && $movingguardian_rating != NULL) {
													//echo "<strong style ='color: green'>" . strtoupper($movingguardian_rating) . "</strong>";
													echo "<strong>" . $movingguardian_rating . "</strong>";
												} else if (strtoupper($movingguardian_rating) == "NO") {
													//echo "<strong style ='color: red'>" . strtoupper($movingguardian_rating) . "</strong>";
													echo "<strong style ='color: red'>NO</strong>";
												} else if ($movingguardian_rating != NULL) {
													echo $movingguardian_rating;
												} else {
													echo "<strong style ='color: red'>No Reviews</strong>";
												}

												$star_rating11 = substr($movingguardian_rating, 48, -11);
												if (!empty($star_rating11) && isset($star_rating11)) {
													$star_rating11 = $star_rating11;
												} else {
													$star_rating11 = 0;
												}

												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON MOVING GUARDIAN?</label>
											<?php
											if ($movingguardian_rating != "NO" && $movingguardian_rating != NULL) {
												echo "<p id='register'>" . $movingguardian_details . "</p>";
												echo "<span>Check <a href='" . $movingguardian_link . "'>details</a></span>";
											} else if ($movingguardian_rating == "NO") {

												//echo "<p id='register'>" . $movingguardian_details . "<p>";
												echo "<p id='register'>This company is not listed on Moving Guardian<p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>-->
									<!-- Angie link is HTML Link if I want to add it in the report -->
									<!-- Movers Reviewed link looks good if I want to add it in the report No-->
									<!-- Rated Mover link looks good if I want to add it in the report No-->
									<!-- Top Mover Reviews link looks good if I want to add it in the report No-->
								</tbody>
							</table>
						</div>
						<!-- check out -->
						<div class="checkout">
							<p>
								You can check out the full report of the "The Moving and Storage Industry in
								the
								U.S. Economy" from
							</p>
							<a href="http://www.promover.org/content.asp?contentid=1118" target="_blank">AMSA's Official
								Website</a>
						</div>
						<br>
						<div class="copyright">
							Copyright © 2021, MoverZfax.com.<br>
							All Rights Reserved
						</div>


						<?php
						// stars average
						$total_star = $star_rating1 + $star_rating2 + $star_rating3 + $star_rating4 + $star_rating5 + $star_rating6 + $star_rating7 + $star_rating9 + $star_rating10 + $star_rating11;
						$percentage_star = ($total_star / 55) * 100;
						$average_star = $percentage_star / 2.5;

						//Legal section
						$Legal_section = $pointers_logo + $pointers_registerd + $pointers_licensing;

						//Moving Association section percentage
						$Moving_Association_section = $points + $pointers_assosiation + $pointers_member;

						// Overall Percentage
						$Overall_Percentage = $Legal_section + $Moving_Association_section + $average_star;

						?>
						<script>
							var temp = <?php echo $Overall_Percentage; ?>;
							var avg = temp.toFixed(2) + "%";
							var percentage = document.getElementById('overall_average');
							percentage.innerHTML = avg;
							var Status_image = document.getElementById('Status_image');
							if (avg > 70) {
								percentage.style.color = "green";
								Status_image.src = "../img/pass.jpeg";
							} else {
								percentage.style.color = "red";
								Status_image.src = "../img/fail.jpeg";
							}
						</script>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script>
		var validMoverCheck = <?php echo $validMover; ?>;
		if (validMoverCheck = true){
			var element = document.getElementById('report_body');
			var opt = {
			margin: [.5, 0],
			filename: "Report Card " + <?= $usdot; ?> + '.pdf',
			html2canvas: {
				scale: 2
			},
			jsPDF: {
				unit: 'in',
				format: 'A3',
				orientation: 'portrait'
			},
			pagebreak: {
				// before: '.beforeClass',
				after: '.break_page',
			}
		};
		window.onload = (e) => html2pdf(element, opt);
		}

	</script>
	<script src="../js/html2pdf.js-master/dist/html2pdf.bundle.min.js"></script>
</body>

</html>