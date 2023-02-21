<!DOCTYPE html>
<html>
<head>  
    <title>MoverZfax</title>
    <?php //include 'myheader.php'; ?>
    <style>
        .ma{
            color:grey;
            font-family:serif;
            text-align:center;
            margin-top:200px;
            font-size:30px;
        }
        .box{
            margin-left:450px;
            margin-top:200px;
            width:400px;
            height:40px;
            border:4px solid grey;
            padding:25px;
        }
    </style>

</head>
<body>
<?php
$recaptcha_secret = "6LcoH5ckAAAAAMisl9y8YoyVgZr8L_duQJ5qypJo";
$token = $_POST['token'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$token}");
$response_data = json_decode($response);
//if captcha successful, process the from data
if ($response_data->success) {

    // The reCAPTCHA verification was successful
    // Process the form data here

    include '../model/connection.php';

    $name = $_POST["na"];
    $email = $_POST["ea"];
    $subject = $_POST["sa"];
    $message = $_POST["wa"];

    $st = $con->prepare("insert into contact(name,email,subject,message)values(?,?,?,?)");
    $st->bind_param("ssss",$name,$email,$subject,$message);
    $st->execute();
    echo "Thanks for Contacting us!!";
    $st->close();


} else {
    // The reCAPTCHA verification failed
    // Show an error message or take other action
    //use next two lines to debug
    // echo "reCAPTCHA verification failed. Error codes: " . implode(", ", $response_data->{"error-codes"}) . "<br>";
    // echo "Token is: " . $token;
    
    header("Location: ../home/contact.php?captcha=1");
}

?>
<div class="ma">
<div class=box>
    
<b>
</b>
</c>
</div>
<div>
</body>
</html>