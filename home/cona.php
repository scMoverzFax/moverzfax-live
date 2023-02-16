<!DOCTYPE html>
<html>
<head>  
    <title>MoverZfax</title>
    <?php include 'myheader.php'; ?>
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
    
<div class="ma">
<div class=box>
    
    <b>
<?php
 


$name = $_POST["na"];
$email = $_POST["ea"];
$subject = $_POST["sa"];
$message = $_POST["wa"];
$answer = $_SESSION["answer"];
$user_answer = $_POST["answer"];

if($answer != $user_answer){
    // include_once 'myheader.php';
    $message = "You are not a human";
    echo "<h1>".$message."</h2>";
    // include_once 'footer.php';
}


$host="localhost";
$user="root";
$password="";
$dbname="move";


$con=mysqli_connect($host,$user,$password,$dbname);

if ($con->connect_error){
    echo("Connection Failed".$con->connect_error);
    exit();
}
else{
    $st = $con->prepare("insert into contact(name,email,subject,message)values(?,?,?,?)");
    $st->bind_param("ssss",$name,$email,$subject,$message);
    $st->execute();
    echo "Thanks for Contacting us!!";
    $st->close();
}

?>
</b>
</c>
</div>
<div>
</body>
</html>