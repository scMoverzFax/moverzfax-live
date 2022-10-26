<?php
    require_once 'connection.php';
    
    if (isset($_POST['submit'])){
        echo '<script> alert(" Working on report buildng ");</script>';
    }else{
        echo "There is no action to be performed";
    }
?>