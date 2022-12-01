<?php

include 'connection.php';

//Company Information
$company_name = $_POST['name'];
$company_address = $_POST['address'];
$company_website = $_POST['website'];
$contact_number = $_POST['contact_number'];
$contact_person = $_POST['contact_person'];
$fax_number = $_POST['fax'];
$usdot = $_POST['usdot'];
$mc = $_POST['mc'];

//Legal Information
$state_registration_link = $_POST['state_registration_link'];
$federal_registration_link = $_POST['federal_registration_link'];
$licensing_and_information_link = $_POST['licensing_and_information'];

//Moving Associations
$bbb_link = $_POST['member_of_bbb'];
$bbb_stars = $_POST['bbb_stars'];
$amca_link = $_POST['member_of_amca'];
$hgfaa_link = $_POST['member_of_hhgffaa'];

//Scam Alert Portal
$ripoff_link = $_POST['present_on_ripff_report'];
$moving_scam_link = $_POST['present_on_moving_scam'];

//Recommended Portals
$moverzfax_link = $_POST['present_on_moverzfax'];
$mover_reviews_link = $_POST['present_on_moving_reviews'];
$mover_reviews_stars = $_POST['moving_reviews_stars'];
$yelp_link = $_POST['present_on_yelp'];
$yelp_stars = $_POST['yelp_stars'];
$insider_pages_link = $_POST['present_on_insider_pages'];
$insider_pages_stars = $_POST['insider_pages_stars'];
$kudzu_link = $_POST['present_on_kudzu'];
$kudzu_stars = $_POST['kudzu_stars'];
$moverreviews_link = $_POST['present_on_mover_reviews'];
$moverreviews_stars = $_POST['mover_reviews_stars'];
$review_a_mover_link = $_POST['present_on_review_a_mover'];
$review_a_mover_stars = $_POST['review_a_mover_stars'];
$mover_search_and_review_link = $_POST['present_on_mover_search_and_review'];
$mover_search_and_reviews_stars = $_POST['mover_search_and_reviews_stars'];
$epinions_link = $_POST['present_on_movr_epinions'];
$transport_reviews_link = $_POST['present_on_transport_reviews'];
$transport_reviews_stars = $_POST['transport_reviews_stars'];
$angies_list_link = $_POST['present_on_angies_list'];
$moving_guardian_link = $_POST['present_on_moving_guardian'];
$moving_guardian_stars = $_POST['moving_guardian_stars'];
$transport_reports_link = $_POST['present_on_transport_reports'];
$transport_reports_stars = $_POST['transport_reports_stars'];
$mover_reviewed_link = $_POST['present_movers_reviewed'];

//to insert the information into a table for movers who have claimed their business

$sql = "SELECT usdot FROM claimed_movers WHERE usdot = '" . $usdot . "'"; //check if mover is already claimed

$result = $con->query($sql);

if (mysqli_num_rows($result) > 0) { //to check if mover is already in table
    header("Location: ../new-sample-upload-form-movers/mover_links_collection.php?invalid=1"); //return to mover_links_collection and say that the mover is already claimed
} else {
    $sql1 = 
    "INSERT INTO claimed_movers(
        company_name,
        company_address,
        company_website,
        contact_number,
        contact_person,
        fax_number,
        usdot,
        mc,
        state_registration_link,
        federal_registration_link,
        licensing_and_information_link,
        bbb_link,
        bbb_stars,
        amca_link,
        hgfaa_link,
        ripoff_link,
        moving_scam_link,
        moverzfax_link,
        mover_reviews_link,
        mover_reviews_stars,
        yelp_link,
        yelp_stars,
        insider_pages_link,
        insider_pages_stars,
        kudzu_link,
        kudzu_stars,
        moverreviews_link,
        moverreviews_stars,
        review_a_mover_link,
        review_a_mover_stars,
        mover_search_and_review_link,
        mover_search_and_review_stars,
        epinions_link,
        transport_reviews_link,
        transport_reviews_stars,
        angies_list_link,
        moving_guardian_link,
        moving_guardian_stars,
        transport_reports_link,
        transport_reports_stars,
        mover_reviewed_link)
    VALUES (
        '" . $company_name . "',
        '" . $company_address . "',
        '" . $company_website . "',
        '" . $contact_number . "',
        '" . $contact_person . "',
        '" . $fax_number . "',
        '" . $usdot . "',
        '" . $mc . "',
        '" . $state_registration_link . "',
        '" . $federal_registration_link . "',
        '" . $licensing_and_information_link . "',
        '" . $bbb_link . "',
        '" . $bbb_stars . "',
        '" . $amca_link . "',
        '" . $hgfaa_link . "',
        '" . $ripoff_link . "',
        '" . $moving_scam_link . "',
        '" . $moverzfax_link . "',
        '" . $mover_reviews_link . "',
        '" . $mover_reviews_stars . "',
        '" . $yelp_link . "',
        '" . $yelp_stars . "',
        '" . $insider_pages_link . "',
        '" . $insider_pages_stars . "',
        '" . $kudzu_link . "',
        '" . $kudzu_stars . "',
        '" . $moverreviews_link . "',
        '" . $moverreviews_stars . "',
        '" . $review_a_mover_link . "',
        '" . $review_a_mover_stars . "',
        '" . $mover_search_and_review_link . "',
        '" . $mover_search_and_reviews_stars . "',
        '" . $epinions_link . "',
        '" . $transport_reviews_link . "',
        '" . $transport_reviews_stars . "',
        '" . $angies_list_link . "',
        '" . $moving_guardian_link . "',
        '" . $moving_guardian_stars . "',
        '" . $transport_reports_link . "',
        '" . $transport_reports_stars . "',
        '" . $mover_reviewed_link . "');";
    if (mysqli_query($con, $sql1)) {
        //header("Location: ../home/index.php");//probably should have a message to say it worked
        echo '<script type="text/javascript">alert("You have successfully claimed your business!")window.location.replace("../home/index.php");</script>';
        
    } else {
        header("Location: ../new-sample-upload-form-movers/mover_links_collection.php");
    }
}
$con->close();

?>