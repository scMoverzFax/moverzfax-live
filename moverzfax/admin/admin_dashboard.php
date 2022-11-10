<?php
    include '../model/connection.php';
    include 'admin_header.php';
    if(!defined('LOGIN')){
        echo '<h3 class="text-center my-5 py-5 ">Please Login First...</h3>';
    } else {
        echo '<br><br><br>';
        // first box eith all user for moversfax compnay 
        $firstBox = mysqli_query($con,"SELECT count(id) AS all_customer FROM `customer_register` WHERE is_active = '1'")->fetch_assoc();
        echo "Number of customers registered with Moverzfax: " . $firstBox['all_customer'] . "<br>";
    
        // Second box eith all mover for moversfax compnay 
        $secondBox = mysqli_query($con,"SELECT count(id) AS all_mover FROM `mover_register` WHERE is_active = '1'")->fetch_assoc();
        echo "Number of movers registered with Moverzfax: " . $secondBox['all_mover'] . "<br>";
    
        // Third box eith all mover for moversfax compnay 
        $thirdBox = mysqli_query($con,"SELECT count(id) AS all_transaction FROM `payment`")->fetch_assoc();
        echo "Number of transactions successfully completed with Moverzfax: " . $thirdBox['all_transaction'] . "<br>";
    
        // Fourth box eith all mover for moversfax compnay 
        $fourthBox = mysqli_query($con,"SELECT sum(tr_amount) AS all_money FROM `payment`")->fetch_assoc();
        echo "Money collecetd through Moverzfax: " . $fourthBox['all_money'] . "<br>";
    }
    
    include '../home/footer.php';
?>