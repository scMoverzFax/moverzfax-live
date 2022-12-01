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
	$sql = "SELECT  company_name, company_address, company_website, contact_number, contact_person, fax_number, usdot, mc FROM claimed_movers WHERE usdot = '" . $search . "';";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		$validMover = true;
		while ($rows = mysqli_fetch_assoc($result)) {
			$movername = $rows['company_name'];
			$address = $rows['company_address'];
			$url = $rows['company_website'];
			$phone = $rows['contact_number'];
			$contact_person = $rows['contact_person'];
			$fax = $rows['fax_number'];
			$usdot = $rows['usdot'];
			$mc = $rows['mc'];

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

        $sql2 = "SELECT state_id FROM mover WHERE usdot = '" . $search . "';";
        $result2 = mysqli_query($con, $sql2);
        $rows2 = mysqli_fetch_assoc($result2);
		if($rows2 > 0){ 
        $state_id = $rows2['state_id'];
		} else {
			$state_id = 51;
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
				$sql = "SELECT state_registration_link, federal_registration_link, licensing_and_information_link, bbb_link, amca_link, hgfaa_link, ripoff_link, moving_scam_link, moverzfax_link, mover_reviews_link, yelp_link, insider_pages_link, kudzu_link, moverreviews_link, review_a_mover_link, mover_search_and_review_link, epinions_link, transport_reviews_link, angies_list_link, moving_guardian_link, transport_reports_link, mover_reviewed_link
						FROM claimed_movers WHERE usdot = '" . $search . "';";

				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while ($rows = mysqli_fetch_assoc($result)) {
						// code...

                        //Legal Information
						$state_registration_link = $rows['state_registration_link'];
                        $federal_registration_link = $rows['federal_registration_link'];
                        $licensing_and_information_link = $rows['licensing_and_information_link'];

                        //Moving Associations
                        $bbb_link = $rows['bbb_link'];
                        $amca_link = $rows['amca_link'];
                        $hgfaa_link = $rows['hgfaa_link'];

                        //Scam Alert Portal
                        $ripoff_link = $rows['ripoff_link'];
                        $moving_scam_link = $rows['moving_scam_link'];

                        //Recommended Portals
                        $moverzfax_link = $rows['moverzfax_link'];
                        $mover_reviews_link = $rows['mover_reviews_link'];
                        $yelp_link = $rows['yelp_link'];
                        $insider_pages_link = $rows['insider_pages_link'];
                        $kudzu_link = $rows['kudzu_link'];
                        $moverreviews_link = $rows['moverreviews_link'];
                        $review_a_mover_link = $rows['review_a_mover_link'];
                        $mover_search_and_review_link = $rows['mover_search_and_review_link'];
                        $epinions_link = $rows['epinions_link'];
                        $transport_reviews_link = $rows['transport_reviews_link'];
                        $angies_list_link = $rows['angies_list_link'];
                        $moving_guardian_link = $rows['moving_guardian_link'];
                        $transport_reports_link = $rows['transport_reports_link'];
                        $mover_reviewed_link = $rows['mover_reviewed_link'];
					}
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

											if ($state_registration_link) {
												echo "<p id='register'>This company is state registered.</p>";
												echo "<span>Check <a href='" . $state_registration_link . "' target='_blank'>details</a></p>";
												$pointers_logo = 10;
											} else {
												echo "<p id='register'>This company is not state registered.</p>";
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
												if ($federal_registration_link) {
													echo "<strong style ='color: green'>YES</strong>";
													$pointers_registerd = 10;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$pointers_registerd = 0;
												}
												?>
											</label>
										</td>
										<td>
										<label class="section_heading">ARE THEY FEDERALLY REGISTERED?</label>
											<?php
											if ($federal_registration_link) {
												echo "<p id='register'>This company is registered federally.</p>";
												echo "<span>Check <a href='" . $federal_registration_link . "' target='_blank'>details</a></p>";
												$pointers_licensing = 10;
											} else {
												echo "<p id='register'>This company is not registered federally.</p>";
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
												if ($licensing_and_information_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												?>
											</label>
										</td>
										<td>
										<label class="section_heading">DO THEY HAVE A PUBLIC LICENSE?</label>
											<?php
											if ($licensing_and_information_link) {
												echo "<p id='register'>This company has a public license.</p>";
												echo "<span>Check <a href='" . $licensing_and_information_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company does not have a public license.</p>";
												echo "<span>No url available</span>";
											}
											?>
                                        </td>
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
												if ($bbb_link) {
													echo "<strong style ='color: green'>YES</strong>";
													$points = 10;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$points = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">MEMBER OF BETTER BUSINESS BUREAU?</label>
											<?php
											if ($bbb_link) {
												echo "<p id='register'>This company is a member of Better Business Bureau.</p>";
												echo "<span>Check <a href='" . $bbb_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not a member of Better Business Bureau.</p>";
												echo "<span>No url available</span>";
											}
											$listing_value = substr($bbb_link, 63, -6);

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
									<!--MEMBER OF AMERICAN MOVING AND STORAGE ASSOCIATION?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($amca_link) {
													echo "<strong style ='color: green'>YES</strong>";
													$pointers_assosiation = 10;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$pointers_assosiation = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">MEMBER OF AMERICAN MOVING AND STORAGE ASSOCIATION?</label>
											<?php
											if ($amca_link) {
												echo "<p id='register'>This company is a member of the American Moving and Storage Association.</p>";
												echo "<span>Check <a href='" . $amca_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not a member of the American Moving and Storage Association.</p>";
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
												if ($hgfaa_link) {
													echo "<strong style ='color: blue'>YES</strong>";
													$pointers_member = 5;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$pointers_member = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">MEMBER OF HHGFFAA (Household Good Forwarders of America)?</label>
											<?php
											if ($hgfaa_link) {
												echo "<p id='register'>This company is a member of the Household Good Forwarders of America.</p>";
												echo "<span>Check <a href='" . $hgfaa_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not a member of the Household Good Forwarders of America.</p>";
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
												if ($ripoff_link) {
													echo "<strong style ='color: blue'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												?>

											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON RIPOFF REPORT?</label>
											<?php
											if ($ripoff_link) {
												echo "<p id='register'>This company is listed on Ripoff Report.</p>";
												echo "<span>Check <a href='" . $ripoff_link . "'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not listed on Ripoff Report.</p>";
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
												if ($moving_scam_link) {
													echo "<strong style ='color: blue'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">BLACKLISTED ON MOVING SCAM?</label>
											<?php
											if ($moving_scam_link) {
												echo "<p id='register'>This company is blacklisted on Moving Scam.</p>";
												echo "<span>Check <a href='" . $moving_scam_link . "'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not blacklisted on Moving Scam.</p>";
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
									<!--PRESENT ON MY MOVING REVIEWS?-->
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">
												<?php
												if ($mover_reviews_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating1 = substr($mover_reviews_link, 48, -11);
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
											if ($mover_reviews_link) {
												echo "<p id='register'>This company is listed on My Moving Reviews.</p>";
												echo "<span>Check <a href='" . $mover_reviews_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not listed on My Moving Reviews.</p>";
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
												if ($yelp_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												} 
												$star_rating2 = substr($yelp_link, 48, -11);
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
											if ($yelp_link) {
												echo "<p id='register'>This company is present on Yelp.</p>";
												echo "<span>Check <a href='" . $yelp_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not present on Yelp.</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON INSIDER PAGES?-->
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">
												<?php
												if ($insider_pages_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating3 = substr($insider_pages_link, 48, -11);
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
											if ($insider_pages_link) {
												echo "<p id='register'>This company is present on Insider Pages.</p>";
												echo "<span>Check <a href='" . $insider_pages_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not present on Insider Pages.</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON KUDZU?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($kudzu_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating4 = substr($kudzu_link, 48, -11);
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
											if ($kudzu_link) {
												echo "<p id='register'>This company is present on Kudzu.</p>";
												echo "<span>Check <a href='" . $kudzu_link . "' target='_blank'>details</a></span>";
											} else {
                                                echo "<p id='register'>This company is not present on Kudzu.</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON MOVER REVIEWS?-->
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">
												<?php
												if ($moverreviews_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating5 = substr($moverreviews_link, 48, -11);
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
											if ($moverreviews_link) {
												echo "<p id='register'>This company is listed on Mover Reviews.</p>";
												echo "<span>Check <a href='" . $moverreviews_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not listed on Mover Reviews.</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON REVIEW A MOVER?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($review_a_mover_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating6 = substr($review_a_mover_link, 48, -11);
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
											if ($review_a_mover_link) {
												echo "<p id='register'>This company is listed on Review a Mover.<p>";
												echo "<span>Check <a href='" . $review_a_mover_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not listed on Review a Mover.<p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON MOVERS SEARCH AND REVIEWS? HTML Link-->
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">
												<?php
												if ($mover_search_and_review_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating7 = substr($mover_search_and_review_link, 48, -11);
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
											if ($mover_search_and_review_link) {
												echo "<p id='register'>This company is present on Movers Search and Reviews.<p>";
												echo "<span>" . $mover_search_and_review_link . "</span>";
											} else {
												echo "<p id='register'>This company is not present on Movers Search and Reviews.<p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON TRANSPORT REVIEWS?-->
									<tr>
										<td>
											<label class="status_lable">

												<?php
												if ($transport_reviews_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}
												$star_rating9 = substr($transport_reviews_link, 48, -11);
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
											if ($transport_reviews_link) {
												echo "<p id='register'>This company is present on Transport Reviews.</p>";
												echo "<span>Check <a href='" . $transport_reviews_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not present on Transport Reviews.</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON TRANSPORT REPORTS?-->
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">

												<?php
												if ($transport_reports_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}

												$star_rating10 = substr($transport_reports_link, 48, -11);
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
											if ($transport_reports_link) {
												echo "<p id='register'>This company is listed on Transport Reports.</p>";
												echo "<span>Check <a href='" . $transport_reports_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not listed on Transport Reports</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON MOVING GUARDIAN?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($moving_guardian_link) {
													echo "<strong style ='color: green'>YES</strong>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
												}

												$star_rating11 = substr($moving_guardian_link, 48, -11);
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
											if ($moving_guardian_link) {
												echo "<p id='register'>This company is listed on Moving Guardian.<p>";
												echo "<span>Check <a href='" . $moving_guardian_link . "'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not listed on Moving Guardian.<p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!-- Angie link is HTML Link if I want to add it in the report -->
									<!-- Movers Reviewed link looks good if I want to add it in the report -->
									<!-- Rated Mover link looks good if I want to add it in the report -->
									<!-- Top Mover Reviews link looks good if I want to add it in the report -->
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