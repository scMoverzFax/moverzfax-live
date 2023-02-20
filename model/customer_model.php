
<?php

$recaptcha_secret = "6LcoH5ckAAAAAMisl9y8YoyVgZr8L_duQJ5qypJo";
$token = $_POST['token'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$token}");
$response_data = json_decode($response);
//if captcha successful, process the from data
if ($response_data->success) {

    // The reCAPTCHA verification was successful
    // Process the form data here


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

  } else {
    // The reCAPTCHA verification failed
    // Show an error message or take other action
    //use next two lines to debug
    // echo "reCAPTCHA verification failed. Error codes: " . implode(", ", $response_data->{"error-codes"}) . "<br>";
    // echo "Token is: " . $token;
    
    header("Location: ../home/customer_register.php?captcha=1");
}
?>
