<?php

include "connection.php";
session_start();
$country_id = isset($_REQUEST['country_id'])?$_REQUEST['country_id']:"1";

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
else{

  $sql = "SELECT * FROM `country` WHERE id = {$country_id} ORDER BY `country`.`id` ASC" ;
  $result = $con->query($sql);
    while($res = mysqli_fetch_array($result)){
      // $select = isset($_SESSION['country']) && $_SESSION['country'] == $res["code"]?"selected":" ";
      if($res['id'] === $_SESSION['country_id']){
        echo '<option value="'.$res['id'].'" selected>'.$res['name'].'</option>';
      }
      echo '<option value="'.$res['id'].'">'.$res['name'].'</option>';
    }
   $con->close();
 }
?>
