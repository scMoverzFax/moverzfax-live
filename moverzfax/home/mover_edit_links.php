<?php include_once 'myheader.php'; ?>
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
//isset($_GET['invalid']) && !empty($_GET['invalid']) ? $msg = "USDOT number already registered!" : $msg = "";

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
			<a href=<?php echo $value ?> target="_blank">Test Link</a>
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
//include '../model/city.php';

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

	require_once '../model/connection.php';
    $search = $_SESSION["usdot"];
	$sql = "SELECT  * FROM mover_register WHERE usdot = '" . $search . "';";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		//sets table values to variables
		while ($rows = mysqli_fetch_assoc($result)) {
			$state_link = $rows['state_link'];
			$federal_link = $rows['federal_link'];
			$bbb_link = $rows['bbb_link'];
			$msc_link = $rows['msc_link'];
			$hhgfaa_link = $rows['hhgfaa_link'];
			$ripoffreport_link = $rows['ripoff_link'];
			$movingscam_link = $rows['moving_scam_link'];
            $google_link = $rows['google_link'];
			$mymovingreviews_link = $rows['my_moving_reviews_link'];
			$yelp_link = $rows['yelp_link'];
			$insiderpages_link = $rows['insider_pages_link'];
			$moversreviewed_link = $rows['mover_reviews_link'];
			$angies_link = $rows['angies_link'];
			$trust_pilot_link = $rows['trust_pilot_link'];
		}
	} 
?>

<div class="b-container">
	<div class="container in-container slide-in-bottom">
		<div class="bg-form form-group">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center"><i class="fas fa-truck me-2"></i>Edit my Links and Ratings</h1>
					<!-- <h5 class="text-danger text-center"><?php //$msg ?></h5> -->
					<br>
					<form action="../model/mover_edit_links_model.php?usdot=<?php echo $search; ?>" method="post" enctype="multipart/form-data">
						<table class="table">
							<tbody>
								<?php echo linkInput("State Registered", "/moverzfaxdevelop/MoverzFax/moverzfax/home/state_link_redirect.php", "state_registration_link", $state_link, false, ''); ?>
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
								<?php echo linkInput("Google", "http://www.google.com/", "present_on_google", $google_link, true, "google_stars"); ?>
								<?php echo linkInput("My Moving Reviews", "https://www.mymovingreviews.com/", "present_on_moving_reviews", $movingscam_link, true, "moving_reviews_stars"); ?>
								<?php echo linkInput("Yelp", "http://www.yelp.com/", "present_on_yelp", $yelp_link, true, "yelp_stars"); ?>
								<?php echo linkInput("Insider Pages", "https://www.insiderpages.com/", "present_on_insider_pages", $insiderpages_link, true, "insider_pages_stars"); ?>
								<?php echo linkInput("Mover Reviews", "https://www.moverreviews.com/", "present_on_mover_reviews", $moversreviewed_link, true, "mover_reviews_stars"); ?>
								<?php echo linkInput("Transport Reviews", "https://www.transportreviews.com/", "present_on_transport_reviews", $transportreviews_link, true, "transport_reviews_stars"); ?>
								<?php echo linkInput("Angies List", "http://www.angieslist.com/", "present_on_angies_list", $angies_link, true, "angie_stars"); ?>
								<?php echo linkInput("Trust Pilot", "https://www.trustpilot.com/", "present_on_trust_pilot", $trust_pilot_link, true, "trust_pilot_stars"); ?>
							</tbody>
						</table>
						<div class="row text-center">
							<div class="col-md-12 d-flex justify-content-center">
								<button type="submit" class="btn button-mf me-5" name="" value="Signup">Update</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<hr>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php include 'footer.php'; ?>