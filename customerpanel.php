<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php
		session_start();
		$username = $_SESSION['user']; 
		$password = $_SESSION['password'];

		if (!isset($username) && !isset($password)){
			header('location: signin.php ?You are not logged in');
		}
	?>
	<?php 
		include_once 'customernavigation.php';
	?>
	</head>
<body>
	<h1><?php echo 'Welcome client' .$username; ?></h1>

		<?php
			include_once 'footer.php';
		?>
</body>
</html>