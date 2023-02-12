
<?php

include 'connection.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact_number = $_POST['contact_number'];
$country = $_POST['country'];
$states = $_POST['states'];
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$email = $_POST['email'];
$passwords = md5($_POST['passwords']);
$catagory = "customer";



if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {

  $sql = "SELECT email FROM customer_register WHERE email = '" . $email . "'";

  $result = $con->query($sql);

  if (mysqli_num_rows($result) > 0) {
    header("Location: ../home/customer_register.php?invalid=1");
  } else {
    $newURL = "../home/signin.php";

    // prepare and bind
    $stmt = $con->prepare("INSERT INTO customer_register (first_name,last_name,contact_number,country,states,city,zip_code,email,passwords,catagory) VALUES (?, ?, ?, ?, ?, ?, ?, ? ,? ,?)");
    $stmt->bind_param("ssssssisss", $first_name, $last_name, $contact_number, $country, $states, $city, $zip_code, $email, $passwords, $catagory);

    // set parameters and execute
    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
    $con->close();

    header('Location: ' . $newURL);
  }
}
?>
