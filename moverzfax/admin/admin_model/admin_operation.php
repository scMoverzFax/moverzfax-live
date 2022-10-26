<?php

    $action = $_GET['action'];
    $id = $_GET['id'];
    include 'connection.php';
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
?>