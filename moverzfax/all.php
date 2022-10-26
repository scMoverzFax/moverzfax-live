<?php

//error_reporting(0);
//ini_set('display_errors', 'On');

$time_start = microtime(true);

$todays_date = date("j");

//mysql_connect("localhost", "moverz_mfaxuser", "mfaxpwd$$$") or die(mysql_error());
//mysql_select_db("moverz_moverzfax_db") or die(mysql_error());
//mysql_connect("localhost", "moverz_moverz", "y2{dsI7k.uRr") or die(mysql_error());
//mysql_select_db("moverz_moverz") or die(mysql_error());
//mysql_select_db("moverz_moverzfaxNEW") or die(mysql_error());
//mysql_select_db("moverz_moverzfax248") or die(mysql_error());

mysql_connect("localhost", "mover2010live","eBnf+IACNU.(") or die(mysql_error());
mysql_select_db("moverzfaxlive") or die(mysql_error());


include_once("../includes/database.php");
include_once("../includes/security.php");
include_once("../includes/utility.php");
//include_once("../includes/mailer.php");

//include '../classes/library.php'; // include the library file
//include "../classes/class.phpmailer.php"; 

//$site_url='http://pickhr.com/MoverzFax';
$site_url='https://www.moverzfax.com/';
//Instantiate Classes:
$db = new Database();
$secure = new Security();
$util = new Utility();


$random_digit=rand(1,5000);
//$random_digit=3129;
//$random_digit=1744; //Proace
//$random_digit=3954;
//$random_digit=2485;
//$random_digit=4546; //Not accredited
//$random_digit=1106; //Accredited
//$random_digit=1120; //No rating
//$random_digit=214; //No
//$random_digit=4538; //Undefined offset Click for BBB Rating (make if-then statement for this)
//$random_digit=1811;
//$random_digit=1084; //redirected url
//$random_digit=3798;
//$random_digit=367;
//$random_digit=3784; //Yelp incorrect rating
//$random_digit=50;
//$random_digit=4665; // no company name error on line 1401
$random_digit=1;

//get the posted values fron ajax
$moveridval= $_POST['moverid'];

for($i=0;$i<count($moveridval);$i++)
{

$moverid=$moveridval[$i];
$generated_date=$_POST['generated_date'];
//$generated_key=$_POST['generated_key'];
$emailstatus=$_POST['emailstatus'];
$loginemail=$_POST['loginemail'];
$loginname=$_POST['loginname'];
$order_id=$_POST['orderid'];
//$moverid=1744;
 $dt=$generated_date;
 

 
    $generated_key = substr(md5($order_id."-".$moverid."-".$dt), 10, 10); 
// Get a specific result from the table

$result = mysql_query("SELECT * FROM mover WHERE id=$moverid");// or die(mysql_error());

// get the first (and hopefully only) entry from the result
$row = mysql_fetch_array( $result );
// Print out the contents of each row into a table 
$movingcompany = $row['name'];
$movingcompany1 = $row['name'];

$lowermovingcompany=strtolower($movingcompany);
$lowermovingcompany1=str_replace(" ","-",$lowermovingcompany);
$moveridnew=$row['id'];
$emailval=$row['email'];
$city = $row['address_physical_city'];
$state = $row['state_name'];
$statecode = $row['address_physical_state'];
$usdot = $row['usdot'];
$phone = $row['phone'];
$stateid=$row['state_id'];
$countryid=$row['country_id'];
$getval="select * from state where id=$stateid";
$getvale=mysql_query($getval);
$getvalf=mysql_fetch_array($getvale);
$state_code=$getvalf['code'];
$getva11="select * from country where id=$countryid";
$getvale1=mysql_query($getval1);
$getvalf1=mysql_fetch_array($getvale1);
$country_code=$getvalf1['code'];
$statenamenew=$getvalf['name'];
$statenamenew6=ucwords($statenamenew);
$cityid=$row['city_id'];
$getval1="select * from city where id=$cityid";
$getvale1=mysql_query($getval1);
$getvalf1=mysql_fetch_array($getvale1);
$cityname=$getvalf1['name'];
$org1=explode(" ",$movingcompany);
$org2=$org1[0];
$generation_cycle = ($row['generation_cycle']) + 1;

$rating_safer=$row['safer_rate'];
$staterate=$row['state_registration_rate'];
$fmcarate=$row['fmcsa_rate'];
$ratevalbbb=$row['bbb_rate'];
$ratevalamsa=$row['amsa_rate'];
$ratevalhhgfaa=$row['hhgfaa_rate'];
 $moverzfaxrate=0;
 $mymovingreviewsrate=$row['mymovingreviews_rate'];
 $yelprateval=$row['yelp_rate'];
 $rateinsiderval=$row['insiderpages_rate'];
 $ratekudzuval=$row['kudzu_rate'];
$moverreviewsrate=$row['moverreviews_rate'];
 $ratevalreview=$row['reviewamover_rate'];
 $rateangiesval=$row['angies_rate'];
 $ratetransport=$row['transportreviews_rate'];
 $rating_transportreports=$row['transportreports_rate'];
 $ratemovingguardian=$row['movingguardian_rate'];
 $ratevalmoverreviewed=$row['moversreviewed_rate'];
 $ratetopmover=$row['topmoversreviews_rate'];
 $rating_ripoffreport=$row['ripoffreport_rate'];
$rating_movingscam=$row['movingscam_rate'];
$ratemoverrate=$row['ratedmover_rate'];
$topmoverreviewsrate=$row['moverranking_rate'];
$movingcompanyrate=$row['movingcompany_rate'];
if($rating_safer==10)
{
$legaltotal=30;
}
else
{
$legaltotal=0;
}
//$legaltotal=$rating_safer+$staterate+$fmcarate;
$movass=$ratevalbbb+$ratevalamsa+$ratevalhhgfaa;
$rectotal=$moverzfaxrate+$movingcompanyrate+$mymovingreviewsrate+$yelprateval+$rateinsiderval+$ratekudzuval+$moverreviewsrate+$ratevalreview+$rateangiesval+$ratemoverrate+$ratetransport+$ratemovingguardian+$ratevalmoverreviewed+$topmoverreviewsrate;

$rectotal1=$rectotal/14;

$scamval=$rating_ripoffreport-$rating_movingscam;

 $algorithmnew=$legaltotal+$movass+$rectotal1-$scamval;
/*echo $legaltotal;
echo '<br>';
echo $movass;
echo '<br>';
echo $rectotal1;
echo '<br>';
echo $algorithmnew;
echo '<br>';
echo "---------------------";
echo $moverzfaxrate;
echo '<br>';
echo $movingcompanyrate;
echo '<br>';
echo $mymovingreviewsrate;
echo '<br>';
echo $yelprateval;
echo '<br>';
echo $rateinsiderval;
echo '<br>';
echo $ratekudzuval;
echo '<br>';
echo $moverreviewsrate;
echo '<br>';
echo $ratevalreview;
echo '<Br>';
echo $rateangiesval;
echo '<br>';
echo $ratemoverrate;
echo '<br>';
echo $ratetransport;
echo '<br>';
echo $ratemovingguardian;
echo '<br>';
echo $ratevalmoverreviewed;
echo '<br>';
echo $topmoverreviewsrate;
echo '<br>';
echo '----------';
exit;

/*echo $legaltotal;
echo '<br>';
echo $movass;
echo '<br>';
echo $rectotal1;
echo '<br>';
echo $scamval;
exit;*/
/*echo "PRESENT ON MOVERZFAX?:".$moverzfaxrate;
echo "PRESENT ON MY MOVING REVIEWS?".$ratemove;

echo "PRESENT ON YELP?".$yelprateval;
echo "PRESENT ON INSIDER PAGES?".$rateinsiderval;
echo "PRESENT ON KUDZU?:".$ratekudzuval;
echo "PRESENT ON MOVER REVIEWS?".$ratemovval;

echo "PRESENT ON REVIEW A MOVER?".$ratevalreview;
echo "PRESENT ON MOVERS SEARCH AND REVIEWS?".$ratevalmsr;

echo "PRESENT ON EPINIONS?".$ratevalepinion;
echo "PRESENT ON ANGIE'S LIST?".$angiesrate;
echo "PRESENT ON TRANSPORT REVIEWS?".$ratetransport;
echo "PRESENT ON TRANSPORT REVIEWS?".$rating_transportreports;
echo "PRESENT ON MOVING GUARDIAN?".$ratemovingguardian;
echo "PRESENT ON MOVERS REVIEWED?".$ratevalmoverreviewed;
exit;*/
// build query contact database


  $querystats ="UPDATE mover SET  grade_fluctuated='$algorithmnew',generation_date='$generation_date', generation_day='$todays_date', generation_cycle='$generation_cycle' WHERE usdot = '$usdot'";

//$querystats ="UPDATE mover SET last_parse_rating={$algorithm}, state_registration_listed='check', state_registration_details='Check to see if this company is state registered', state_registration_link='$statereglink', safer_listed=$ratetitle_safer, safer_details=$message_safer, safer_link=$url_safer, fmcsa_listed=$ratetitle_fmcsa, fmcsa_details=$message_fmcsa, fmcsa_link=$url_fmcsa, movingscam_listed=$ratetitle_movingscam, movingscam_details=$message_movingscam, movingscam_link=$link_movingscam, ripoffreport_listed=$ratetitle_ripoffreport, ripoffreport_details=$message_ripoffreport, ripoffreport_link=$url_ripoffreport, bbb_listed=$ratetitle_bbb, bbb_details=$message_bbb, bbb_link=$url_bbb, amsa_listed=$ratetitle_amsa, amsa_details=$message_amsa, amsa_link=$url_amsa, hhgfaa_listed=$ratetitle_hhgfaa, hhgfaa_details=$message_hhgfaa, hhgfaa_link=$url_hhgfaa, mymovingreviews_rating=$ratetitle_mymovingreviews, mymovingreviews_details=$message_mymovingreviews, mymovingreviews_link=$url_mymovingreviews, yelp_rating=$ratetitle_yelp, yelp_details=$message_yelp, yelp_link=$url_yelp, insiderpages_rating=$ratetitle_insiderpages, insiderpages_details=$message_insiderpages, insiderpages_link=$url_insiderpages, kudzu_rating=$ratetitle_kudzu, kudzu_details=$message_kudzu, kudzu_link=$url_kudzu, moverreviews_rating=$ratetitle_moverreviews, moverreviews_details=$message_moverreviews, moverreviews_link=$url_moverreviews, reviewamover_rating=$ratetitle_reviewamover, reviewamover_details=$message_reviewamover, reviewamover_link=$url_reviewamover, moverssearchandreviews_rating=$ratetitle_msr, moverssearchandreviews_details=$message_msr, moverssearchandreviews_link=$url_msr, epinions_rating=$ratetitle_epinions, epinions_details=$message_epinions, epinions_link=$url_epinions, transportreviews_rating=$ratetitle_transportreviews, transportreviews_details=$message_transportreviews, transportreviews_link=$url_transportreviews, transportreports_rating=$ratetitle_transportreports, transportreports_details=$message_transportreports, transportreports_link=$url_transportreports, movingguardian_rating=$ratetitle_movingguardian, movingguardian_details=$message_movingguardian, movingguardian_link=$url_movingguardian, moversreviewed_rating=$ratetitle_moversreviewed, moversreviewed_details=$message_moversreviewed, moversreviewed_link=$url_moversreviewed, grade_true=$algorithm_calculated, grade_fluctuated=$algorithm, grade_total=$grade_total, grade_average=$grade_average, generation_date=$todays_date, generation_day='DATETIME: Auto CURDATE()', generation_cycle=$generation_cycle WHERE usdot = $usdot";

//$querystats ="INSERT INTO mover (last_parse_rating, state_registration_listed, state_registration_details, state_registration_link, safer_listed, safer_details, safer_link, fmcsa_listed, fmcsa_details, fmcsa_link, movingscam_listed, movingscam_details, movingscam_link, ripoffreport_listed, ripoffreport_details, ripoffreport_link, bbb_listed, bbb_details, bbb_link, amsa_listed, amsa_details, amsa_link, hhgfaa_listed, hhgfaa_details, hhgfaa_link, mymovingreviews_rating, mymovingreviews_details, mymovingreviews_link, yelp_rating, yelp_details, yelp_link, insiderpages_rating, insiderpages_details, insiderpages_link, kudzu_rating, kudzu_details, kudzu_link, moverreviews_rating, moverreviews_details, moverreviews_link, reviewamover_rating, reviewamover_details, reviewamover_link, moverssearchandreviews_rating, moverssearchandreviews_details, moverssearchandreviews_link, epinions_rating, epinions_details, epinions_link, transportreviews_rating, transportreviews_details, transportreviews_link, transportreports_rating, transportreports_details, transportreports_link, movingguardian_rating, movingguardian_details, movingguardian_link, moversreviewed_rating, moversreviewed_details, moversreviewed_link, grade_true, grade_fluctuated, grade_total, grade_average, generation_date, generation_day, generation_cycle)VALUES ('$algorithm','check','Check to see if this company is state registered','$statereglink','$ratetitle_safer','$message_safer','$url_safer','$ratetitle_fmcsa','$message_fmcsa','$url_fmcsa','$ratetitle_movingscam','$message_movingscam','$link_movingscam','$ratetitle_ripoffreport','$message_ripoffreport','$url_ripoffreport','$ratetitle_bbb','$message_bbb','$url_bbb','$ratetitle_amsa','$message_amsa','$url_amsa','$ratetitle_hhgfaa','$message_hhgfaa','$url_hhgfaa','$ratetitle_mymovingreviews','$message_mymovingreviews','$url_mymovingreviews','$ratetitle_yelp','$message_yelp','$url_yelp','$ratetitle_insiderpages','$message_insiderpages','$url_insiderpages','$ratetitle_kudzu','$message_kudzu','$url_kudzu','$ratetitle_moverreviews','$message_moverreviews','$url_moverreviews','$ratetitle_reviewamover','$message_reviewamover','$url_reviewamover','$ratetitle_msr','$message_msr','$url_msr','$ratetitle_epinions','$message_epinions','$url_epinions','$ratetitle_transportreviews','$message_transportreviews','$url_transportreviews','$ratetitle_transportreports','$message_transportreports','$url_transportreports','$ratetitle_movingguardian','$message_movingguardian','$url_movingguardian','$ratetitle_moversreviewed','$message_moversreviewed','$url_moversreviewed','$algorithm_calculated','$algorithm','$grade_total','$grade_average','','$todays_date','$generation_cycle') WHERE usdot='$usdot'";

mysql_query($querystats) or die('Error updating database: ' . mysql_error());

$rows=mysql_affected_rows();
echo $rows;
//email fucntionality added

//email fucntionality added
if($emailstatus==1)
{

/*$mail	= new PHPMailer; // call the class 
$mail->IsSMTP(); 
$mail->Host = SMTP_HOST; //Hostname of the mail server
$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
$mail->SMTPAuth = true; //Whether to use SMTP authentication
$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
$mail->Password = SMTP_PWORD;
$mail->AddReplyTo("reply@yourdomain.com", "Reply name"); //reply-to addressMoverZfax <no-reply@moverzfax.com>
$mail->SetFrom("no-reply@moverzfax.com", "Moverzfax"); //From address of the mail
// put your while loop here like below,
$mail->Subject = $movingcompany."Report Card from MoverZfax.com"; //Subject od your mail
$recipients = array(
   
   $loginemail => $loginname,
   
);*/
//foreach($recipients as $email => $name){
	// it will display the emails of all users in their Mailbox 'To' area. Simple multiple mail.
	//$mail->AddAddress($email, $name); //To address who will receive this email
	$html='<table cellpadding="1" cellspacing="6" style="border:1px solid #ccc;">
	<tr style="background-color:#A91900"><td ><img src="http://www.moverzfax.com/images/logo.png"></td></tr>
	<tr><td>Hi '. $movingcompany.',</td></tr>';


$html.='<tr><td>Please note that this report card will expire in 14 days from the day it was generated.</td></tr>';

$html.='<tr><td>Download your report card for this company by going to the following link:</td></tr>';
$html.='<tr><td><a href="'.$site_url.'/report/index.php?key='.$generated_key.'">'.$site_url.'/report/index.php?key='.$generated_key.'</a></td></tr>';


$html.='<tr><td>Feel free to send us some message to the email address support@moverzfax.com for any assistance</td></tr>';



$html.='<tr><td>Respectfully</td></tr>';

$html.='<tr><td>MoverZfax.com Management</td></tr>';
$html.='<tr style="background-color:#000"><td >&nbsp;</td></tr></table>';
	//$mail->MsgHTML($html); //Put your body of the message you can place html code here
	//$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line (usimg absolute path), 
	//$send = $mail->Send(); //Send the mails
	//new mail code writte by geetha
$emailheaders = 'MIME-Version: 1.0rn' . "\r\n";
		$emailheaders .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$emailheaders .= 'From: MoverZfax <geetha@exadataconsulting.com>' . "\r\n";
		$emailto = $loginemail;
		$emailsubject = $movingcompany."Report Card from MoverZfax.com";;
		$emailmessage =  $html;
		$emailto1='vinijeya@gmail.com';
		mail($emailto,$emailsubject,$emailmessage,$emailheaders);
		/*$emailmessage =  $html;
		$mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = 'pickhr.com'; //Hostname of the'; mail server
	$mail->Port = '587'; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = 'mail@pickhr.com'; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = 'Mail@123'; //Password for SMTP authentication
	$mail->AddReplyTo("no-reply@moverzfax.com", "MoverzFax"); //reply-to address
	$mail->SetFrom("no-reply@moverzfax.com", "MoverZfax <no-reply@moverzfax.com>"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = $emailsubject; //Subject od your mail
	$mail->AddAddress($loginemail, $loginname); //To address who will receive this email
	$mail->AddBCC('pratyushaphp@gmail.com', 'prathiusha');
	$mail->MsgHTML($emailmessage); //Put your body of the message you can place html code here
	
	$send = $mail->Send(); //Send the mails
	// if you want to does not show other users email addresses like newsletter, daily, weekly, subscription emails means use the below line to clear previous email address
	//$mail->ClearAddresses();
*/
	
	//if($send){
		//echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
	//}
	//else{
		//echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
	//}
/*$params = array("name" => "Test Account",
				"email" => "vinijeya@gmail.com",
				"type" => "send-test",
				"subject" => "Report Card test");

//Process and send email.
$result = $util->sendEmail($params, $mailer);*/
}
}
/*echo "TOTAL GRADE: $algorithm ($algorithm_calculated)<br>";
echo "Legal Grade: $algorithm_legal<br>";
echo "Member Grade: $algorithm_member<br>";
echo "Review Grade: $algorithm_review<br>";
echo "Scam Grade: $algorithm_scam<br><br>";

$time_end = microtime(true);
$execution_time_sec = ($time_end - $time_start); //execution time in seconds
echo "Execution time in seconds: $execution_time_sec seconds<br>";

echo "Random ID: $random_digit<br>";
echo "USDOT: $usdot<br>";
echo "Company: ".htmlentities($movingcompany)."<br>";
echo "State: $state<br>";
echo "State Abbreviation: $statecode<br>";
echo "City: $city<br>";
echo "Phone: $phone<br>";
echo "<br>";

echo "* * * * * State Registration Link * * * * *<br>";
echo "State Registration Link: <a href=\"$statereglink\">$statereglink</a><br>";
echo "<br>";

echo "* * * * * Movingscam * * * * *<br>";
echo "Movingscam Rating: $rating_movingscam<br>";
echo "<a href=\"$link_movingscam\">$ratetitle_movingscam</a> $message_movingscam<br>";
echo "<br>";

echo "* * * * * SAFER * * * * *<br>";
echo "SAFER Rating: $rating_safer<br>";
echo "$ratetitle_safer $message_safer<br>";
echo "$url_safer<br>";
echo "<br>";

echo "* * * * * FMCSA * * * * *<br>";
echo "$ratetitle_fmcsa $message_fmcsa<br>";
echo "$url_fmcsa<br>";
echo "<br>";

echo "* * * * * Ripoff Report * * * * *<br>";
echo "$ratetitle_ripoffreport $message_ripoffreport<br>";
echo "$url_ripoffreport<br>";
echo "Ripoff Report Rating: $rating_ripoffreport<br>";
echo "<br>";

echo "* * * * * BBB * * * * *<br>";
echo "$ratetitle_bbb $message_bbb<br>";
echo "$url_bbb<br>";
echo "Found: $found_bbb<br>";
echo "<br>";

echo "* * * * * AMSA * * * * *<br>";
echo "$ratetitle_amsa $message_amsa<br>";
echo "$url_amsa<br>";
echo "Found: $found_amsa<br>";
echo "<br>";

echo "* * * * * HHGFAA * * * * *<br>";
echo "$ratetitle_hhgfaa $message_hhgfaa<br>";
echo "$url_hhgfaa<br>";
echo "Found: $found_hhgfaa<br>";
echo "<br>";

echo "* * * * * My Moving Reviews * * * * *<br>";
echo "$ratetitle_mymovingreviews $message_mymovingreviews<br>";
echo "$url_mymovingreviews<br>";
echo "Found: $found_mymovingreviews<br>";
echo "Algorithm Rating: $rating_mymovingreviews<br>";
echo "<br>";
echo "* * * * * Yelp * * * * *<br>";
echo "$ratetitle_yelp $message_yelp<br>";
echo "$url_yelp<br>";
echo "Found: $found_yelp<br>";
echo "Algorithm Rating: $rating_yelp<br>";
echo "<br>";
echo "* * * * * Insider Pages * * * * *<br>";
echo "$ratetitle_insiderpages $message_insiderpages<br>";
echo "$url_insiderpages<br>";
echo "Found: $found_insiderpages<br>";
echo "Algorithm Rating: $rating_insiderpages<br>";
echo "<br>";
echo "* * * * * Kudzu * * * * *<br>";
echo "$ratetitle_kudzu $message_kudzu<br>";
echo "$url_kudzu<br>";
echo "Found: $found_kudzu<br>";
echo "Algorithm Rating: $rating_kudzu<br>";
echo "<br>";
echo "* * * * * Mover Reviews * * * * *<br>";
echo "$ratetitle_moverreviews $message_moverreviews<br>";
echo "$url_moverreviews<br>";
echo "Found: $found_moverreviews<br>";
echo "Algorithm Rating: $rating_moverreviews<br>";
echo "<br>";
echo "* * * * * Review a Mover * * * * *<br>";
echo "$ratetitle_reviewamover $message_reviewamover<br>";
echo "$url_reviewamover<br>";
echo "Found: $found_reviewamover<br>";
echo "Algorithm Rating: $rating_reviewamover<br>";
echo "<br>";
echo "* * * * * Movers Search and Reviews * * * * *<br>";
echo "$ratetitle_msr $message_msr<br>";
echo "$url_msr<br>";
echo "Found: $found_msr<br>";
echo "Algorithm Rating: $rating_msr<br>";
echo "<br>";
echo "* * * * * Epinions * * * * *<br>";
echo "$ratetitle_epinions $message_epinions<br>";
echo "$url_epinions<br>";
echo "Found: $found_epinions<br>";
echo "Algorithm Rating: $rating_epinions<br>";
echo "<br>";
echo "* * * * * Transport Reviews * * * * *<br>";
echo "$ratetitle_transportreviews $message_transportreviews<br>";
echo "$url_transportreviews<br>";
echo "Found: $found_transportreviews<br>";
echo "Algorithm Rating: $rating_transportreviews<br>";
echo "<br>";
echo "* * * * * Transport Reports * * * * *<br>";
echo "$ratetitle_transportreports $message_transportreports<br>";
echo "$url_transportreports<br>";
echo "Found: $found_transportreports<br>";
echo "Algorithm Rating: $rating_transportreports<br>";
echo "<br>";
echo "* * * * * Moving Guardian * * * * *<br>";
echo "$ratetitle_movingguardian $message_movingguardian<br>";
echo "$url_movingguardian<br>";
echo "Found: $found_movingguardian<br>";
echo "Algorithm Rating: $rating_movingguardian<br>";
echo "<br>";
echo "* * * * * Movers Reviewed * * * * *<br>";
echo "$ratetitle_moversreviewed $message_moversreviewed<br>";
echo "$url_moversreviewed<br>";
echo "Found: $found_moversreviewed<br>";
echo "Algorithm Rating: $rating_moversreviewed<br>";
echo "<br>";
echo "Reviews to average: $reviewsaverage<br>";
//echo "<a href=\"$url_insiderpages1\">$url_insiderpages1<\/a><br>";
//echo "<a href=\"$url_kudzu1\">$url_kudzu1<\/a>";*/



?>