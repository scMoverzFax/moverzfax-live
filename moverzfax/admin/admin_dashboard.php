<?php
    include 'connection.php';
    // first box eith all user for moversfax compnay 
    $firstBox = mysqli_query($con,"SELECT count(id) AS all_customer FROM `customer_register` WHERE is_active = '1'")->fetch_assoc();
    echo "First Box Values is :- All customer of moversfax " . $firstBox['all_customer'] . "<br>";

    // Second box eith all mover for moversfax compnay 
    $secondBox = mysqli_query($con,"SELECT count(id) AS all_mover FROM `mover_register` WHERE is_active = '1'")->fetch_assoc();
    echo "Second Box Values is :- All mover of moversfax " . $secondBox['all_mover'] . "<br>";

    // Third box eith all mover for moversfax compnay 
    $thirdBox = mysqli_query($con,"SELECT count(id) AS all_transaction FROM `payment`")->fetch_assoc();
    echo "Third Box Values is :- Transaction Successfullt completed with moversfax " . $thirdBox['all_transaction'] . "<br>";

    // Fourth box eith all mover for moversfax compnay 
    $fourthBox = mysqli_query($con,"SELECT sum(tr_amount) AS all_money FROM `payment`")->fetch_assoc();
    echo "Fouth Box Values is :- Money collecetd with moversfax  " . $fourthBox['all_money'] . "<br>";
?>