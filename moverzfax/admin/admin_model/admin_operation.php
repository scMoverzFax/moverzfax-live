<?php

    $action = $_GET['action'];
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $currentValue = $_GET['val'];
        $flagName = $_GET['flag'];
    }
    if (isset($_GET['usdot'])) {
    $usdot = (int)$_GET['usdot'];
    $strikeValue = (int)$_GET['val'];
    $strikeNumber = $_GET['num'];
    }
    include '../../model/connection.php';
    if($action == 'delete_user'){
        $sql = "DELETE FROM customer_register WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql)){
            header("Location: admin_cs_user.php");
        }
        else{
            header("Location: admin_cs_user.php");
        }
    }
    elseif($action == 'block_user'){
        $sql1 = "UPDATE customer_register SET is_active = 0 WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: admin_cs_user.php");
        }
        else{
            header("Location: admin_cs_user.php");
        }
    }
    elseif($action == 'unblock_user'){
        $sql1 = "UPDATE customer_register SET is_active = 1 WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: admin_cs_user.php");
        }
        else{
            header("Location: admin_cs_user.php");
        }
    }
    elseif($action == 'delete_mover'){
        $sql = "DELETE FROM mover_register WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql)){
            header("Location: ../admin_mv_user.php");
        }
        else{
            header("Location: ../admin_mv_user.php");
        }
    }
    elseif($action == 'block_mover'){
        $sql1 = "UPDATE mover_register SET is_active = 0 WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: ../admin_mv_user.php");
        }
        else{
            header("Location: ../admin_mv_user.php");
        }
    }
    elseif($action == 'unblock_mover'){
        $sql1 = "UPDATE mover_register SET is_active = 1 WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: ../admin_mv_user.php");
        }
        else{
            header("Location: ../admin_mv_user.php");
        }
    }
    elseif($action == 'acceptReview'){
        $sql1 = "UPDATE review SET admin_approval = 'accepted' WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: ../admin_review.php");
        }
        else{
            header("Location: ../admin_review.php");
        }
    }
    elseif($action == 'rejectReview'){
        $sql1 = "UPDATE review SET admin_approval = 'rejected' , is_active = '1' WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: ../admin_review.php");
        }
        else{
            header("Location: ../admin_review.php");
        }
    }
    elseif($action == 'statusReview'){
        $sql1 = "UPDATE review SET is_active = '1' WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: ../admin_review.php");
        }
        else{
            header("Location: ../admin_review.php");
        }
    }
    elseif($action == 'approve_mover'){
        $sql1 = "UPDATE mover_register SET approved = 1 WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: ../admin_mv_approval.php");
        }
        else{
            header("Location: ../admin_mv_approval.php");
        }
    }
    elseif($action == 'update_strike'){
        if($strikeValue == 0){
            $sql1 = "UPDATE mover_register SET ".$strikeNumber." = 1 WHERE usdot = ".$usdot."";
        } else {
            $sql1 = "UPDATE mover_register SET ".$strikeNumber." = 0 WHERE usdot = ".$usdot."";
        }
        if(mysqli_query($con,$sql1)){
            header("Location: ../admin_mv_scammer.php");
        }
        else{
            header("Location: ../admin_mv_scammer.php");
        }
    }
    elseif($action == 'flag_link'){
        if($currentValue == 0){
            $sql1 = "UPDATE mover_register SET ".$flagName." = 1 WHERE id = ".$id."";
        } else {
            $sql1 = "UPDATE mover_register SET ".$flagName." = 0 WHERE id = ".$id."";
        }
        if(mysqli_query($con,$sql1)){
            header("Location: ../mover_approval_page.php?id=".$id);
        }
        else{
            header("Location: ../mover_approval_page.php");
        }
    }
?>