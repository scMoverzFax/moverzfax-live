<?php

include 'connection.php';

$usdot = $_GET["usdot"];

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

if (mysqli_num_rows($result) <= 0) {
    header("Location: ../home/mover_edit_links.php?invalid=1");
} else {
    $sql1 = "UPDATE mover_register
    SET 
        state_link = '" . $state_link . "',
        federal_link = '" . $federal_link . "',
        bbb_link = '" . $bbb_link . "',
        bbb_grade = '" . $bbb_grade . "',
        msc_link = '" . $msc_link . "',
        hhgfaa_link = '" . $hhgfaa_link . "',
        ripoff_link =  '" . $ripoff_link . "',
        moving_scam_link =  '" . $moving_scam_link . "',
        google_link = '" . $google_link . "',
        google_stars = '" . $google_stars . "',
        my_moving_reviews_link = '" . $my_moving_reviews_link . "',
        moving_reviews_stars = '" . $moving_reviews_stars . "',
        yelp_link = '" . $yelp_link . "',
        yelp_stars = '" . $yelp_stars . "',
        insider_pages_link = '" . $insider_pages_link . "',
        insider_pages_stars = '" . $insider_pages_stars . "',
        mover_reviews_link = '" . $mover_reviews_link . "',
        mover_reviews_stars = '" . $mover_reviews_stars . "',
        transport_reviews_link = '" . $transport_reviews_link . "',
        transport_reviews_stars =  '" . $transport_reviews_stars . "',
        angies_link = '" . $angies_link . "',
        angies_stars = '" . $angie_stars . "',
        trust_pilot_link = '" . $trust_pilot_link . "',
        trust_pilot_stars = '" . $trust_pilot_stars . "'
    WHERE usdot = '" . $usdot . "'";
            
    // echo $sql; die();
    if (mysqli_query($con, $sql1)) {
        // move_uploaded_file($logo_tmp_name, "upload/logo/".$logo_name);
        header("Location: ../home/index.php");
    } else {
        header("Location: ../home/mover_edit_links.php");
    }
}
$con->close();