<?php include_once 'myheader.php'; ?>

<title>Mover Registration</title>
<head>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcoH5ckAAAAABJIsdDqWRa4vAwgpT1PPDF-kaxS"></script>
	<script>
        function onSubmit(token) {
            document.getElementById("mv-reg-form").submit();
        }
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcoH5ckAAAAABJIsdDqWRa4vAwgpT1PPDF-kaxS', {action: 'submit'}).then(function(token) {
                document.getElementById("token").value = token;
            });
			document.querySelector('.g-recaptcha').setAttribute('data-style', 'bottomleft');
        });
    </script>
	<script src="https://www.google.com/recaptcha/api.js?badge=bottomleft"></script>
</head>

<style>

	* {
		font-family: sans-serif;
		box-sizing: border-box;
	}

	.b-container {
		overflow: hidden;
		height: fit-content;
		width: fit-content;
		position: relative;
		padding: 50px;
		max-width: 1440px;
	}

	.in-container {
		background-color: white;
		box-shadow: 0 0 10px 2px #eee;
		/* border-radius: 10px 10px; */
		border: 1px solid #eee;
		/* width: fit-content; */
		padding: 50px;
	}

	.bg-form {
		margin: 0;
		width: 100%;
		background-color: white;
	}

	.i-width {
		width: 100%;
	}

	.row .button-mf {
		font-size: 15px;
		color: #fff;
		background-color: #85CA63;
		border-radius: 5px 5px;
		width: 150px;
		border-color: none;
		transition: all .5s;
	}

	.row .button-mf:hover {
		background-color: #67bd3c;
		border-color: #55bd1a;
		color: #fff;
		border-radius: 10px;
		width: 200px;
		transition: all .5s;
	}

	.row .button-mf-cancel {
		font-size: 15px;
		color: #fff;
		border-radius: 5px 5px;
		width: 150px;
		background-color: #dc3545;
		border-color: #dc3545;
		transition: all .5s;
	}

	.row .button-mf-cancel:hover {
		color: #fff;
		border-radius: 10px;
		width: 200px;
		transition: all .5s;
		background-color: #c82333;
		border-color: #bd2130;
	}

	/* Desktop-mobile approach --------------------------------------------------------------*/

	/* smaller than Desktop HD */
	@media (max-width: 1200px) {}

	/* smaller than desktop */
	@media (max-width: 1000px) {}

	/* smaller than tablet */
	@media (max-width: 750px) {}

	/* smaller than phablet (also point when grid becomes active) */
	@media (max-width: 550px) {}

	/* smaller than mobile */
	@media (max-width: 400px) {}
</style>
<?php 
isset($_GET['invalid']) && !empty($_GET['invalid']) ? $msg = "USDOT number already registered!" : $msg = "";
isset($_GET['captcha']) && !empty($_GET['captcha']) ? $cmsg = "Invalid reCAPTCHA response! Please refresh the page and try again." : $cmsg = "";

//isset($_REQUEST["usdot-check"]) ? checkDatabase() : null;

function linkInput($siteName, $siteLink, $name, $value, $stars, $starsName){
	?>
	<tr>
		<td>
			<label><?php echo $siteName ?></label>
			<a href=<?php echo $siteLink ?> target="_blank">Visit Site</a>
		</td>
		<td>
			
			<input style="width: 100%;" type="text" class="form-control" name=<?php echo $name ?> value="<?php echo (isset($value)) ? $value : '';?>" placeholder="Paste your link here if applicable." />
			<a href="<?php echo $value ?>" target="_blank">Test Link</a>
		<?php if($stars) { ?>
			<input type="number" step="any" min=”0″ max="5" class="form-control" name=<?php echo $starsName ?>  placeholder="Enter your star rating (e.g. 5.0)">
		<?php } ?>
		</td>
	</tr>
	<?php
}

//session_start();
//$this_state_link = "https://www.llcuniversity.com/50-secretary-of-state-sos-business-entity-search/";
$this_state_link = (isset($_SESSION["state_link"])) ? $_SESSION["state_link"] : "https://arc-sos.state.al.us/CGI/CORPNAME.MBR/INPUT";
//global $this_state_link;$_SESSION["state_link"]
// //include '../model/city.php';
// echo "<script>console.log('Link: " . $this_state_link . "' );</script>";
  

// include 'state_link_function.php';
// echo stateLinkFor("AL");

$checkMsg = '';
$checkSuccessMsg = '';

$state_link = '';
$federal_link = '';
$bbb_link = '';
$msc_link = '';
$hhgfaa_link = '';
$ripoffreport_link = '';
$movingscam_link = '';
$mymovingreviews_link = '';
$yelp_link = '';
$insiderpages_link = '';
$moversreviewed_link = '';
$angies_link = '';
$transportreviews_link = '';

function insertIntoTracking($usdot, $dataFound) {
	require_once '../model/connection.php';

    $currentDateTime = date('Y-m-d H:i:s');
    $dataFoundInt = $dataFound ? 1 : 0;

    $sqltracking = "INSERT INTO mv_registration_tracking(usdot, search_time, data_found) 
	VALUES ('" . $usdot . "', '" . $currentDateTime . "', '" . $dataFoundInt . "');";

    // mysqli_query($con, $sqltracking);
	if (mysqli_query($con, $sqltracking)) {
		echo "worked";
	} else {
		echo "Failed";
	}
    $con->close();
}

//function checkDatabase(){
if(isset($_REQUEST["usdot-check"])){
	require_once '../model/connection.php';
    $search = $_REQUEST["usdot-check"];
	$sql = "SELECT  * FROM mover WHERE usdot = '" . $search . "';";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		$dataFound = True;

		$currentDateTime = date('Y-m-d H:i:s');
		$dataFoundInt = $dataFound ? 1 : 0;
	
		$sqltracking = "INSERT INTO mv_registration_tracking(usdot, search_time, data_found) 
		VALUES ('" . $search . "', '" . $currentDateTime . "', '" . $dataFoundInt . "');";
	
		// mysqli_query($con, $sqltracking);
		if (mysqli_query($con, $sqltracking)) {
			echo "worked";
		} else {
			echo "Failed";
		}
		$con->close();

		//sets table values to variables
		while ($rows = mysqli_fetch_assoc($result)) {
			$checkSuccessMsg = "We found your company in our records! This form has been auto-populated with the information we have, but please review, and make updates as needed.";
			$checkMsg = '';
			$usdot = $rows['usdot'];
			$company_name = $rows['name'];
			$alt_company_name = $rows['alias'];
			$website = $rows['url'];
			$phone = $rows['phone'];
			$fax = $rows['fax'];
			$contact_person = $rows['contact_person'];
			$mc = $rows['mc'];

			$country_id = $rows['country_id'];
			$_SESSION['country_id'] = $rows['country_id'];
			$state_id = $rows['state_id'];
			$_SESSION['state_id'] = $rows['state_id'];
			$city_id = $rows['city_id'];
			$_SESSION['city_id'] = $rows['city_id'];

			$zip = $rows['zipcode'];
			$email = $rows['email'];
			$logo = $rows['logo'];

			//set all of the links that we will still use
			//this list will change pending Dan's list of current sites to use.
			$state_link = $rows['state_registration_link'];
			$federal_link = "https://safer.fmcsa.dot.gov/query.asp?searchtype=ANY&query_type=queryCarrierSnapshot&query_param=USDOT&query_string=" . $usdot ;
			//$fmcsa_link = $rows['fmcsa_link'];
			$bbb_link = $rows['bbb_link'];
			$msc_link = $rows['amsa_link'];
			$hhgfaa_link = $rows['hhgfaa_link'];
			$ripoffreport_link = $rows['ripoffreport_link'];
			$movingscam_link = $rows['movingscam_link'];
			$mymovingreviews_link = $rows['mymovingreviews_link'];
			$yelp_link = $rows['yelp_link'];
			$insiderpages_link = $rows['insiderpages_link'];
			//$kudzu_rate = $rows['kudzu_rate'];
			$moversreviewed_link = $rows['moversreviewed_link'];
			//$reviewamover_link = $rows['reviewamover_link'];
			//$moverssearchandreviews_link = $rows['moverssearchandreviews_link'];
			$angies_link = $rows['angies_link'];
			$transportreviews_link = $rows['transportreviews_link'];
			//$transportreports_link = $rows['transportreports_link'];
			//$movingguardian_link = $rows['movingguardian_link'];
		}
	} else {
		$checkMsg = "Your USDOT was not found in our database. Please fill out the form manually so we can add you to our records!";
		$checkSuccessMsg = '';
		$dataFound = False;

		$currentDateTime = date('Y-m-d H:i:s');
		$dataFoundInt = $dataFound ? 1 : 0;
	
		$sqltracking = "INSERT INTO mv_registration_tracking(usdot, search_time, data_found) 
		VALUES ('" . $search . "', '" . $currentDateTime . "', '" . $dataFoundInt . "');";
	
		mysqli_query($con, $sqltracking);
		// if (mysqli_query($con, $sqltracking)) {
		// 	echo "worked";
		// } else {
		// 	echo "Failed";
		// }
		$con->close();

	}

	// insertIntoTracking($search, $dataFound);
}
//}
?>

<script type="text/javascript">
	function refreshCaptcha() {
		console.log("refreshed captcha");
		img = document.getElementById("capt");
		img.src = "captcha.php?rand_number=" + Math.random();
	}
</script>

<div class="b-container">
	<div class="container in-container slide-in-bottom">
		<div class="bg-form form-group">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center"><i class="fas fa-truck me-2"></i>Mover Registration</h1>
					<h5 class="text-center">
						Use the search box to check for your USDOT in our database. If we have your information, 
						the majority of the form will be pre-filled for your convenience. Kindly review and update any necessary details to finalize the process.
					</h5>
					<h5 class="text-danger text-center"><?= $msg ?><?= $cmsg ?></h5>

					<form method="get" action="mover_register_and_links.php">
						<input type="text" class="form-control" name="usdot-check" value="" placeholder="Check My #USDOT" required><br>
						<button type="submit" class="btn button-mf me-5">Check Database</button><h5 class="text-danger text-center"><?= $checkMsg ?></h5><h5 class="text-success text-center"><?= $checkSuccessMsg ?></h5>
					</form>
					<br>
					<form action="../model/mover_model.php" method="post" id="mv-reg-form" enctype="multipart/form-data"> 
						<table class="table">
							<tbody>
								<tr>
									<td><label>USDOT#<sup style="color: red">*</sup></label></td>
									<td><input type="text" class="form-control" name="usdot" id="usdot" value="<?php echo (isset($usdot)) ? $usdot : '';?>" placeholder="Enter USDOT#" required></td>
								</tr>
								<tr>
									<td><label>Company Name<sup style="color: red">*</sup></label></td>
									<td><input type="text" class="form-control" name="name" id="company_name" value="<?php echo (isset($company_name)) ? $company_name : '';?>" placeholder="Enter Company Name" required></td>
								</tr>
								<tr>
									<td><label>Alternative Business Name</label></td>
									<td><input type="text" class="form-control" name="alternate_business" value="<?php echo (isset($alt_company_name)) ? $alt_company_name : '';?>" placeholder="Enter Alternative Business Name"></td>
								</tr>
								<tr>
									<td><label>Company's Website</label></td>
									<td><input type="text" class="form-control" name="website" value="<?php echo (isset($website)) ? $website : '';?>" placeholder="example.com"></td>
								</tr>
								<tr>
									<td><label>Company's Contact Number<sup style="color: red">*</sup></label></td>
									<td><input type="text" class="form-control" name="contact_number" value="<?php echo (isset($phone)) ? $phone : '';?>" placeholder="000-000-0000" required></td>
								</tr>
								<tr>
									<td><label>Company's Fax Number</label></td>
									<td><input type="text" class="form-control" name="fax" value="<?php echo (isset($fax)) ? $fax : '';?>" placeholder="Fax Number"></td>
								</tr>
								<tr>
									<td><label>Contact Person</label></td>
									<td><input type="text" class="form-control" name="contact_person" value="<?php echo (isset($contact_person)) ? $contact_person : '';?>" placeholder="Enter Full Name"></td>
								</tr>
								<tr>
									<td><label>MC#</label></td>
									<td><input type="text" class="form-control" name="mc" value="<?php echo (isset($mc)) ? $mc : '';?>" placeholder="Enter MC#"></td>
								</tr>
								<tr>
									<td><label>Country<sup style="color: red">*</sup></label></td>
									<td>
										<select class="form-select" id="country_1" name="country" onchange="get_state_1()" readonly required>
											<!-- Country -->
										</select>
									</td>
								</tr>
								<tr>
									<td><label>State<sup style="color: red">*</sup></label></td>
									<td>
										<select class="form-select" id="state_1" name="state" onchange="get_city_1()" required>
											<!-- State -->
										</select>
									</td>
								</tr>
								<tr>
									<td><label>City<sup style="color: red">*</sup></label></td>
									<td>
										<select class="form-select" id="city_1" name="city" required>
											<!-- City -->
										</select>
									</td>
								</tr>
								<tr>
									<td><label>Zip Code<sup style="color: red">*</sup></label></td>
									<td><input type="text" class="form-control" name="zip_code" value="<?php echo (isset($zip)) ? $zip : '';?>" placeholder="Enter Zip Code" required></td>
								</tr>
								<tr>
									<td>Business Coverage</td>
									<td><input type="checkbox" name="business_mover[]" value="local_mover" checked> Local Mover<br>
										<input type="checkbox" name="business_mover[]" value="long_mover"> Long Distance Mover<br>
										<input type="checkbox" name="business_mover[]" value="cross_mover"> Cross-Border to Cannada
									</td>
								</tr>
								<tr>
									<td><label>E-mail Address<sup style="color: red">*</sup></label></td>
									<td><input type="email" class="form-control" name="mover_email" value="<?php echo (isset($email)) ? $email : '';?>" placeholder="xxxxxx@example.com" required></td>
								</tr>
								<tr>
									<td><label>Password<sup style="color: red">*</sup></label></td>
									<td><input type="password" class="form-control" name="passwords" id="passwords" placeholder="Please Enter Your Password" required></td>
								</tr>
								<tr>
									<td colspan="2"><span id="message" style="color:red; font-size:15px;"></span></td>
								</tr>
								<tr>
									<td><label>Confirm Password<sup style="color: red">*</sup></label></td>
									<td><input type="password" class="form-control" oninput="myfun1()" id="confirm_passwords" name="confirm_password" placeholder="Confirm Your Password" required></td>
								</tr>
								<tr>
									<td><label>Company Logo</label></td>
									<td><input type="file" class="form-control" name="company_logo" value="<?php echo (isset($logo)) ? $logo : '';?>"></td>
								</tr>
							</tbody>
						</table>
								<h1 class="text-center"><i class="fas fa-link me-2"></i>Mover Links</h1>
								<h5 class="text-center">Please paste the link to your business on each site. Leave the feild blank if not applicable.</h5>
						<table class="table">
							<tbody>
								<?php echo linkInput("State Registered", "/home/state_link_redirect.php", "state_registration_link", $state_link, false, ''); ?>
								<?php echo linkInput("Federally Registered", "https://ai.fmcsa.dot.gov/hhg/search.asp", "federal_registration_link", $federal_link, false, ''); ?>
								<!-- <?php echo linkInput("Public Liscense", "https://safer.fmcsa.dot.gov/", "licensing_and_information", $fmcsa_link, false, ''); ?> -->
								
								<!-- <?php echo linkInput("BBB Member", "https://www.bbb.org/", "member_of_bbb", $bbb_link, true, "bbb_grade"); ?> -->
								<tr>
									<td>
										<label>BBB Member</label>
										<a href="https://www.bbb.org/" target="_blank">Visit Site</a>
									</td>
									<td>
										<input style="width: 100%;" type="text" class="form-control" name="member_of_bbb" value="<?php echo (isset($bbb_link)) ? $bbb_link : '';?>" placeholder="Paste your link here if applicable." />
										<a href=<?php echo $bbb_link ?> target="_blank">Test Link</a>
										<input type="text" class="form-control" name="bbb_grade" placeholder="Enter your BBB grade (e.g. A+, A, A-)">
									</td>
								</tr>
								<?php echo linkInput("ProMover Member", "https://www.moving.org/", "member_of_msc", $msc_link, false, ""); ?>
								<?php echo linkInput("HHGFAA Member", "https://www.iamovers.org/", "member_of_hhgffaa", $hhgfaa_link, false, ""); ?>

								<?php echo linkInput("Ripoff Report", "https://www.ripoffreport.com/", "present_on_ripff_report", $ripoffreport_link, false, ""); ?>
								<?php echo linkInput("Moving Scam", "http://www.movingscam.com", "present_on_moving_scam", $movingscam_link, false, ""); ?>

								<?php echo linkInput("Google", "http://www.google.com/", "present_on_google", '', true, "google_stars"); ?>
								<?php echo linkInput("My Moving Reviews", "https://www.mymovingreviews.com/", "present_on_moving_reviews", $mymovingreviews_link, true, "moving_reviews_stars"); ?>
								<?php echo linkInput("Yelp", "http://www.yelp.com/", "present_on_yelp", $yelp_link, true, "yelp_stars"); ?>
								<?php echo linkInput("Insider Pages", "https://www.insiderpages.com/", "present_on_insider_pages", $insiderpages_link, true, "insider_pages_stars"); ?>
								<?php echo linkInput("Mover Reviews", "https://www.moverreviews.com/", "present_on_mover_reviews", $moversreviewed_link, true, "mover_reviews_stars"); ?>
								<?php echo linkInput("Transport Reviews", "https://www.transportreviews.com/", "present_on_transport_reviews", $transportreviews_link, true, "transport_reviews_stars"); ?>
								<?php echo linkInput("Angies List", "http://www.angieslist.com/", "present_on_angies_list", $angies_link, true, "angie_stars"); ?>
								<?php echo linkInput("Trust Pilot", "https://www.trustpilot.com/", "present_on_trust_pilot", '', true, "trust_pilot_stars"); ?>
							</tbody>
						</table>
						<table class="table text-center">
							<tbody>
								<tr>
									<td></td>
									<td><input type="checkbox" name="" required> I agree to the <a href="terms_of_use.pdf" target="_blank">terms of use</a></td>
								</tr>
							</tbody>
						</table>
						<div class="row text-center">
							<input id="token" name="token" style="display: none;">
							<div class="col-md-12 d-flex justify-content-center">
								<button type="submit" class="btn button-mf me-5" name="" value="Signup">Register</button>
								<button type="reset" class="btn button-mf-cancel" onclick="reset_csc(); resetToTop();">Reset</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<hr>
			<div class="row text-center">
				<div class="col-sm-12"><img style="width:100%" src="../img/CAPTURE2.png"></div>
			</div>
		</div>
	</div>
</div>
<script src="../js/csc_sort_1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	function resetToTop() {
		// Get the current URL
		let url = window.location.href;
		// Remove the parameters from the URL
		let newUrl = url.split('?')[0];
		// Modify the current URL without reloading the page
		window.history.pushState({}, document.title, newUrl);
		// Reload the page
		location.reload();
		// Scroll to the top of the page
		// window.scrollTo(0, 0);
		// Scroll to the top of the form
		// window.scrollTo({
		// 	top: document.getElementById('mv-reg-form').offsetTop,
		// 	behavior: 'smooth'
		// });
	}
	function myfun1() {
		var a = document.getElementById("passwords").value;
		var b = document.getElementById("confirm_passwords").value;
		if (a.length < 5) {
			document.getElementById("message").innerHTML = "**Password Length Must Be greater than 5 digit**";
		} else if (a != b) {
			document.getElementById("message").innerHTML = "**Password And Confirm password are Not Matching**";
			return false;
		} else {
			document.getElementById("message").innerHTML = "";
		}
	}
	// function refreshCaptcha() {
	// 	console.log("refreshed captcha");
	// 	img = document.getElementById("capt");
	// 	img.src = "captcha.php?rand_number=" + Math.random();
	// }

	var select = document.getElementById('state_1');
	var option;

	for (var i = 0; i < select.options.length; i++) {
		option = select.options[i];
		console.log('checking')
		if (option.value == 'TN') {
		// or
		// if (option.text == 'Malaysia') {
			option.setAttribute('selected', true);

			// For a single select, the job's done
			//return; 
		} 
	}
</script>

<?php include 'footer.php'; ?>