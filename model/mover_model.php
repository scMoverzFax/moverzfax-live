<?php

$recaptcha_secret = "YOUR_SECRET_KEY";
$token = $_POST['token'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$token}");
$response_data = json_decode($response);
if ($response_data->success) {
    // The reCAPTCHA verification was successful
    // Process the form data here



include 'connection.php';

$usdot = $_POST['usdot'];
$company_name = $_POST['name'];
$alternate_business = $_POST['alternate_business'];
$company_website = $_POST['website'];
$contact_number = $_POST['contact_number'];
$fax_number = $_POST['fax'];
$contact_person = $_POST['contact_person'];
$mc = $_POST['mc'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$business_mover = $_POST['business_mover'];
$mover_email = $_POST['mover_email'];
$password = md5($_POST['passwords']);
// echo $password; die();
//$logo_name = $_FILES['company_logo']['name'];
$logo_name = uniqid() . '.jpg'; //giving the file a random name so hackers can not execute the file even if they are able to upload
$logo_type = $_FILES['company_logo']['type'];
$logo_path = "upload/logo/" . $logo_name;
$logo_size = $_FILES['company_logo']['size'];
$chkstr = implode(",", $business_mover);

$state_link = $_POST['state_registration_link'];
$federal_link = $_POST['federal_registration_link'];
//$public_link = $_POST['licensing_and_information'];

$bbb_link = $_POST['member_of_bbb'];
$bbb_grade = $_POST['bbb_grade'];
$msc_link = $_POST['member_of_msc'];
$hhgfaa_link = $_POST['member_of_hhgffaa'];

$ripoff_link = $_POST['present_on_ripff_report'];
$moving_scam_link = $_POST['present_on_moving_scam'];

$google_link = $_POST['present_on_google'];
$google_stars = $_POST['google_stars'] ? $_POST['google_stars'] : 0;
$my_moving_reviews_link = $_POST['present_on_moving_reviews'];
$moving_reviews_stars = $_POST['moving_reviews_stars'] ? $_POST['moving_reviews_stars'] : 0;
$yelp_link = $_POST['present_on_yelp'];
$yelp_stars = $_POST['yelp_stars'] ? $_POST['yelp_stars'] : 0;
$insider_pages_link = $_POST['present_on_insider_pages'];
$insider_pages_stars = $_POST['insider_pages_stars'] ? $_POST['insider_pages_stars'] : 0;
$mover_reviews_link = $_POST['present_on_mover_reviews'];
$mover_reviews_stars = $_POST['mover_reviews_stars'] ? $_POST['mover_reviews_stars'] : 0;
$transport_reviews_link = $_POST['present_on_transport_reviews'];
$transport_reviews_stars = $_POST['transport_reviews_stars'] ? $_POST['transport_reviews_stars'] : 0;
$angies_link = $_POST['present_on_angies_list'];
$angie_stars = $_POST['angie_stars'] ? $_POST['angie_stars'] : 0;
$trust_pilot_link = $_POST['present_on_trust_pilot'];
$trust_pilot_stars = $_POST['trust_pilot_stars'] ? $_POST['trust_pilot_stars'] : 0;

$sql = "SELECT usdot FROM mover_register WHERE usdot = '" . $usdot . "'";

$result = $con->query($sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: ../home/mover_register.php?invalid=1");
} else {
    $sql1 = "INSERT INTO mover_register( 
        usdot, company_name, alternate_business, 
        company_website, contact_number, fax_number, 
        contact_person, mc, country, states, city, 
        zip_code, business_mover, mover_email, 
        mover_password, logo_name, logo_type, 
        logo_path, logo_size,

        state_link, federal_link,
        bbb_link, bbb_grade, msc_link, hhgfaa_link,
        ripoff_link, moving_scam_link,
        google_link, google_stars,
        my_moving_reviews_link, moving_reviews_stars,
        yelp_link, yelp_stars,
        insider_pages_link, insider_pages_stars,
        mover_reviews_link, mover_reviews_stars,
        transport_reviews_link, transport_reviews_stars,
        angies_link, angies_stars,
        trust_pilot_link, trust_pilot_stars
        )
    VALUES ('" . $usdot . "',
            '" . $company_name . "',
            '" . $alternate_business . "',
            '" . $company_website . "',
            '" . $contact_number . "',
            '" . $fax_number . "',
            '" . $contact_person . "',
            '" . $mc . "',
            '" . $country . "',
            '" . $state . "',
            '" . $city . "',
            '" . $zip_code . "',
            '" . $chkstr . "',
            '" . $mover_email . "',
            '" . $password . "',
            '" . $logo_name . "',
            '" . $logo_type . "',
            '" . $logo_path . "',
            '" . $logo_size . "',
        
            '" . $state_link . "',
            '" . $federal_link . "',
            

            '" . $bbb_link . "',
            '" . $bbb_grade . "',
            '" . $msc_link . "',
            '" . $hhgfaa_link . "',

            '" . $ripoff_link . "',
            '" . $moving_scam_link . "',

            '" . $google_link . "',
            '" . $google_stars . "',
            '" . $my_moving_reviews_link . "',
            '" . $moving_reviews_stars . "',
            '" . $yelp_link . "',
            '" . $yelp_stars . "',
            '" . $insider_pages_link . "',
            '" . $insider_pages_stars . "',
            '" . $mover_reviews_link . "',
            '" . $mover_reviews_stars . "',
            '" . $transport_reviews_link . "',
            '" . $transport_reviews_stars . "',
            '" . $angies_link . "',
            '" . $angie_stars . "',
            '" . $trust_pilot_link . "',
            '" . $trust_pilot_stars . "'
            );";
    // echo $sql; die();
    if (mysqli_query($con, $sql1)) {
        // move_uploaded_file($logo_tmp_name, "upload/logo/".$logo_name);
        header("Location: ../home/signin.php");
    } else {
        header("Location: ../home/mover_register_and_links.php");
    }
}
$con->close();

} else {
    // The reCAPTCHA verification failed
    // Show an error message or take other action
    header("Location: ../home/mover_register.php?invalid=1");
}
/////