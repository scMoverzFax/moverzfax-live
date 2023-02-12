<?php 

session_start();
if (isset($_POST['submit'])){

	// accepting user inputs from the UI
	$email = $_POST['email'];
	$password = $_POST['password'];
	$usertype = $_POST['usertype'];

	if (!isset($usertype)){
		echo '<script type="text/javascript">'
			. 'alert("please select user type")'
			.'</script>';
		header('location: signin.php ?please_select_user_type');
	}
	require_once 'dbcon.inc.php';

	//validating fields
	if ($email == '' || $password == '' ){
		echo "MAKE SURE YOU HAVE ENTERED EMAIL AND PASSWORD";
	}else{

		if ($usertype == 'Mover'){

			// Mover login
			$sql = " SELECT * FROM mover where email = '".$_POST['email']."' AND password = '".$_POST['password']."' ";

			$result = mysqli_query($conn, $sql);

			if (mysqli_fetch_assoc($result)){
				$_SESSION['user'] = $_POST['email'];
				$_SESSION['password'] = $_POST['password'];
				header ("location: moverpanel.php");
			}
			else {
				include_once 'myheader.php';
				// header('location: signup.php');
				$message = 'Invalid Credentials';
				echo "<h2>".$message."</h2>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
				include_once 'footer.php';			
			}
		}else if ($usertype == 'Customer'){

			//customer login
			$sql = " SELECT * FROM register where email = '".$_POST['email']."' AND password = '".$_POST['password']."' ";

			$result = mysqli_query($conn, $sql);

			if (mysqli_fetch_assoc($result)){

				if (password_verify('$password', $row['password'])){
					$_SESSION['user'] = $_POST['email'];
					header('location: customerpanel.php');
				}
			}
			else {
				include_once 'myheader.php';
				// header('location: signup.php');
				$message = 'Invalid Credentials';
				echo "<h2>".$message."</h2>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
				include_once 'footer.php';
			}
		}else if ($usertype == 'Admin'){
			// admin login
			$sql = " SELECT * FROM admin where email = '".$_POST['email']."' AND password = '".$_POST['password']."' ";

			$result = mysqli_query($conn, $sql);

			if (mysqli_fetch_assoc($result)){
				if (password_verify('$password', $row['password'])){
					$_SESSION['user'] = $_POST['email'];
					header('location: adminpanel.php');
				}		
			}
			else {
				include_once 'myheader.php';
				// header('location: signup.php');
				$message = 'Invalid Credentials';
				echo "<h2 style='padding-left: 200px'>".$message."</h2>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
				include_once 'footer.php';
			}
		}else{
			include_once 'myheader.php';
			echo 'Please specify user type';
		}
	}
}
else{
	header ("location: index.php");
}