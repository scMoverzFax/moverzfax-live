<?php

session_start();

//variable declaration
$answer = $_SESSION["answer"];
$user_answer = $_POST["answer"];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$terms = $_POST['terms'];
$created_date = date('Y-m-d H:i:s');

echo $user_answer . "<br>" . $answer;
die();	

	if (!isset($_POST['terms'])){
		header('location: support.php? check terms');
	}
	// preventing empty fields
	if ($name == '' || $email == '' || $subject == '' || $description == '' && $subject == 'Select'){ 
		header('location: support.php ?some_fields_are_empty');
	}

	//require_once 'functions.inc.php';

	/*
		Captcha, comparing captcha random number with the 
		number entered by the user.
	*/
	if ($answer == $user_answer && isset($_POST['terms'])){
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			header('location: support.php?Sorry_your_email_is_invalid');
		}

		$api_key = "4861cdb9be484ecc85fd69aec156d4d8";

		$ch = curl_init();
		curl_setopt_array($ch,
		 	[
		 		CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1/?api_key=$api_key&email=$email", 
			 	CURLOPT_RETURNTRANSFER => true, 
			 	CURLOPT_FOLLOWLOCATION => true
			]);

		$response = curl_exec($ch);
		curl_close($ch);

		$data = json_decode($response, true);

		if($data['deliverability'] === "UNBELIVERABLE"){
			header('location: support.php?Sorry_your_email_is_invalid');
		}

		//REQUIRED FILE
		require_once 'dbcon.inc.php';

		$query=" insert into support values ('".$name."','".$email."','".$subject."','".$description."','".$created_date."')";
		$results = mysqli_query($conn,$query);
		
		/**/if ($results)
		{
			
		echo '<script language="javascript">';
		echo 'alert("YOUR MESSAGE IS SENT SUCCESSFULLY, WE WILL REVIEW IT")';
		echo '</script>';
		header('location: support.php?Message_sent!!!');

		}
		else 
		{
			echo "Error " .$query . "<br>" . $conn-> error; 
			header('location: support.php ?failed_to_send_a_support');
		}
		$conn -> close();
	}else {
		echo "Captcha does not match";
	}