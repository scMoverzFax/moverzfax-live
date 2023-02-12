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
	$mover_is_scammer = false;
	require_once '../model/connection.php';
	//get the movers information from the mover table
	$search = $_GET['usdot'];
	$sql = "SELECT strike_one, strike_two, strike_three, company_name, company_website, contact_number, contact_person, fax_number, usdot, mc, country, states, city FROM mover_register WHERE usdot = '" . $search . "';";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		$validMover = true;
		while ($rows = mysqli_fetch_assoc($result)) {
			$strikeOne = $rows['strike_one'];
			$strikeTwo = $rows['strike_two'];
			$strikeThree = $rows['strike_three'];
			if($strikeOne == 1 && $strikeTwo == 1 && $strikeThree == 1){
				$mover_is_scammer = true;
			}

			$movername = $rows['company_name'];
			$url = $rows['company_website'];
			$phone = $rows['contact_number'];
			$contact_person = $rows['contact_person'];
			$fax = $rows['fax_number'];
			$usdot = $rows['usdot'];
			$mc = $rows['mc'];
			$country = $rows['country'];
			$state_abbv = $rows['states'];
			$city = $rows['city'];

			if ($movername == null) {
				$movername = "Not Specified";
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
			$state = $rows["name"];
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
	<!-- styles for the stars -->
	<style>
		/* body {
		height: 100vh;
		margin: 0;
		display: grid;
		place-items: center;
		} */
		/* .star-container {
			width: 50px;
			border: black 2px solid;
		} */
		.stars {
		position: relative;
		padding: 0rem;
		white-space: nowrap;
		}

		.stars svg {
			width: 22px;
			height: 22px;
		}

		.cover {
			background: white;
			height: 100%;
			overflow: hidden;
			mix-blend-mode: color;
			position: absolute;
			top: 0;
			right: 0;
		}
		svg {
			fill: gold;
		}
	</style>
	<?php 
	function showStars($starRating, $coverColor){ 
		$coverWidth = ((5 - $starRating) / 5) * 100;
		?>
		<div class="star-container">
			<div class="stars">
				<svg viewBox="0 0 576 512" width="25" title="star">
					<path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
				</svg>
				<svg viewBox="0 0 576 512" width="25" title="star">
					<path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
				</svg>
				<svg viewBox="0 0 576 512" width="25" title="star">
					<path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
				</svg>
				<svg viewBox="0 0 576 512" width="25" title="star">
					<path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
				</svg>
				<svg viewBox="0 0 576 512" width="25" title="star">
					<path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
				</svg>
				<div class="cover" style="width: <?php echo $coverWidth ?>%; background-color: <?php echo $coverColor ?>;"></div>
			</div>
		</div>
	  <?php
	}
	?>

	<div class="report_body" id="report_body" <?php if ($resultCheck < 1){ echo 'style="display:none;"'; } ?> >

		<!-- Conditional Scam Alert Watermark -->
		<?php 
		if($mover_is_scammer){ ?>
			<div class="scammer-watermark">
				<img class="scam_img" src="../img/scam_alert.jpeg" alt="Mover Scam Alert Image">
			</div>
		<?php }
		?>

		<!--Report Card heading and logo-->
		<section>
			<div class="d-flex">
				<div class="heading-left">
					<a href="https://moverzfax.com">Moverzfax.com</a>
					<h2>Report Card</h2>
					<p>This reputation data report is valid up until 
						<?php 
						session_start();
						if(isset($_SESSION["exp_date"])){
							echo $_SESSION["exp_date"]; 
						} else {
							echo date("m/d/Y", time() + 2628288);
						}
						?>
					</p>
				</div>
				<div class="logo">
					<img class="logo_img" src="../img/MoverZfaxLogo.jpeg" alt="">
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
							<!--  -->
						</p>
						<p>This mover have been prompted to claim this business as theirs and added crucial information to make the final grade accurate. 
							It is important to understand that unlicensed movers may misinformed you about their experience and years in the industry. 
							The Moverzfax team reviews every mover registered at United States Department of Transportation and looks for every anomaly with information provided to our platform. 
							Rest assured we double check every mover to insure that your move is serviced by a licensed professional.</p>
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
						<div id="address" class="mb-2"><?php echo $state . ", " . $country; ?></div>
						<?php 
						if($mover_is_scammer){ ?>
							<div style="color: red;">MoverzFax found this mover to be a scammer.</div>
						<?php } else {
						?>
						<div class="mb-4">Website : <a href='<?php echo $url ?>' target="_blank"><?php echo $url; ?></a></div>
						<?php } ?>
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
							<!-- <div class="row">
								<div class="recommand-continue">
									<p>
										We advise you to check the links provided on each of the report items on
										the
										right to better understand the current standing and reputation of this
										company.
									</p>
								</div>
							</div> -->
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
							<!-- <a href="https://www.protectyourmove.gov/related-sites/contactstate_view.aspx" target="_blank">States
								Department of Transportation: <br>Investigations and Assessments</a> -->
							<!-- <a href="https://nccdb.fmcsa.dot.gov/AddComplaint.asp?public=open" target="_blank">USDOT
								complaint
								Forum</a> -->
							<a href="http://ai.fmcsa.dot.gov/hhg/search.asp" target="_blank">Complaint history on moving
								companies:<br> Per USDOT# and MC# (Only Long Distance Movers)</a>
							<a href="http://safer.fmcsa.dot.gov/CompanySnapshot.aspx" target="_blank">Movers in a Glance:
								Synopsis of your chosen mover</a>
							<!-- <a href="http://ai.fmcsa.dot.gov/SMS/Default.aspx" target="_blank">Safety Summary on Moving
								companies</a> -->

							<!-- New links to add/replace -->
							<a href="https://www.fmcsa.dot.gov/protect-your-move/moving-checklist" target="_blank">
								FMCSA Moving Checklist</a>
							<a href="https://nccdb.fmcsa.dot.gov/nccdb/ComplaintEntry.aspx?choice=CONSUMER" target="_blank">
								National Consumer Complaint Database</a>
							<a href="https://www.oig.dot.gov/investigations/household-goods-moving-fraud" target="_blank">
								Household Goods Moving Fraud</a>
							<a href="https://www.fmcsa.dot.gov/consumer-protection/household-goods/protect-your-move" target="_blank">
								FMCSA Protect Your Move</a>
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
							<a href="http://www.promover.org/content.asp?contentid=1118" target="_blank">Courtesy from MSC "Moving America Professionally"</a>
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
								MSC members report operating a fleet of 50,000 trucks 32,000 tractor units
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
				$sql = "SELECT 
							 state_link,
							 federal_link,
							--  public_link,

							 bbb_link,
							 bbb_grade,
							 msc_link,
							 hhgfaa_link,

							 ripoff_link,
							 moving_scam_link,

							 google_link,
							 google_stars,
							 mover_reviews_link,
							 mover_reviews_stars,
							 yelp_link,
							 yelp_stars,
							 insider_pages_link,
							 insider_pages_stars,
							 mover_reviews_link,
							 mover_reviews_stars,
							 transport_reviews_link,
							 transport_reviews_stars,
							 angies_link,
							 angies_stars,
							 trust_pilot_link,
							 trust_pilot_stars
						FROM mover_register WHERE usdot = '" . $search . "';";

				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while ($rows = mysqli_fetch_assoc($result)) {

                        //Legal Information
						$state_link = $rows['state_link'];
                        $federal_link = $rows['federal_link'];
                        //$licensing_and_information_link = $rows['public_link'];

                        //Moving Associations
                        $bbb_link = $rows['bbb_link'];
						$bbb_grade = $rows['bbb_grade'];
                        $msc_link = $rows['msc_link'];
                        $hgfaa_link = $rows['hhgfaa_link'];

                        //Scam Alert Portal
                        $ripoff_link = $rows['ripoff_link'];
                        $moving_scam_link = $rows['moving_scam_link'];

                        //Recommended Portals
						$google_link = $rows['google_link'];
						$google_stars = $rows['google_stars'];
                        $mover_reviews_link = $rows['mover_reviews_link'];
						$mover_reviews_stars = $rows['mover_reviews_stars'];
                        $yelp_link = $rows['yelp_link'];
						$yelp_stars = $rows['yelp_stars'];
                        $insider_pages_link = $rows['insider_pages_link'];
                        $insider_pages_stars = $rows['insider_pages_stars'];
                        $moverreviews_link = $rows['mover_reviews_link'];
                        $moverreviews_stars = $rows['mover_reviews_stars'];
                        $transport_reviews_link = $rows['transport_reviews_link'];
                        $transport_reviews_stars = $rows['transport_reviews_stars'];
                        $angies_link = $rows['angies_link'];
                        $angies_stars = $rows['angies_stars'];
                        $trust_pilot_link = $rows['trust_pilot_link'];
                        $trust_pilot_stars = $rows['trust_pilot_stars'];
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

											if ($state_link) {
												echo "<p id='register'>This company is state registered.</p>";
												echo "<span>Check <a href='" . $state_link . "' target='_blank'>details</a></p>";
												$state_points = 10;
											} else {
												echo "<p id='register'>This company is not state registered.</p>";
												echo "<span>No url available</span>";
												$state_points = 0;
											}
											?>
										</td>
									</tr>
									<!-- ARE THEY FEDERALLY REGISTERED? HTML Link -->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($federal_link) {
													echo "<strong style ='color: green'>YES</strong>";
													$federal_points = 10;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$federal_points = 0;
												}
												?>
											</label>
										</td>
										<td>
										<label class="section_heading">ARE THEY FEDERALLY REGISTERED?</label>
											<?php
											if ($federal_link) {
												echo "<p id='register'>This company is registered federally.</p>";
												echo "<span>Check <a href='" . $federal_link . "' target='_blank'>details</a></p>";
											} else {
												echo "<p id='register'>This company is not registered federally.</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--DO THEY HAVE A PUBLIC LICENSE?-->
									<tr class="row_dark">
										<td>
											<label class="status_lable">
												<?php
												if ($state_link) {
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
											if ($state_link) {
												echo "<p id='register'>This company has a public license.</p>";
												echo "<span>Check <a href='" . $state_link . "' target='_blank'>details</a></span>";
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
												<style>
													#bbbGrade {
														font-family: proxima-nova,Helvetica,Arial,sans-serif;
														color: #005f86;
														font-size: 70px;
													}
												</style>
												<?php

												$bbb_points = 0;

												switch ($bbb_grade) {
													case 'A+':
													case 'a+':
													case '+A':
													case '+a':
														$bbb_grade = "A+";
														$bbb_points = 8;
														break;
													case 'A':
													case 'a':
														$bbb_grade = "A";
														$bbb_points = 7;
														break;
													case 'A-':
													case 'a-':
													case '-A':
													case '-a':
														$bbb_grade = "A-";
														$bbb_points = 6;
														break;
													case 'B+':
													case 'b+':
													case '+B':
													case '+b':
														$bbb_grade = "B+";
														$bbb_points = 5;
														break;
													case 'B':
													case 'b':
														$bbb_grade = "B";
														$bbb_points = 4;
														break;
													case 'B-':
													case 'b-':
													case '-B':
													case '-b':
														$bbb_grade = "B-";
														$bbb_points = 3;
														break;
													case 'C+':
													case 'c+':
													case '+C':
													case '+c':
														$bbb_grade = "C+";
														$bbb_points = 2;
														break;
													case 'C':
													case 'c':
														$bbb_grade = "C";
														$bbb_points = 1;
														break;
													case 'C-':
													case 'c-':
													case '-C':
													case '-c':
														$bbb_grade = "C-";
														$bbb_points = 1;
														break;
												}
												if ($bbb_link) {
													echo "<p id='bbbGrade'>" . $bbb_grade . "</p>";
												} else {
													echo "<strong style ='color: red'>NO</strong>";
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
											?>
										</td>
									</tr>
									<!--MEMBER OF PROMOVER?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($msc_link) {
													echo "<strong style ='color: green'>YES</strong>";
													$msc_points = 1;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$msc_points = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">MEMBER OF PROMOVER?</label>
											<?php
											if ($msc_link) {
												echo "<p id='register'>This company is a ProMover member.</p>";
												echo "<span>Check <a href='" . $msc_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not a ProMover member.</p>";
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
													$hgfaa_points = 1;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$hgfaa_points = 0;
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
													echo "<strong style ='color: red'>YES</strong>";
													$ripoff_points = 0;
												} else {
													echo "<strong style ='color: blue'>NO</strong>";
													$ripoff_points = 5;
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
													echo "<strong style ='color: red'>YES</strong>";
													$moving_scam_points = 0;
												} else {
													echo "<strong style ='color: blue'>NO</strong>";
													$moving_scam_points = 5;
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
									<!--PRESENT ON MOVERZFAX?-->
									<tr class="row_dark">
										<td>
											<label class="status_lable">
												<strong style ='color: red'>NO</strong>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON MOVERZFAX?</label>
											<p id='register'>MoverzFax reviews COMING SOON!</p>
										</td>
									</tr>
									<!--PRESENT ON GOOGLE?-->
									<tr>
										<td class="">
											<label class="status_lable">
												<?php
												if ($google_link) {
													showStars($google_stars, 'white');
													$google_points = $google_stars * 2;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$google_points = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON GOOGLE MY BUSINESS?</label>
											<?php
											if ($google_link) {
												echo "<p id='register'>This company is listed on Google.</p>";
												echo "<span>Check <a href='" . $google_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not listed on Google.</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON MY MOVING REVIEWS?-->
									<tr class="row_dark">
										<td class="">
											<label class="status_lable">
												<?php
												if ($mover_reviews_link) {
													showStars($mover_reviews_stars, '#eeeeee');
													$my_moving_points = $mover_reviews_stars * 2;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$my_moving_points = 0;
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
													showStars($yelp_stars, 'white');
													$yelp_points = $yelp_stars * 2;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$yelp_points = 0;
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
													showStars($insider_pages_stars, '#eeeeee');
													$insider_pages_points = $insider_pages_stars * 2;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$insider_pages_points = 0;
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
									<!--PRESENT ON MOVER REVIEWS?-->
									<tr>
										<td class="">
											<label class="status_lable">
												<?php
												if ($moverreviews_link) {
													showStars($moverreviews_stars, 'white');
													$mover_reviews_points = $moverreviews_stars * 2;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$mover_reviews_points = 0;
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
									<!--PRESENT ON TRANSPORT REVIEWS?-->
									<tr class="row_dark">
										<td>
											<label class="status_lable">

												<?php
												if ($transport_reviews_link) {
													showStars($transport_reviews_stars, '#eeeeee');
													$transport_reviews_points = $transport_reviews_stars * 2;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$transport_reviews_points = 0;
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
									<!--PRESENT ON ANGIES LIST?-->
									<tr>
										<td>
											<label class="status_lable">
												<?php
												if ($angies_link) {
													showStars($angies_stars, 'white');
													$angies_points = $angies_stars * 2;
												} else {
													echo "<strong style ='color: red'>NO</strong>";
													$angies_points = 0;
												}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON ANGIES LIST?</label>
											<?php
											if ($angies_link) {
												echo "<p id='register'>This company is present on Angies List</p>";
												echo "<span>Check <a href='" . $angies_link . "' target='_blank'>details</a></span>";
											} else {
												echo "<p id='register'>This company is not present on Angies List</p>";
												echo "<span>No url available</span>";
											}
											?>
										</td>
									</tr>
									<!--PRESENT ON TRUST PILOT?-->
									<tr class="row_dark">
										<td>
											<label class="status_lable">
												<?php
													if ($trust_pilot_link) {
														showStars($trust_pilot_stars, '#eeeeee');
														$trust_pilot_points = $trust_pilot_stars * 2;
													} else {
														echo "<strong style ='color: red'>NO</strong>";
														$trust_pilot_points = 0;
													}
												?>
											</label>
										</td>
										<td>
											<label class="section_heading">PRESENT ON TRUST PILOT?</label>
											<?php
												if ($trust_pilot_link) {
													echo "<p id='register'>This company is present on Trust Pilot</p>";
													echo "<span>Check <a href='" . $trust_pilot_link . "' target='_blank'>details</a></span>";
												} else {
													echo "<p id='register'>This company is not present on Trust Pilot</p>";
													echo "<span>No url available</span>";
												}
											?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- Discrepancy Disclaimer -->
						<div>
							<p>
						As accuracy in our reports is our #1 priority, it is important for us to be notified if any of the 
						star ratings showing on the report display inaccurate data. We strive to provide you with information 
						you can trust prior to selecting your mover. If in any instances, you come across errors related to 
						star grades, email us at support@moverzfax.com so we can update the information in our system and 
						resend you a more accurate report.
							</p>
						</div>
						<!-- check out -->
						<div class="checkout">
							<p>
								You can check out the full report of the "The Moving and Storage Industry in
								the
								U.S. Economy" from
							</p>
							<a href="https://www.moving.org/" target="_blank">MSC's Official
								Website</a>
						</div>
						<br>
						<div class="copyright">
							Copyright © 2023, MoverZfax.com.<br>
							All Rights Reserved
						</div>

 
						<?php
						//Legal section
						$Legal_section = $state_points + $federal_points;

						//Moving Association section percentage
						$Moving_Association_section = $bbb_points + $msc_points + $hgfaa_points;

						//Scam Section
						$Scam_Alert_section = $ripoff_points + $moving_scam_points;

						//Reviews Portal
						$Reviews_section = $google_points + $my_moving_points + $yelp_points + $insider_pages_points + $mover_reviews_points + $transport_reviews_points + $angies_points + $trust_pilot_points;

						// Overall Percentage
						$Overall_Percentage = (($Legal_section + $Moving_Association_section + $Scam_Alert_section + $Reviews_section) / 110) * 100;

						?>
						<script>
							var temp = <?php echo $Overall_Percentage; ?>;
							var avg = temp.toFixed(2) + "%";
							var percentage = document.getElementById('overall_average');
							percentage.innerHTML = avg;
							var Status_image = document.getElementById('Status_image');
							if (temp.toFixed(2) > 70) {
								percentage.style.color = "green";
								if(temp.toFixed(2) > 85){
									Status_image.src = "../img/goldBadge.png";
									//Mover who proved to conduct itself with professionalism and plenty 
									//of experience in the industry where quality and Customer service is it's #1 priority
								} else {
									Status_image.src = "../img/pass.jpeg";
								}
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