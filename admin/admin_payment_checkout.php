<?php 
include 'admin_header.php';
?>
<br>
<br>
<br>
<?php
    // Start a PHP session
    session_start();

    // Assign the usdot inputs to session variables
    if (isset($_POST['usdot']) && isset($_POST['customer_email'])) {
        $fullArray = $_POST['usdot'];
        $_SESSION['usdot_numbers'] = array_filter($fullArray);
        $_SESSION['customer_email'] = $_POST['customer_email'];
        include '../stripe/checkout.html';
    }

    include '../home/footer.php';
?>