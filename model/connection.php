<?php
$servername="focus";
$username="moverz20_moverz_sc";
$password="WgLgvmjLCQ4jPt6";
$dbname="moverz20_move";
$con=mysqli_connect($servername,$username,$password,$dbname);
	echo "connected";
	if (!$con){
		echo "dieing";
		die ("Connection failed : " .mysqli_connect_error());
	}
?>