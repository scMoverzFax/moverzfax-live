<?php
	if (isset($_POST['submit'])){
 		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$catagory = $_POST['catagory'];
	
		if ($email == "" || $password == ""{
			header("location: signin.php?fields_empty");
		}else{
/*			$email = "wezimosiuoa@gmail.com";
			$password = "Password";
			$catagory = "Customer";*/
			require_once 'dbcon.inc.php';

			if($catagory == "Customer"){
				$sql = "select * from register where email == '".$email."' and pass == '".$password."' and catagory == 'Customer';";
				$results = mysqli_query($conn, $sql);
				$resultsCheck = mysqli_num_rows($results);

				if ($resultsCheck > 0){
					header("location: customerpanel.php");
				}
				else {
					echo '<script>';
					echo 'alert("Incorrect User password or Email ")';
					echo '</script>';
				}
			}else if($catagory == "mover") {
				$sql = "select * from register where email == '".$email."' and pass == '".$password."' catagory == 'Customer';";
				$results = mysqli_query($conn, $sql);
				$resultsCheck = mysqli_num_rows($results);


				if ($resultsCheck > 0 ){
					header("location: moverpanel.php");;			}
				else {
					echo '<script>';
					echo 'alert("Incorrect User password or Email ")';
					echo '</script>';
				}

			}else {
				echo "User typ not selected";
			}			
		}
		
	}else {
		echo " Session expired ";
	}
 
?>
