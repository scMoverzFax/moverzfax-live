<?php
include 'connection.php';

    $id = $_GET['id'];
    $work = $_GET['work'];
    if($work == "review"){
        $sql = "DELETE FROM review WHERE id='".$id."'";
        if(mysqli_query($con ,$sql)){
            header("Location: ../home/my_review.php");
        }
        else{
            header("Location: ../home/my_review.php");
        }
    }
    
?>