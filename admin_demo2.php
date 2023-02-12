<?php 
    $value = $_GET['value'];
    $id = $_GET['id'];
    include 'connection.php';
    if($value == 'delete'){
        $sql = "DELETE FROM customer_register WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql)){
            header("Location: admin_demo.php");
        }
        else{
            header("Location: admin_demo1.php");
        }
    }
    elseif($value == 'block'){
        $sql1 = "UPDATE customer_register SET is_active = 0 WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: admin_demo.php");
        }
        else{
            header("Location: admin_demo1.php");
        }
    }
    elseif($value == 'unblock'){
        $sql1 = "UPDATE customer_register SET is_active = 1 WHERE id = '".$id."'";
        if(mysqli_query($con ,$sql1)){
            header("Location: admin_demo.php");
        }
        else{
            header("Location: admin_demo1.php");
        }
    }
?>