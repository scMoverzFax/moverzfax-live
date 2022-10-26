
<?php
include 'connection.php';
session_start();
if(isset($_SESSION["email"]) && isset($_SESSION["id"])){

    $origin_country = $_POST['origin_country'];
    $origin_state = $_POST['origin_state'];
    $origin_city = $_POST['origin_city'];
    $origin_zip_number = $_POST['origin_zip_number'];
    $origin_address = $_POST['origin_address'];
    $destination_country = $_POST['destination_country'];
    $destination_state = $_POST['destination_state'];
    $destination_city = $_POST['destination_city'];
    $destination_zip_code = $_POST['destination_zip_code'];
    $destination_address = $_POST['destination_address'];
    $posting_date = date('y-m-d');
    $date_of_move = $_POST['date_of_move'];
    $type_dwelling = $_POST['type_dwelling'];
    $size_dwelling = $_POST['size_dwelling'];
    $additional_detail = $_POST['additional_detail'];
    $user_id = $_POST['user_id'];
    $user_email = $_POST['user_email'];


        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
        
        // prepare and bind
        $stmt = $con->prepare("INSERT INTO add_jobs (origin_country, origin_state, origin_city, origin_zip_code, origin_address, destination_country, destination_state, destination_city, destination_zip_code, destination_address, posting_date, date_of_move, type_of_dwelling, size_of_dwelling, some_details, user_id, user_email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssssssss", $origin_country, $origin_state, $origin_city, $origin_zip_number, $origin_address, $destination_country, $destination_state, $destination_city ,$destination_zip_code, $destination_address,$posting_date, $date_of_move, $type_dwelling, $size_dwelling,$additional_detail, $user_id, $user_email);
        
        // set parameters and execute
        $stmt->execute();

        $stmt->close();
        $con->close();

        header('Location: ../home/my_jobs.php');

    }
}
else{
    header('Location: ../home/my_jobs.php');
}
?>
