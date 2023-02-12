<?php
session_start();
$usdot = isset($_SESSION["usdot"])?$_SESSION["usdot"] : "NULL";
$id = isset($_GET['id'])?$_GET['id'] : "NULL";
$id = isset($_REQUEST['id'])?$_REQUEST['id'] : "NULL";
$colno = isset($_REQUEST['colno'])?$_REQUEST['colno'] : "NULL";
$lead = isset($_GET['lead'])?$_GET['lead'] : "NULL";
$value = isset($_GET['value'])?$_GET['value'] : "NULL";
$func = isset($_GET['func'])?$_GET['func'] : "NULL";
$usdot_count = isset($_GET['count'])?$_GET['count'] : "NULL";
$completed_mover = isset($_GET['completed_mover'])?$_GET['completed_mover'] : "NULL";

include 'connection.php';

$sql = "SELECT usdot_count FROM add_jobs WHERE id='". $id ."'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    $res = mysqli_fetch_assoc($result);
    $count = $res["usdot_count"]; $count++;
    
    if ($lead == 'generate' ) {
        $sql = "UPDATE add_jobs SET is_active = '1', usdot_count = '".$count."' ,usdot".$count." = '".$usdot."'  WHERE id='" . $id . "'";
        if (mysqli_query($con, $sql)) {
            header("Location: ../home/my_lead.php");
        } else {
            header("Location: ../home/my_lead.php");
        }
    } 

    elseif ($func == "1") {

        if($value == '1'){
            $sql = "UPDATE add_jobs SET move_status = 'completed' WHERE id='" . $id . "'";
        }elseif($value == '0'){
            $sql = "UPDATE add_jobs SET move_status = 'incomplete' WHERE id='" . $id . "'";
        }else{
            header("Location: ../home/my_jobs.php");
        }

        if (mysqli_query($con, $sql)) {
            header("Location: ../home/my_jobs.php");
        } else {
            header("Location: ../home/my_jobs.php");
        }
    // } elseif ($lead == 'cancel') {
    //     $sql = "UPDATE add_jobs SET is_active = '0' , mover_id = '0' , company_name = 'NULL' , usdot = '0' WHERE id='" . $id . "'";

    //     if (mysqli_query($con, $sql)) {
    //         header("Location: ../home/my_jobs.php");
    //     } else {
    //         header("Location: ../home/my_jobs.php");
    //     }
    }  elseif($lead == "delete_job"){
        $sql1 = "DELETE FROM add_jobs WHERE id='".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: ../home/my_jobs.php");
        }
        else{
            header("Location: ../home/my_jobs.php");
        }
    } elseif($lead == "reject"){
        $usdot_count = $usdot_count - 1;
        $sql1 = "UPDATE add_jobs SET ".$colno." = '0' , usdot_count = '".$usdot_count."'  WHERE id='" . $id . "'";
            if(mysqli_query($con ,$sql1)){
                if($usdot_count == 0){
                    header("Location: ../home/my_jobs.php");
                }
                else{
                    header("Location: ../home/view_company.php?id=$id");
                }
            }
            else{
                header("Location: ../home/my_jobs.php");
            }
    } elseif($lead == "complete"){
        $sql1 = "UPDATE add_jobs SET move_status = 'completed' , completed_mover = '".$completed_mover."'  WHERE id='" . $id . "'";
        if(mysqli_query($con ,$sql1)){
            header("Location: ../home/my_jobs.php");
        }
        else{
            header("Location: ../home/my_jobs.php");
        }
    }
}