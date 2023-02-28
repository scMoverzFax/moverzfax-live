<?php 
include 'admin_header.php';
    // Start a PHP session
    session_start();

    // Assign the usdot inputs to session variables
    if (isset($_POST['usdot']) && isset($_POST['customer_email'])) {
        $_SESSION['usdot_numbers'] = $_POST['usdot'];
        $_SESSION['customer_email'] = $_POST['customer_email'];
        include '../stripe/checkout.html';
    }

    include '../home/footer.php';
?>