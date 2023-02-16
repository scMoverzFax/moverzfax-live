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
$state_links = (object) [
	"AL" => "https://arc-sos.state.al.us/CGI/CORPNAME.MBR/INPUT",
	"AK" => "https://www.commerce.alaska.gov/cbp/main/search/entities",
	"AZ" => "https://ecorp.azcc.gov/EntitySearch/Index",
	"AR" => "https://www.sos.arkansas.gov/corps/search_all.php",
	"CA" => "https://bizfileonline.sos.ca.gov/search/business",
	"CO" => "https://www.sos.state.co.us/biz/BusinessEntityCriteriaExt.do?resetTransTyp=Y",
	"CT" => "https://service.ct.gov/business/s/onlinebusinesssearch",
	"DE" => "https://icis.corp.delaware.gov/Ecorp/EntitySearch/NameSearch.aspx",
	"DC" => "https://corponline.dcra.dc.gov/Home.aspx",
	"FL" => "http://search.sunbiz.org/Inquiry/CorporationSearch/ByName",
	"GA" => "https://ecorp.sos.ga.gov/BusinessSearch",
	"HI" => "https://hbe.ehawaii.gov/documents/search.html",
	"ID" => "https://sosbiz.idaho.gov/search/business",
	"IL" => "https://apps.ilsos.gov/corporatellc/",
	"IN" => "https://bsd.sos.in.gov/publicbusinesssearch",
	"IA" => "https://sos.iowa.gov/search/business/search.aspx",
	"KS" => "https://www.kansas.gov/bess/flow/main?execution=e1s1",
	"KY" => "https://web.sos.ky.gov/ftsearch/",
	"LA" => "https://coraweb.sos.la.gov/CommercialSearch/CommercialSearch.aspx",
	"ME" => "https://icrs.informe.org/nei-sos-icrs/ICRS?MainPage=x",
	"MD" => "https://egov.maryland.gov/BusinessExpress/EntitySearch",
	"MA" => "https://corp.sec.state.ma.us/corpweb/CorpSearch/CorpSearch.aspx",
	"MI" => "https://cofs.lara.state.mi.us/SearchApi/Search/Search",
	"MN" => "https://mblsportal.sos.state.mn.us/Business/Search",
	"MS" => "https://corp.sos.ms.gov/corp/portal/c/page/corpBusinessIdSearch/portal.aspx?#clear=1",
	"MO" => "https://bsd.sos.mo.gov/BusinessEntity/BESearch.aspx?SearchType=0",
	"MT" => "https://biz.sosmt.gov/search/business",
	"NE" => "https://www.nebraska.gov/sos/corp/corpsearch.cgi?nav=search",
	"NV" => "https://esos.nv.gov/EntitySearch/OnlineEntitySearch",
	"NH" => "https://quickstart.sos.nh.gov/online/BusinessInquire",
	"NJ" => "https://www.njportal.com/DOR/BusinessNameSearch/Search/BusinessName",
	"NM" => "https://portal.sos.state.nm.us/BFS/online/CorporationBusinessSearch",
	"NY" => "https://apps.dos.ny.gov/publicInquiry/EntityDisplay",
	"NC" => "https://www.sosnc.gov/search/index/corp",
	"ND" => "https://firststop.sos.nd.gov/search/business",
	"OH" => "https://businesssearch.ohiosos.gov/",
	"OK" => "https://www.sos.ok.gov/corp/corpinquiryfind.aspx",
	"OR" => "http://egov.sos.state.or.us/br/pkg_web_name_srch_inq.login",
	"PA" => "https://file.dos.pa.gov/search/business",
	"PR" => "https://prcorpfiling.f1hst.com/CorporationSearch.aspx",
	"RI" => "http://business.sos.ri.gov/CorpWeb/CorpSearch/CorpSearch.aspx",
	"SC" => "https://businessfilings.sc.gov/BusinessFiling/Entity/Search",
	"SD" => "https://sosenterprise.sd.gov/BusinessServices/Business/FilingSearch.aspx",
	"TN" => "https://tnbear.tn.gov/Ecommerce/FilingSearch.aspx",
	"TX" => "https://mycpa.cpa.state.tx.us/coa/",
	"UT" => "https://secure.utah.gov/bes/",
	"VT" => "https://bizfilings.vermont.gov/online/BusinessInquire/",
	"VA" => "https://cis.scc.virginia.gov/EntitySearch/Index",
	"WA" => "https://ccfs.sos.wa.gov/#/AdvancedSearch",
	"WV" => "https://apps.wv.gov/SOS/BusinessEntitySearch/",
	"WI" => "https://www.wdfi.org/apps/CorpSearch/Search.aspx",
	"WY" => "https://wyobiz.wyo.gov/Business/FilingSearch.aspx"
  ];
//isset($_GET['invalid']) && !empty($_GET['invalid']) ? $msg = "USDOT number already registered!" : $msg = "";

//isset($_REQUEST["usdot-check"]) ? checkDatabase() : null;

function linkInput($siteName, $siteLink, $name, $value, $stars, $starsName, $starValue, $flagged){
	?>
	<tr style="<?php if($flagged==0) { echo "display: none;"; } ?>" >
		<td>
			<label><?php echo $siteName ?></label>
			<a href=<?php echo $siteLink ?> target="_blank">Visit Site</a>
		</td>
		<td>
			<input style="width: 100%; <?php if($flagged==1) { echo "border: solid red 1px;"; } ?>"
				type="text" class="form-control" name=<?php echo $name ?> value="<?php echo (isset($value)) ? $value : '';?>" placeholder="Paste your link here if applicable." />
			<a href=<?php echo $value ?> target="_blank">Test Link</a>
		<?php if($stars) { ?>
			<input style="width: 100%; <?php if($flagged==1) { echo "border: solid red 1px;"; } ?>" 
				type="number" step="any" min=”0″ max="5" class="form-control" name=<?php echo $starsName ?> value="<?php echo (isset($starValue)) ? $starValue : '';?>" placeholder="Enter your star rating (e.g. 5.0)">
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
			$approved = $rows['approved'];
			$state_code = $rows['states'];
			$state_link = $rows['state_link'];
			$state_flag = $rows['state_flag'];
			$federal_link = $rows['federal_link'];
			$federal_flag = $rows['federal_flag'];
			$bbb_link = $rows['bbb_link'];
			$bbb_grade = $rows['bbb_grade'];
			$bbb_flag = $rows['bbb_flag'];
			$msc_link = $rows['msc_link'];
			$msc_flag = $rows['msc_flag'];
			$hhgfaa_link = $rows['hhgfaa_link'];
			$hhgfaa_flag = $rows['hhgfaa_flag'];
			$ripoffreport_link = $rows['ripoff_link'];
			$ripoffreport_flag = $rows['ripoff_flag'];
			$movingscam_link = $rows['moving_scam_link'];
			$movingscam_flag = $rows['moving_scam_flag'];

            $google_link = $rows['google_link'];
			$google_stars = $rows['google_stars'];
			$google_flag = $rows['google_flag'];
			$mymovingreviews_link = $rows['my_moving_reviews_link'];
			$mymovingreviews_stars = $rows['moving_reviews_stars'];
			$mymovingreviews_flag = $rows['my_moving_reviews_flag'];
			$yelp_link = $rows['yelp_link'];
			$yelp_stars = $rows['yelp_stars'];
			$yelp_flag = $rows['yelp_flag'];
			$insiderpages_link = $rows['insider_pages_link'];
			$insiderpages_stars = $rows['insider_pages_stars'];
			$insiderpages_flag = $rows['insider_pages_flag'];
			$moversreviewed_link = $rows['mover_reviews_link'];
			$moversreviewed_stars = $rows['mover_reviews_stars'];
			$moversreviewed_flag = $rows['mover_reviews_flag'];
			$transportreviews_link = $rows['transport_reviews_link'];
			$transportreviews_stars = $rows['transport_reviews_stars'];
			$transportreviews_flag = $rows['transport_reviews_flag'];
			$angies_link = $rows['angies_link'];
			$angies_stars = $rows['angies_stars'];
			$angies_flag = $rows['angies_flag'];
			$trust_pilot_link = $rows['trust_pilot_link'];
			$trust_pilot_stars = $rows['trust_pilot_stars'];
			$trust_pilot_flag = $rows['trust_pilot_flag'];
		}
	}

	$this_state_link = $state_links->$state_code;
	$noflags=false;
	if(
		$state_flag==0 &&
		$federal_flag==0 &&
		$bbb_flag==0 &&
		$msc_flag==0 &&
		$hhgfaa_flag==0 &&
		$ripoffreport_flag==0 &&
		$movingscam_flag==0 &&
		$google_flag==0 &&
		$mymovingreviews_flag==0 &&
		$yelp_flag==0 &&
		$insiderpages_flag==0 &&
		$moversreviewed_flag==0 &&
		$transportreviews_flag==0 &&
		$angies_flag==0 &&
		$trust_pilot_flag==0
	) {
		$noflags=true;
	}
?>

<div class="b-container">
	<div class="container in-container slide-in-bottom">
	<?php if(!defined('LOGIN')){ ?> <h3 class="text-center my-5 py-5 ">Please Login First...</h3>';<?php } ?>
		<div class="bg-form form-group" <?php if(!defined('LOGIN')){ ?>style="display:none"<?php } ?>>
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center"><i class="fas fa-truck me-2"></i>Edit my Links and Ratings</h1>
				<?php if($approved==1) { ?>
					<h5 class="text-center">It looks like your company has been approved! Hang tight, there is nothing for you to do on this page now.</h5>
				<?php } else if($noflags===true){ ?>
					<h5 class="text-center">MoverzFax is currently reveiwing your information. Hang tight, there is nothing for you to do on this page now.</h5>
				<?php } ?>
				<div style="<?php if($approved==1 || $noflags===true) { echo "display: none;"; } ?>">
					<h5 class="text-danger text-center">Please review any areas outlined in red, these sections have been flagged by the MoverzFax admin.</h5>
					<br>
					<form action="../model/mover_edit_links_model.php?usdot=<?php echo $search; ?>" method="post" enctype="multipart/form-data">
						<table class="table">
							<tbody>
								<?php echo linkInput("State Registered", $this_state_link, "state_registration_link", $state_link, false, '', 0, $state_flag); ?>
								<?php echo linkInput("Federally Registered", "https://ai.fmcsa.dot.gov/hhg/search.asp", "federal_registration_link", $federal_link, false, '', 0, $federal_flag); ?>
								<?php //echo linkInput("Public Liscense", "https://safer.fmcsa.dot.gov/", "licensing_and_information", $fmcsa_link, false, ''); ?>
								<tr style="<?php if($bbb_flag==0) { echo "display: none;"; } ?>">
									<td>
										<label>BBB Member</label>
										<a href="https://www.bbb.org/" target="_blank">Visit Site</a>
									</td>
									<td>
										<input style="width: 100%;<?php if($bbb_flag==1) { echo "border: solid red 1px;"; } ?>" type="text" class="form-control" name="member_of_bbb" value="<?php echo (isset($bbb_link)) ? $bbb_link : '';?>" placeholder="Paste your link here if applicable." />
										<a href=<?php echo $bbb_link ?> target="_blank">Test Link</a>
										<input style="width: 100%;<?php if($bbb_flag==1) { echo "border: solid red 1px;"; } ?>" type="text" class="form-control" name="bbb_grade" value="<?php echo (isset($bbb_grade)) ? $bbb_grade : '';?>" placeholder="Enter your BBB grade (e.g. A+, A, A-)">
									</td>
								</tr>
								<?php echo linkInput("ProMover Member", "https://www.moving.org/", "member_of_msc", $msc_link, false, "", 0, $msc_flag); ?>
								<?php echo linkInput("HHGFAA Member", "https://www.iamovers.org/", "member_of_hhgffaa", $hhgfaa_link, false, "", 0, $hhgfaa_flag); ?>

								<?php echo linkInput("Ripoff Report", "https://www.ripoffreport.com/", "present_on_ripff_report", $ripoffreport_link, false, "", 0, $ripoffreport_flag); ?>
								<?php echo linkInput("Moving Scam", "http://www.movingscam.com", "present_on_moving_scam", $movingscam_link, false, "", 0, $movingscam_flag); ?>

								<?php echo linkInput("Google", "http://www.google.com/", "present_on_google", $google_link, true, "google_stars", $google_stars, $google_flag); ?>
								<?php echo linkInput("My Moving Reviews", "https://www.mymovingreviews.com/", "present_on_moving_reviews", $mymovingreviews_link, true, "moving_reviews_stars", $mymovingreviews_stars, $mymovingreviews_flag); ?>
								<?php echo linkInput("Yelp", "http://www.yelp.com/", "present_on_yelp", $yelp_link, true, "yelp_stars", $yelp_stars, $yelp_flag); ?>
								<?php echo linkInput("Insider Pages", "https://www.insiderpages.com/", "present_on_insider_pages", $insiderpages_link, true, "insider_pages_stars", $insiderpages_stars, $insiderpages_flag); ?>
								<?php echo linkInput("Mover Reviews", "https://www.moverreviews.com/", "present_on_mover_reviews", $moversreviewed_link, true, "mover_reviews_stars", $moversreviewed_stars, $moversreviewed_flag); ?>
								<?php echo linkInput("Transport Reviews", "https://www.transportreviews.com/", "present_on_transport_reviews", $transportreviews_link, true, "transport_reviews_stars", $transportreviews_stars, $transportreviews_flag); ?>
								<?php echo linkInput("Angies List", "http://www.angieslist.com/", "present_on_angies_list", $angies_link, true, "angie_stars", $angies_stars, $angies_flag); ?>
								<?php echo linkInput("Trust Pilot", "https://www.trustpilot.com/", "present_on_trust_pilot", $trust_pilot_link, true, "trust_pilot_stars", $trust_pilot_stars, $trust_pilot_flag); ?>
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
			</div>

			<hr>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php include 'footer.php'; ?>