<?php
session_start();

$usdot = $_POST["usdot"];
$company_name = $_POST["company_name"];
$respsect_cost = $_POST["respsect_cost"];
$professional = $_POST["professional"];
$arrived_timme = $_POST["arrived_timme"];
$star = $_POST["star"];
$comments = $_POST["comments"];
$today = date('y-m-d');
$user_id = $_POST["user_id"];
$user_email = $_POST["user_email"];
$job_id = $_POST["job_id"];

include 'connection.php';

if ($con->connect_error){
    echo("Connection Failed".$con->connect_error);
    exit();
}
else{
    // $st = $con->prepare("insert into review(usdot,company_Name, respsect_Cost, mover_professional, mover_arrived, Impression, overall_review, user_id, user_email,job_id) values(?,?,?,?,?,?,?,?,?,?)");
    // $st->bind_param("issssisisi",$usdot,$company_name,$respsect_cost,$professional,$arrived_timme,$star,$comments,$user_id,$user_email,$job_id);
    // $st->execute();
    $sql = "INSERT INTO  review(usdot,company_Name, respsect_Cost, mover_professional, mover_arrived, Impression, overall_review,review_date, user_id, user_email,job_id)
             VALUES('".$usdot."','".$company_name."','".$respsect_cost."','".$professional."','".$arrived_timme."','".$star."','".$comments."','".$today."','".$user_id."','".$user_email."','".$job_id."')";
    if(mysqli_query($con , $sql)){
        header('Location: ../home/my_review.php');
    }
}

?>