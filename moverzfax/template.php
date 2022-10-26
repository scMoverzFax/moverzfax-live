<!-- PHP CONNECTION -->
<?php 
	session_start();
	$user_id = isset($_SESSION['id']) && !empty($_SESSION['id'])?$_SESSION['id']:0;

	if($user_id == 0){
			header("Location: index.php");
		}
		require_once 'model/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
	<style type="text/css">
		body{
			font-family: Arial;

		}
		.reportCard{
			height: 100px;
			width: 50%;
			float: left;
		}
		.reportCard {
			line-height: 3px;
			height: 50px;
		}
		.reportCard p a{
			margin-left: 0.1;

		}
		.reportCard p, #register{
			color: grey;
		}
		.reportCard #reportCard{
			color: darkblue;
		}
		#logo{
			float: right;
			height: 100px;
			width: 500px;
			position: relative;
		}
		.disclaimer, .company{
			margin-left: 30px;
			width: 90%;
			text-align: justify;
		}
		.disclaimer h2{
			color: skyblue;
		}
		.companyDetails{
			width: 40%;
			float: left;
		}
		.legalInfo{
			width: 58%;
			float: right;
		}
		.companyDetails #address{
			color: grey;
		}
		.company .companyDetails table #header{
			color: black;
			background-color: lightgrey;
			width: 60%;
			padding: 5px;
		}
		#info{
			line-height: 15px;
		}
		#info td h5{
			line-height: 0.5px;
		}
		#li{
			background-color: skyblue;
			padding: 5px;
			color: #fff;
		}
		.st{
			color: grey;
			text-align: center;
			margin-top: 20px;
			font-size: 60px;
		}
		.legalInfo .header table {
			border: solid black 1px;
			width: 100%;
		}
		.legalInfo .header table #tr1, .legalInfo .header table #tr3{
			background-color: lightgrey;
		}
		.passed img{
			width: 40%;
			height:100%;
			float: left;
		}
		.recommand{
			text-align: justify;
			float: right;
			width: 60%;
			line-height: 10px;
			font-size: 10px;
		}
		.recommand-continue{
			text-align: justify;
			width: 100%;
			line-height: 10px;
			font-size: 10px;
		}
		.passed, .movingtask{
			width: 100%;
			height:100px;
		}
		.movingtask h3{
			background-color: lightgrey;
			text-align: center;
			padding: 10px;
			color: #fff;
		}
		.movingtask{
			text-align: center;			
		}
		.movingtask a{
			color: red;
			text-decoration: none;
			font-weight: bold;
			margin-top: -10px;
		}
		.notice{
			text-align: justify;
			border: solid black 1px;
			padding: 20px;
		}
		.consumerresources a, .owing a{
			text-decoration: none;
		}

				.footer{
         position:bottom;
         bottom:0;
         width:100%;
         height: 80px;
         font-weight: bolder;
         font-style: italic;
         color: lightgrey;
         font-size: 25px;
		}
		#head{
			background-color: #eeeeee;
		}

	</style>

<body >
<div id="bdy">
	<?php 
		$search = $_GET['usdot'];
		$sql = "SELECT  name, address, url, phone, contact_person, fax, usdot, mc FROM mover WHERE usdot = '".$search."';";
		$result = mysqli_query($con, $sql);	
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0){

			while ($rows = mysqli_fetch_assoc($result)) {
				$movername = $rows['name'];
				$address = $rows['address'];
				$url = $rows['url'];
				$phone = $rows['phone'];
				$contact_person = $rows['contact_person'];
				$fax = $rows['fax'];
				$usdot = $rows['usdot'];
				$mc = $rows['mc'];

				if ($movername == null){
					$movername = "Not Specified";
				}
				if($address == null){
					$address = "Not Name";
				}
				if ($url == null){
					$url = "Not Specified";		
				}
				if($phone == null){
					$phone = "Not Specified";
				}
				if($contact_person == null){
					$contact_person = "Not Specified"; 
				}
				if ($fax == null){
					$fax = "Not Specified";
				}
				if ($usdot == null){
					$usdot = "Not Specified";
				}
				if ($mc == null){
					$mc = "Not Specified";
				}
			}

		}else {

			echo "THERE IS NO SUCH DATA FROM THE MOVERSFAX " .$conn -> error ;
		}
	?>
	<div class="reportCard">
		<p>
			<a href="https://moverzfax.com">Moverzfax.com</a>
			<h1 id="reportCard">Report Card</h1>
			<p>This reputation data report is valid up until <br><br><br><br><br>
				<?php 
					$date = date("l jS \of F Y h:i:s A"); echo "".$date;
				?>
			</p>
		</p>
	</div>
	<div class="image"> 
		<img src="img/logo.png" id="logo">
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="disclaimer">
		<p>
			<h2>DISCLAIMER</h2>
			Information contained in this Report Card is factual and is based on real data gathered from reputable sites and government agencies. The GRADE presented is computed based on the data gathered on the exact date this report was generated. Thus, the links provided may no longer be updated if the current date is too far from the date this report was generated. Therefore, we advise you to login to your MoverZfax.com account and re-run the report to get the latest facts and information about this company.<br><br>
			A link is provided in every section to verify the validity of the report presented.
		</p>
	</div>

	<!-- Company Details  -->
	<div class="company">
		<div class="companyDetails">
			<h3><?php echo " " .$movername; ?></h3>
			<span id="address"> <?php echo "".$address; ?></span><br><br><br>
			<span>Wesbiste : <a href='<?php echo $url ?>'><?php echo $url; ?></a> </span>
			<br>
			<br>
			<table>
				<tr>
					<td id="header">Contact Number</td>
					<td id="head"><?php echo "".$phone; ?></td>
				</tr>
				<tr>
					<td id="header">Contact Person</td>
					<td id="head"><?php echo "" .$contact_person; ?></td>
				</tr>	
				<tr>
					<td id="header">Fax</td>
					<td id="head"><?php echo "".$fax; ?></td>
				</tr>
				<tr>
					<td id="header">USDOT#</td>
					<td id="head"><?php echo "".$usdot; ?></td>
				</tr>
				<tr>
					<td id="header">MC#</td>
					<td id="head"><?php echo "".$mc; ?></td>  
				</tr>
			</table>
			<div class="st" id="overall_average"><strong></strong></div>
			<!-- PASSED -->
			<div class="passed">
				<img src="img/passed.jpg" alt="" id="img_pass_fail">
				<div class="recommand">
					<p>
						Though MoverZfax.com personally recommends those movers with a grade of 85% or higher, it is still your decision that matters
					</p>
				</div>
				<div class="recommand-continue">
					<p>
						We advise you to check the links provided on each of the report items on the right to better understand the current standing and reputation of this company.
					</p>
				</div>
			</div>
			<br><br>
			<!-- SPECIAL MOVING TASK -->
			<div class="movingtask">
				<h3>SPECIAL MOVING TASK FORCE</h3>
				<span><a href="http://www.moverzfax.com/special-moving-task-force-service.html">Click for details.</a></span>
			</div>
			<br><br>
			<!-- Important notice -->
			<div class="notice">
				<h3>IMPORTANT NOTICE:</h3>
				<p>
					Based on all reviews given accross all website on the net regarding your chosen mover, we summarized the grade based on honesty, professionalism, Appearance, and punctuality. Our grade is calculated based on complex algorythm to provide you, our customer, this detailed evaluation on your service provider. Any grades above 85% is worth considering for your upcoming move.
				</p>
			</div>
			<br><br>
			<!-- CONSUMER RESOURCES -->
			<div class="consumerresources">
				<h3>CONSUMER RESOURCES</h3>
				<a href="https://www.protectyourmove.gov/related-sites/contactstate_view.aspx">States Department of Transportation: Investigations and Assessments</a><br><br>
				<a href="https://nccdb.fmcsa.dot.gov/AddComplaint.asp?public=open">USDOT complaint Forum</a><br><br>
				<a href="http://ai.fmcsa.dot.gov/hhg/search.asp">Complaint history on moving companies: Per USDOT# and MC# (Only Long Distance Movers)</a><br><br>
				<a href="http://safer.fmcsa.dot.gov/CompanySnapshot.aspx">Movers in a Glance: Synopsis of your chosen mover</a><br><br>
				<a href="http://ai.fmcsa.dot.gov/SMS/Default.aspx">Safety Summary on Moving companies</a>
			</div>
			<br><br>
			<!-- REIMBURSEMENT POLICY: -->
			<div class="notice">
				<h3>REIMBURSEMENT POLICY:</h3>
				<p>
					Purchases are final. However, If any of these links are not correct or information is not available, please contact us by providing us the Moving company name, USDOT number and we will provide you with updated information on that mover. We constantly check every links for accuracy so we will make sure to update you with any changes on the mover's status.				
				</p>
			</div>
			<br><br>
			<!-- OVING AND STORAGE INDUSTRY TRENDS -->
			<div class="owing">
				<h3>OVING AND STORAGE INDUSTRY TRENDS</h3>
				<a href="http://www.promover.org/content.asp?contentid=1118">Courtesy from AMSA "Moving America Professionally"</a><br>
				<p>
					
					Consists of 35,000 companies operating at 17,000 locations primarily providing moving and storage services for household and office goods includes van lines, van line agents, independent
					full-service movers, international movers,
					forwarders, and auto transporters employs	  122,600 people with an annual payroll of $3.6
					billion is composed of mostly small businesses:
				</p>
				<br><br>
				<li>47.8% of industry companies employ fewer than 5 people.</li>
				<li>Only 8.5% of industry companies employ 100 or more people.</li>
				<br><br>
				<p>
					AMSA members report operating a fleet of 50,000	  trucks 32,000 tractor units for pulling semi-trailers
					and 18,000 straight trucks) regulated by the U.S. Department of Transportation and state motor vehicle agencies.
				</p>

				<br><br>
				<p>
					If services are conducted across state lines, the firm must be licensed by the Federal Motor Carrier Safety Administration. Professional movers may also be under the jurisdiction of state regulatory agencies.
				</p>
			</div>

			<!-- check out -->
			<style type="text/css">
				.checkout p{
					font-style: italic;
					text-align: center;
					font-size: 20px;
					color: lightgrey;
				}
				.checkout{
					width: 60%;
					text-align: center;
				}

			</style>
			<br>
			<div class="checkout">
				<p>
					You can check out the full report of the "The Moving and Storage Industry in the U.S. Economy" from
				</p>
				<a href="http://www.promover.org/content.asp?contentid=1118">AMSA's Official Website</a>
			</div>
			<br>

			<div class="copyright">
				Copyright © 2021, MoverZfax.com.
				All Rights Reserved
			</div>

		</div>
		<!-- Legal Information -->
		<?php 

		// LEGAL INFORMATION
			$sql = "SELECT state_registration_listed, state_registration_details, state_registration_link, 	safer_listed, safer_details, safer_link,fmcsa_listed, safer_details, safer_link,fmcsa_listed,fmcsa_details,fmcsa_link, bbb_listed,bbb_details,bbb_link,amsa_listed,amsa_details,amsa_link,hhgfaa_listed,hhgfaa_details,hhgfaa_link,ripoffreport_listed,ripoffreport_details,ripoffreport_link,movingscam_listed,movingscam_details,movingscam_link,mymovingreviews_rating,mymovingreviews_details,mymovingreviews_link,yelp_rating,yelp_details,yelp_link,insiderpages_rating,insiderpages_details,insiderpages_link,kudzu_rating,kudzu_details,kudzu_link,kudzu_rate,moversreviewed_rating,moversreviewed_details,moversreviewed_link,reviewamover_rating,reviewamover_details,reviewamover_link,moverssearchandreviews_rating,moverssearchandreviews_details,moverssearchandreviews_link,angies_rating,angies_details,angies_link,transportreviews_rating,transportreviews_details,transportreviews_link,transportreports_rating,transportreports_details,transportreports_link,movingguardian_rating,movingguardian_details,movingguardian_link FROM mover WHERE usdot = '".$search."';";

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

					// PRESENT ON KUDZU?
					$kudzu_rating = $rows['kudzu_rating'];
					$kudzu_details = $rows['kudzu_details'];
					$kudzu_link = $rows['kudzu_link'];
					$kudzu_rate = $rows['kudzu_rate'];

					// PRESENT ON MOVER REVIEWS?
					$moversreviewed_rating = $rows['moversreviewed_rating'];
					$moversreviewed_details = $rows['moversreviewed_details'];
					$moversreviewed_link = $rows['moversreviewed_link'];

					// PRESENT ON REVIEW A MOVER?
					$reviewamover_rating = $rows['reviewamover_rating'];
					$reviewamover_details = $rows['reviewamover_details'];
					$reviewamover_link = $rows['reviewamover_link'];

					// PRESENT ON MOVERS SEARCH AND REVIEWS?
					$moverssearchandreviews_rating = $rows['moverssearchandreviews_rating'];
					$moverssearchandreviews_details = $rows['moverssearchandreviews_details'];
					$moverssearchandreviews_link = $rows['moverssearchandreviews_link'];

					// PRESENT ON EPINIONS?
					//epinions not found


					// PRESENT ON ANGIE'S LIST? 
					$angies_rating = $rows['angies_rating'];
					$angies_details = $rows['angies_details'];
					$angies_link = $rows['angies_link'];

					// PRESENT ON TRANSPORT REVIEWS? 
					$transportreviews_rating = $rows['transportreviews_rating'];
					$transportreviews_details = $rows['transportreviews_details'];
					$transportreviews_link = $rows['transportreviews_link'];

					// PRESENT ON TRANSPORT REPORTS? 
					$transportreports_rating = $rows['transportreports_rating'];
					$transportreports_details = $rows['transportreports_details'];
					$transportreports_link = $rows['transportreports_link'];

					// PRESENT ON MOVING GUARDIAN? 
					$movingguardian_rating = $rows['movingguardian_rating'];
					$movingguardian_details = $rows['movingguardian_details'];
					$movingguardian_link = $rows['movingguardian_link'];

					// PRESENT ON MOVERS REVIEWED? 
					// movers reviewed not found
				}
				// echo "".$kudzu_rate;
			}
			else {
				echo "No data found " .$conn -> error;
			}


		?>
		<div class="legalInfo">
			<div class="header">
				<h4 id="li">Legal Information</h4>
				<table id="info">
					<tr id="tr1">
					<td style="text-align:center"><img src="img/legalinformation.png"></td>
						<td>
							<h5>ARE THEY STATE REGISTERED?</h5>
							<?php 
								//if($state_registration_details == $s){
									// echo "<span id='register'>".$state_registration_details. "</span><br><br>";
									// echo "<span>Check <a href='".$state_registration_listed."'>details</a></span>";
								// /*}else*/ if ($state_registration_listed == null){

									// echo "<span id='register'>This company is not state registered</span><br><br>";
									// echo "<span>No url avaliable</span>";
								// }

								if(!empty($state_registration_listed) && isset($state_registration_listed))
								{
									echo "<span id='register'>".$state_registration_details. "</span><br><br>";
									echo "<span>Check Logo Here <a href='".$state_registration_listed."'>details</a></span>";
									$pointers_logo = 10;
								}
								else
								{
									echo "<span id='register'>This company is not state registered</span><br><br>";
									echo "<span>No url avaliable</span>";
									$pointers_logo = 0;
								}
								
							?>
						</td>
					</tr>
					<tr id="tr2">
					<td style="text-align:center">
							<?php 
								if ($safer_listed == "YES"){
									echo "<strong style ='color: green'>" .$safer_listed. "</strong>";
									$pointers_registerd = 10;
								}else{
									echo "<strong style ='color: red'>" .$safer_listed. "</strong>";	
									$pointers_registerd = 0;		
								}
							?>

						</td>

						<!-- access forbidden -->
						<td>
							<h5>ARE THEY FEDERAL REGISTERED?</h5>
							<?php 
								if($safer_listed == "YES"){
									echo "<span id='register'>".$safer_details."</span><br><br>";
									echo "<span>Check <a href='".$safer_link."'>details</a></span>";
									$pointers_licensing = 10;
								}else{

									echo "<span id='register'>This company is not a member of the American Moving and Storage Association.</span><br><br>";
									echo "<span>No url avaliable</span>";
									$pointers_licensing = 0;
								}
							?>
							
						</td>
					</tr>

					<!-- LINK IS NOT FOUND -->
					<tr id="tr3">
					<td style="text-align:center">
							<?php 
								if ($fmcsa_listed == "YES"){
									echo "<strong style ='color: green'>" .$fmcsa_listed. "</strong>";
								}else if($fmcsa_listed == "NO"){
									echo "<strong style ='color: red'>" .$fmcsa_listed. "</strong>";			
								}
							?>
						</td>
						<td>
							<h5>LICENSING AND INFORMATION</h5>
							<?php 
								if($safer_listed == "YES"){
									echo "<span id='register'>".$fmcsa_details."</span><br><br>";
									echo "<span>Check <a href='".$fmcsa_link."'>details</a></span>";
								}else if ($safer_listed == "NO"){

									echo "<span id='register'>This company is not a member of the American Moving and Storage Association.</span><br><br>";
									echo "<span>No url avaliable</span>";
								}
							?>

<!-- 							<h5>LICENSING AND INFORMATION</h5>
							<span id="register">We haven't found any public license relating to this
							company.</span><br><br>
							<span>No url avaliable</span>
 -->						</td>
						</td>
					</tr>
				</table>
				
				<!-- Moving Associations -->
				<div class="movingAssociations">
					<h4 id="li">Moving Association</h4>
					<table>
						<tr id="tr1">
						    <td style="text-align:center"><?= $bbb_listed;?></td>
							<td>
								<h5>MEMBER OF BETTER BUSINESS BUREAU?</h5>
								<?php 
									if($bbb_listed == "YES"){
										echo "<span id='register'>".$bbb_details."</span><br><br>";
										echo "<span>Check <a href='".$bbb_link."'>details</a></span>";

									}else{

										echo "<span id='register'>This company is not the member of BETTER BUSINESS BUREAU <span><br><br>";
										echo "<span>No url avaliable</span>";
									}
									$listing_value= substr($bbb_listed,63,-6);
									
									if($listing_value == 'a-plus' || $listing_value == 'a')
									{
										$points = 45;
									}
									else if($listing_value == 'b-plus' || $listing_value == 'b')
									{
										$points = 35;
									}
									else if($listing_value == 'c-plus' || $listing_value == 'c')
									{
										$points = 25;
									}
									else if($listing_value == 'd-plus' || $listing_value == 'd' || $listing_value == 'e' || $listing_value == 'f')
									{
										$points = 15;
									}
									else{
										$points = 5;
									}
									
								?>
							</td>
						</tr>
						
						<!-- LINK NO FOUND -->
						<tr id="tr2">
						<td style="text-align:center">	
								<?php 
									if ($amsa_listed == "YES"){
										echo "<strong style ='color: green'>" .$amsa_listed. "</strong>";
										$pointers_assosiation = 10;
									}else{
										echo "<strong style ='color: red'>" .$amsa_listed. "</strong>";	
										$pointers_assosiation = 0;
									}
								?>
							</td>
							<td>
								<h5>MEMBER OF AMERICAN MOVING AND STORAGE ASSOCIATION?</h5>
								<?php
									if($amsa_listed == "YES"){
										echo "";
										echo "<span id='register'>".$amsa_details."</span><br><br>";
										echo "<span>Check <a href='".$amsa_link."'>details</a></span>";
									}else if ($amsa_listed == "NO"){

										echo "<span id='register'>This company is not a member of the American Moving and Storage Association.<span><br><br>";
										echo "<span>No url avaliable</span>";
									}
								?>
							</td>
						</tr>

						<!-- LINK NOT FOUND -->
						<tr id="tr3">
						<td style="text-align:center">
						<!-- 							$hhgfaa_listed = $rows['hhgfaa_listed'];
					$hhgfaa_details = $rows['hhgfaa_details'];
					$hhgfaa_link = $rows['hhgfaa_link']; -->

							<?php 
								if ($hhgfaa_listed == "YES"){
									echo "<strong style ='color: blue'>" .$hhgfaa_listed. "</strong>";
									$pointers_member = 5;
								}else{
									echo "<strong style ='color: red'>" .$hhgfaa_listed. "</strong>";	
									$pointers_member = 0;		
								}
							?>
							</td>
							<td>
								<h5>MEMBER OF HHGFFAA (Household Good Forwarders of America)?</h5>
								<?php
									if($hhgfaa_listed == "YES"){
										echo "";
										echo "<span id='register'>".$hhgfaa_details."</span><br><br>";
										echo "<span>Check <a href='".$hhgfaa_link."'>details</a></span>";
									}else if ($hhgfaa_listed == "NO"){

										echo "<span id='register'>".$hhgfaa_details." <span><br><br>";
										echo "<span>No url avaliable</span>";
									}
								?>
							</td>
						</tr>
					</table>
				</div>

				<!-- Scam Alert -->
				<div class="scamAlert">
					<h4 id="li">Scam Alert Portal</h4>
					<table>

						<!-- LINK NOT FOUND -->
						<tr id="tr1">
							<!-- 	$ripoffreport_listed = $rows['ripoffreport_listed'];
					$ripoffreport_details = $rows['ripoffreport_details'];
					$ripoffreport_link = $rows['ripoffreport_link'];
 -->
 					<td style="text-align:center">	
								<?php 
									if ($ripoffreport_listed == "YES"){
										echo "<strong style ='color: blue'>" .$ripoffreport_listed. "</strong>";
									}else if($ripoffreport_listed == "NO"){
										echo "<strong style ='color: red'>" .$ripoffreport_listed. "</strong>";			
									}
								?>

							</td>
							<td>
								<h5>PRESENT ON RIPOFF REPORT?</h5>
								<?php
									if($ripoffreport_listed == "YES"){
										echo "<h5>PRESENT ON RIPOFF REPORT?</h5>";
										echo "<span id='register'>".$ripoffreport_details."</span><br><br>";
										echo "<span>Check <a href='".$ripoffreport_link."'>details</a></span>";
									}else if ($ripoffreport_listed == "NO"){

										echo "<span id='register'>".$ripoffreport_details." <span><br><br>";
										echo "<span>No url avaliable</span>";
									}

								?>
							</td>
						</tr>
						<tr id="tr2">
						<td style="text-align:center">							
								<?php 
									if ($ripoffreport_listed == "YES"){
										echo "<strong style ='color: blue'>" .$ripoffreport_listed. "</strong>";
									}else if($ripoffreport_listed == "NO"){
										echo "<strong style ='color: red'>" .$ripoffreport_listed. "</strong>";			
									}
								?>
							</td>
							<td>
								<h5>BLACKLISTED ON MOVING SCAM?</h5>
								<?php 
									if($ripoffreport_listed == "YES"){
										echo "<span id='register'>".$ripoffreport_details."</span><br><br>";
										echo "<span>Check <a href='".$ripoffreport_link."'>details</a></span>";
									}else if ($ripoffreport_listed == "NO"){

										echo "<span id='register'>".$ripoffreport_details."<span><br><br>";
										echo "<span>No url avaliable</span>";
									}
								?>
							</td>
						</tr>
					</table>
				</div>
				<!-- Recommended Portal -->
				<div id="break_page"></div>
				<div class="scamAlert">
					<h4 id="li">Recommended Portal</h4>
					<table>
					
<!-- 						<tr id="tr1">
							<td>
								<?php 
/*									if ($movername == "Yes"){
										echo "<strong style ='color: blue'>" .$decision. "</strong>";
									}else if($decision == "No"){
										echo "<strong style ='color: red'>" .$decision. "</strong>";			
									}
*/								?>
									
							</td>
							<td>
								<h5>PRESENT ON MOVERZFAX?</h5>
									<?php 
/*										if($decision == "Yes"){
											echo "<span id='register'>This company has not been rated yet.</span><br><br>";
											echo "<span>Check <a href='http://www.moverzfax.com/mover-get-detail/proace-moving-and-storage-llc-7963'>details</a></span>";
										}else if ($decision == "No"){

											echo "<span id='register'>This company is not part of MoverZfax<span><br><br>";
											echo "<span>No url avaliable</span>";
										}
*/									?>									
							</td>
						</tr> -->

						<!-- LINK NOT FOUND -->
                         <tr id="tr2">
							<td style="text-align:center">
								<!-- 					$mymovingreviews_rating = $rows['mymovingreviews_rating'];
					$mymovingreviews_details = $rows['mymovingreviews_details'];
					$mymovingreviews_link = $rows['mymovingreviews_link'];
 -->
								<?php 
									if (strtoupper($mymovingreviews_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($mymovingreviews_rating). "</strong>";
									}else if(strtoupper($mymovingreviews_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($mymovingreviews_rating). "</strong>";			
									}else if($mymovingreviews_rating != NULL){
										echo $mymovingreviews_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}

									$star_rating1 = substr($mymovingreviews_rating,48,-11);
									if(!empty($star_rating1) && isset($star_rating1))
									{
										$star_rating1 = $star_rating1;
									}
									else
									{
										$star_rating1 = 0;
									}
			
								?>

							</td>
							<td>
								<h5>PRESENT ON MY MOVING REVIEWS?</h5>
									<?php 
										if($mymovingreviews_rating == "YES"){
											echo "<span id='register'>".$mymovingreviews_details."</span><br><br>";
											echo "<span>Check <a href='".$mymovingreviews_link."'>details</a></span>";
										}else if ($mymovingreviews_rating == "NO"){

											echo "<span id='register'>".$mymovingreviews_details."<span><br><br>";
											echo "<span>No url avaliable</span>";
										}
									?>	
							</td>
						</tr>

						 <tr id="tr3">
						 	<!-- 					$yelp_rating = $rows['yelp_rating'];
					$yelp_details = $rows['yelp_details'];
					$yelp_link = $rows['yelp_link'];
 -->
 							<td style="text-align:center">
							<?php 
									if (strtoupper($yelp_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($yelp_rating). "</strong>";
									}else if(strtoupper($yelp_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($yelp_rating). "</strong>";			
									}else if($yelp_rating != NULL){
										echo $yelp_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}
									$star_rating2 = substr($yelp_rating,48,-11);
									if(!empty($star_rating2) && isset($star_rating2))
									{
										$star_rating2 = $star_rating2;
									}
									else
									{
										$star_rating2 = 0;
									}
								?>

							</td>
							<td>
								<h5>PRESENT ON YELP?</h5>
									<?php 
										if($yelp_rating == "YES"){
											echo "<span id='register'>".$yelp_details."</span><br><br>";
											echo "<span>Check <a href='".$yelp_link."'>details</a></span>";
										}else if ($yelp_rating == "NO"){

											echo "<span id='register'>".$yelp_details."<span><br><br>";
											echo "<span>No url avaliable</span>";
										}else if ($yelp_rating == null){
											echo "Nothing found <br> ffrom yelp";
										}							
									?>
							</td>
						</tr>

						<!-- LINK NOT FOUND -->
						 <tr id="tr4">
						 <td style="text-align:center">
								<!-- 
					$insiderpages_rating = $rows['insiderpages_rating'];
					$insiderpages_details = $rows['insiderpages_details'];
					$insiderpages_link = $rows['insiderpages_link'];

								 -->
								<?php 
									
									if (strtoupper($insiderpages_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($insiderpages_rating). "</strong>";
									}else if(strtoupper($insiderpages_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($insiderpages_rating). "</strong>";			
									}else if($insiderpages_rating != NULL){
										echo $insiderpages_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}
									$star_rating3 = substr($insiderpages_rating,48,-11);
									if(!empty($star_rating3) && isset($star_rating3))
									{
										$star_rating3 = $star_rating3;
									}
									else
									{
										$star_rating3 = 0;
									}
								?>

							</td>
							<td>
								<h5>PRESENT ON INSIDER PAGES?</h5>
								<?php 
									if($insiderpages_rating == "YES"){
										echo "<span id='register'>".$insiderpages_details."</span><br><br>";
										echo "<span>Check <a href='".$insiderpages_link."'>details</a></span>";
									}else if ($insiderpages_rating == "NO"){

										echo "<span id='register'>".$insiderpages_details."<span><br><br>";
										echo "<span>No url avaliable</span>";
									}
								?>
							</td>
						</tr>

						 <tr id="tr1">
						 	<!-- 					$kudzu_rating = $rows['kudzu_rating'];
					$kudzu_details = $rows['kudzu_details'];
					$kudzu_link = $rows['kudzu_link']; -->
					<td style="text-align:center">
							<?php 
									if (strtoupper($kudzu_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($kudzu_rating). "</strong>";
									}else if(strtoupper($kudzu_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($kudzu_rating). "</strong>";			
									}else if($kudzu_rating != NULL){
										echo $kudzu_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}
									$star_rating4 = substr($kudzu_rating,48,-11);
									if(!empty($star_rating4) && isset($star_rating4))
									{
										$star_rating4 = $star_rating4;
									}
									else
									{
										$star_rating4 = 0;
									}
							?>

							</td>
							<td>
								<h5>PRESENT ON KUDZU?</h5>
									<?php 
										if($kudzu_rating == "YES"){
											echo "<span id='register'>".$kudzu_details."</span><br><br>";
											echo "<span>Check <a href='".$kudzu_link."'>details</a></span>";
										}else if ($kudzu_rating == "NO"){

											echo "<span id='register'>".$kudzu_details."<span><br><br>";
											echo "<span>No url avaliable</span>";
										}
									?>
							</td>
						</tr>

						 <tr id="tr6">
						 	<!-- 					$moversreviewed_rating = $rows['moversreviewed_rating'];
					$moversreviewed_details = $rows['moversreviewed_details'];
					$moversreviewed_link = $rows['moversreviewed_link']; -->
					<td style="text-align:center">
							<?php 
									if (strtoupper($moversreviewed_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($moversreviewed_rating). "</strong>";
									}else if(strtoupper($moversreviewed_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($moversreviewed_rating). "</strong>";			
									}else if($moversreviewed_rating != NULL){
										echo $moversreviewed_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}

									$star_rating5 = substr($moversreviewed_rating,48,-11);
									if(!empty($star_rating5) && isset($star_rating5))
									{
										$star_rating5 = $star_rating5;
									}
									else
									{
										$star_rating5 = 0;
									}
							?>

							</td>
							<td>
								<h5>PRESENT ON MOVER REVIEWS?</h5>
									<?php 
										if($moversreviewed_rating == "YES"){
											echo "<span id='register'>".$moversreviewed_details."</span><br><br>";
											echo "<span>Check <a href='".$moversreviewed_link."'>details</a></span>";
										}else if ($moversreviewed_rating == "NO"){

											echo "<span id='register'>".$moversreviewed_details."<span><br><br>";
											echo "<span>No url avaliable</span>";
										}
									?>
							</td>
						</tr>

						<!-- NO LINK FOUND -->
						 <tr id="tr1">
						 <td style="text-align:center">
								<!-- 					$reviewamover_rating = $rows['reviewamover_rating'];
					$reviewamover_details = $rows['reviewamover_details'];
					$reviewamover_link = $rows['reviewamover_link'];
 -->
 							<?php 
									if (strtoupper($reviewamover_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($reviewamover_rating). "</strong>";
									}else if(strtoupper($reviewamover_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($reviewamover_rating). "</strong>";			
									}else if($reviewamover_rating != NULL){
										echo $reviewamover_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}

									$star_rating6 = substr($reviewamover_rating,48,-11);
									if(!empty($star_rating6) && isset($star_rating6))
									{
										$star_rating6 = $star_rating6;
									}
									else
									{
										$star_rating6 = 0;
									}
									
							?>

							</td>
							<td>
								<h5>PRESENT ON REVIEW A MOVER?</h5>
									<?php 
										if($reviewamover_rating == "YES"){
											echo "<span id='register'>".$reviewamover_details."</span><br><br>";
											echo "<span>Check <a href='".$reviewamover_link."'>details</a></span>";
										}else if ($reviewamover_rating == "NO"){

											echo "<span id='register'>".$reviewamover_details."<span><br><br>";
											echo "<span>No url avaliable</span>";
										}
									?>
							</td>
						</tr>
						 <tr id="tr8">
						 	<!-- 					$moverssearchandreviews_rating = $rows['moverssearchandreviews_rating'];
					$moverssearchandreviews_details = $rows['moverssearchandreviews_details'];
					$moverssearchandreviews_link = $rows['moverssearchandreviews_link'];
 -->
 							<td style="text-align:center">						
							<?php 
									if (strtoupper($moverssearchandreviews_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($moverssearchandreviews_rating). "</strong>";
									}else if(strtoupper($moverssearchandreviews_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($moverssearchandreviews_rating). "</strong>";			
									}else if($moverssearchandreviews_rating != NULL){
										echo $moverssearchandreviews_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}
									$star_rating7 = substr($moverssearchandreviews_rating,48,-11);
									if(!empty($star_rating7) && isset($star_rating7))
									{
										$star_rating7 = $star_rating7;
									}
									else
									{
										$star_rating7 = 0;
									}
							?>
							</td>
							<td>
								<h5>PRESENT ON MOVERS SEARCH AND REVIEWS?</h5>
									<?php 
									// star needed
										if($moverssearchandreviews_rating == "YES"){
											echo "<span id='register'>".$moverssearchandreviews_details."</span><br><br>";
											echo "<span>Check <a href='".$moverssearchandreviews_link."'>details</a></span>";
										}else if ($moverssearchandreviews_rating == "NO"){

											echo "<span id='register'>".$moverssearchandreviews_details."<span><br><br>";
											echo "<span>No url avaliable</span>";
										}else if ($moverssearchandreviews_rating == null ) {
											// code...
											echo "Dint found information <br> from mover search and reviews";
										}
									?>
							</td>
						</tr>

						<!-- LINK NO FOUND -->
<!-- 						 <tr id="tr1">

						 	<!-- EPINIONS COLUMN NO FOUND -->
<!-- 							<td>
								<?php 
/*									if ($decision == "Yes"){
										echo "<strong style ='color: blue'>" .$decision. "</strong>";
									}else if($decision == "No"){
										echo "<strong style ='color: red'>" .$decision. "</strong>";			
									}
*/								?>

							</td> -->
<!-- 							<td>
								<h5>PRESENT ON EPINIONS?</h5>
								<span id="register">This company is not listed on Epinions.</span><br><br>
								<span>No url avaliable</span>
							</td>
						</tr> --> 
						 <tr id="tr10">
						 	<!-- 					$angies_rating = $rows['angies_rating'];
					$angies_details = $rows['angies_details'];
					$angies_link = $rows['angies_link'];

 							<td style="text-align:center">
							<?php 
									if (strtoupper($angies_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($angies_rating). "</strong>";
									}else if($angies_rating == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($angies_rating). "</strong>";			
									}else if($angies_rating != NULL){
										echo $angies_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}

									$star_rating8 = substr($angies_rating,48,-11);
									if(!empty($star_rating8) && isset($star_rating8))
									{
										$star_rating8 = $star_rating8;
									}
									else
									{
										$star_rating8 = 0;
									}
							?>
							</td>
							<td>

								<h5>PRESENT ON ANGIE'S LIST?</h5>
									<?php 
										if($angies_rating == "YES"){
											echo "<span id='register'>".$angies_details."</span><br><br>";
											echo "<span>Check <a href='".$angies_link."'>details</a></span>";
										}else if ($angies_rating == "NO"){

											echo "<span id='register'>".$angies_details."<span><br><br>";
											echo "<span>No url avaliable</span>";
										}
									?>
							</td>
						</tr>

						LINK NOT FOUND -->
						 <tr id="tr1">
						 <td style="text-align:center">
								<!-- stars required -->
								<!-- 					$transportreviews_rating = $rows['transportreviews_rating'];
					$transportreviews_details = $rows['transportreviews_details'];
					$transportreviews_link = $rows['transportreviews_link'];
 -->

 								<?php 
									if (strtoupper($transportreviews_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($transportreviews_rating). "</strong>";
									}else if(strtoupper($transportreviews_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($transportreviews_rating). "</strong>";			
									}else if($transportreviews_rating != NULL){
										echo $transportreviews_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}

									$star_rating9 = substr($transportreviews_rating,48,-11);
									if(!empty($star_rating9) && isset($star_rating9))
									{
										$star_rating9 = $star_rating9;
									}
									else
									{
										$star_rating9 = 0;
									}
								?>

							</td>
							<td>
								<h5>PRESENT ON TRANSPORT REVIEWS?</h5>
									<?php 
										if($transportreviews_rating == "YES"){
											echo "<span id='register'>".$transportreviews_details."</span><br><br>";
											echo "<span>Check <a href='".$transportreviews_link."'>details</a></span>";
										}else if ($transportreviews_rating == "NO"){

											echo "<span id='register'>".$transportreviews_details."<span><br><br>";
											echo "<span>".$transportreviews_link."</span>";
										}else if ($transportreviews_rating ==  null ){
											echo "Found no data from transport reviews";
										}
									?>
							</td>
						</tr>

						<!-- LINK NOT FOUND -->
						 <tr id="tr12">
						 <td style="text-align:center">
								<!-- 					$transportreports_rating = $rows['transportreports_rating'];
					$transportreports_details = $rows['transportreports_details'];
					$transportreports_link = $rows['transportreports_link'];
 -->
 								<?php 
									if (strtoupper($transportreports_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($transportreports_rating). "</strong>";
									}else if(strtoupper($transportreports_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($transportreports_rating). "</strong>";			
									}else if($transportreports_rating != NULL){
										echo $transportreports_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}

									$star_rating10 = substr($transportreports_rating,48,-11);
									if(!empty($star_rating10) && isset($star_rating10))
									{
										$star_rating10 = $star_rating10;
									}
									else
									{
										$star_rating10 = 0;
									}
									
								?>
							</td>
							<td>
								<h5>PRESENT ON TRANSPORT REPORTS?</h5>

								<?php 
									if($transportreports_rating == "YES"){
										echo "<p id='register'>".$transportreports_details."</p>";
										echo "<span>Check <a href='".$transportreports_link."'>details</a></span>";
									}else if ($transportreports_rating == "NO"){

										echo "<p id='register'>".$transportreviews_details."</p>";
										echo "<span>".$transportreports_link."</span>";
									}else if ($transportreports_rating ==  null ){
										echo "Found no data from transport reviews";
									}
								?>
							</td>
						</tr>

						<!-- MOVING GUARDIAN  -->
						 <tr id="tr1">
						 <td style="text-align:center">
						
								<!-- 					$movingguardian_rating = $rows['movingguardian_rating'];
					$movingguardian_details = $rows['movingguardian_details'];
					$movingguardian_link = $rows['movingguardian_link'];
 -->
 								<?php 
									if (strtoupper($movingguardian_rating) == "YES"){
										echo "<strong style ='color: green'>" .strtoupper($movingguardian_rating). "</strong>";
									}else if(strtoupper($movingguardian_rating) == "NO"){
										echo "<strong style ='color: red'>" .strtoupper($movingguardian_rating). "</strong>";			
									}else if($movingguardian_rating != NULL){
										echo $movingguardian_rating;
									}else{
										echo "<strong style ='color: red'>No Reviews</strong>"; 
									}

									$star_rating11 = substr($movingguardian_rating,48,-11);
									if(!empty($star_rating11) && isset($star_rating11))
									{
										$star_rating11 = $star_rating11;
									}
									else
									{
										$star_rating11 = 0;
									}
							
								?>
							</td>
							<td>
								<h5>PRESENT ON MOVING GUARDIAN?</h5>
									<?php 
										if($movingguardian_rating == "YES"){
											echo "<p id='register'>".$movingguardian_details."</p>";
											echo "<span>Check <a href='".$movingguardian_link."'>details</a></span>";
										}else if ($movingguardian_rating == "NO"){

											echo "<p id='register'>".$movingguardian_details."</p>";
											echo "<span>".$movingguardian_link."</span>";
										}
									?>
							</td>
						</tr>
<!-- 						 <tr id="tr14">
							<td>
								<?php 
									/*if ($decision == "Yes"){
										echo "<strong style ='color: blue'>" .$decision. "</strong>";
									}else if($decision == "No"){
										echo "<strong style ='color: red'>" .$decision. "</strong>";			
									}
*/								?>

							</td>
							<td>
								<h5>PRESENT ON MOVERS REVIEWED?</h5>
									<?php 
									/*	if($decision == "Yes"){
											echo "<span id='register'>This company is not listed on My Moving Reviews.</span><br><br>";
											echo "<span>Check <a href='http://www.movingscam.com/forum/viewtopic.php?p=57639&57639'>details</a></span>";
										}else if ($decision == "No"){

											echo "<span id='register'> Not Present on Movers Reviewed <span><br><br>";
											echo "<span>No url avaliable</span>";
										}
*/									?>
							</td>
						</tr> -->
					</table>
				</div>
				<br><br><br><br><br><br><br>
				<?php
				// stars average
				$total_star = $star_rating1 + $star_rating2 + $star_rating3 + $star_rating4 + $star_rating5 + $star_rating6 + $star_rating7 + $star_rating8 + $star_rating9 + $star_rating10 + $star_rating11 ;
				$percentage_star = ($total_star/55) * 100;
				$average_star = $percentage_star / 2.5;
				
				//Legal section
				$Legal_section = $pointers_logo + $pointers_registerd + $pointers_licensing ;

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
					var pass_fail_img = document.getElementById('img_pass_fail');
					if(avg > 70)
					{
						percentage.style.color = "green";
						pass_fail_img.src="img/pass.jpeg";
					}
					else{
						percentage.style.color = "red";
						pass_fail_img.src="img/fail.jpeg";
					}
				</script>
	<div class="Content class">
 
</div>
<div class="footer">MoverZfax.com Report</div>
			</div>
		</div>
	</div>
	</div>
<script>
	let htmlPDF = document.getElementById("bdy");
	var opt = {	
			margin : 3,
			filename : "Report Card "+ <?= $usdot;?>+'.pdf',
			jsPDF : {format : 'A3', orientation : 'portrait'}
			};
	window.onload = (e) => html2pdf(htmlPDF,opt);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
</body>
</html>