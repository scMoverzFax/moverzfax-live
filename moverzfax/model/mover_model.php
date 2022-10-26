<?php

include 'connection.php';

$usdot = $_POST['usdot'];
$company_name = $_POST['company_name'];
$alternate_business = $_POST['alternate_business'];
$company_website = $_POST['company_website'];
$contact_number = $_POST['contact_number'];
$fax_number = $_POST['fax_number'];
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
$logo_name = $_FILES['company_logo']['name'];
$logo_type = $_FILES['company_logo']['type'];
$logo_path = "upload/logo/" . $logo_name;
$logo_size = $_FILES['company_logo']['size'];
$chkstr = implode(",", $business_mover);


$sql = "SELECT usdot FROM mover_register WHERE usdot = '" . $usdot . "'";

$result = $con->query($sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: ../home/mover_register.php?invalid=1");
} else {
    $sql1 = "INSERT INTO mover_register(usdot ,company_name, alternate_business, company_website, contact_number, fax_number, contact_person, mc, country, states, city, zip_code, business_mover, mover_email, mover_password, logo_name, logo_type, logo_path, logo_size)
    VALUES ('" . $usdot . "','" . $company_name . "','" . $alternate_business . "','" . $company_website . "','" . $contact_number . "','" . $fax_number . "','" . $contact_person . "','" . $mc . "','" . $country . "','" . $state . "','" . $city . "','" . $zip_code . "','" . $chkstr . "','" . $mover_email . "','" . $password . "','" . $logo_name . "','" . $logo_type . "','" . $logo_path . "','" . $logo_size . "');";
    // echo $sql; die();
    if (mysqli_query($con, $sql1)) {
        // move_uploaded_file($logo_tmp_name, "upload/logo/".$logo_name);
        header("Location: ../home/signin.php");
    } else {
        header("Location: ../home/mover_register.php");
    }
}
$con->close();