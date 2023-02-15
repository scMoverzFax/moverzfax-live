
<?php
// $host="localhost";
// $user="id17415443_root";
// $password="(9AP_5gbp{|@63<-";
// $dbname="id17415443_move";

// $servername="localhost";
// $username="root";
// $password="";
// $dbname="move";

// $con=mysqli_connect($servername,$username,$password,$dbname);

?>

<?php
// $servername="localhost";
// $username="moverz20_wesi";
// $password="wesi84265";
// $dbname="moverz20_move";

$servername="focus";
$username="moverz20_moverz_sc";
$password="WgLgvmjLCQ4jPt6";
$dbname="moverz20_move";

// $servername="localhost";
// $username="root";
// $password="";
// $dbname="moverz20_move";

$con=mysqli_connect($servername,$username,$password,$dbname);

if ($con){
	echo "works actually";
} else {
	echo "does not actually woah";
}

	if (!$con){
		die ("Connection failed : " .mysqli_connect_error());
	}

?>