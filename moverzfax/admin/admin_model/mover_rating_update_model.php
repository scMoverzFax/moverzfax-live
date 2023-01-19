<?php

include 'connection.php';
$usdot = $_POST['usdot'];
$bbb_grade = $_POST['bbb_grade'];

$google_stars = $_POST['google_stars'] ? $_POST['google_stars'] : 0;
$moving_reviews_stars = $_POST['moving_reviews_stars'] ? $_POST['moving_reviews_stars'] : 0;
$yelp_stars = $_POST['yelp_stars'] ? $_POST['yelp_stars'] : 0;
$insider_pages_stars = $_POST['insider_pages_stars'] ? $_POST['insider_pages_stars'] : 0;
$mover_reviews_stars = $_POST['mover_reviews_stars'] ? $_POST['mover_reviews_stars'] : 0;
$transport_reviews_stars = $_POST['transport_reviews_stars'] ? $_POST['transport_reviews_stars'] : 0;
$angie_stars = $_POST['angie_stars'] ? $_POST['angie_stars'] : 0;
$trust_pilot_stars = $_POST['trust_pilot_stars'] ? $_POST['trust_pilot_stars'] : 0;

$sql = "SELECT usdot FROM mover_register WHERE usdot = '" . $usdot . "'";

$result = $con->query($sql);

if (mysqli_num_rows($result) < 0) {
    header("Location: ../admin_dashboard.php");
} else {
    $sqlTEST = "UPDATE mover_register SET 
                bbb_grade='" . $bbb_grade . "',
                google_stars='" . $google_stars . "',
                moving_reviews_stars='" . $moving_reviews_stars . "',
                yelp_stars='" . $yelp_stars . "',
                insider_pages_stars='" . $insider_pages_stars . "',
                mover_reviews_stars='" . $mover_reviews_stars . "',
                transport_reviews_stars='" . $transport_reviews_stars . "',
                angies_stars='" . $angie_stars . "',
                trust_pilot_stars='" . $trust_pilot_stars . "'
                WHERE usdot='" . $usdot . "'
                ";
    $sql1 = "INSERT INTO mover_register( 
        bbb_grade, 
        google_stars,
        moving_reviews_stars,
        yelp_stars,
        insider_pages_stars,
        mover_reviews_stars,
        transport_reviews_stars,
        angies_stars,
        trust_pilot_stars
        )
    VALUES (
            '" . $bbb_grade . "',
            '" . $google_stars . "',
            '" . $moving_reviews_stars . "',
            '" . $yelp_stars . "',
            '" . $insider_pages_stars . "',
            '" . $mover_reviews_stars . "',
            '" . $transport_reviews_stars . "',
            '" . $angie_stars . "',
            '" . $trust_pilot_stars . "'
            );";
    // echo $sql; die();
    if (mysqli_query($con, $sqlTEST)) {
        header("Location: ../admin_mv_stars.php");
    } else {
        header("Location: ../admin_mv_stars.php");
    }
}
$con->close();