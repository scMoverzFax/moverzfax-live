<?php 

include 'connection.php';


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
 }
else{
    $sql = "SELECT * FROM `register`";
    $result = $con->query($sql);
    $id = 1;
    if(mysqli_num_rows($result) > 0){            
        while($res = mysqli_fetch_array($result)){
            if($id == $res['id']){
                  echo "<pre>";
                  print_r($res);
                  echo "</pre>";
            }
        }
    }
    else{
        return "No Record Found";
    }
        $con->close();
}

?>
