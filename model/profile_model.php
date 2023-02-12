
<?php
include "connection.php";

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
else{

  $sql = "SELECT * FROM `customer_register`";
  $result = $con->query($sql);
    $id = $user_id;
  if(mysqli_num_rows($result) > 0){            
    while($res = mysqli_fetch_array($result)){
        if($id == $res['id']){
             $profile_details = $res;
        }
    }
   }
   else{
         return "No Record Found";
   }
   $con->close();
 }

?>
