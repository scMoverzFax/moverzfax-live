<?php
$servername="focus";
$username="moverz20_moverz_sc";
$password="WgLgvmjLCQ4jPt6";
$dbname="moverz20_move";
$con=mysqli_connect($servername,$username,$password,$dbname);
	if (!$con){
		die ("Connection failed : " .mysqli_connect_error());
	}
?>