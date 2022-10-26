<?php include "connection.php";
    $mover_reply = $_REQUEST['mover_reply'];
    if($mover_reply != NULL){
        $id = $_REQUEST['id'];
        if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
        } else {
            $sql = "UPDATE review SET mover_reply = '".$mover_reply."'";
            if($con->query($sql) === TRUE){
                $sql = "SELECT mover_reply FROM review WHERE id = '".$id."' ";
                $result = $con->query($sql);
                if(mysqli_num_rows($result) > 0){
                    $res = mysqli_fetch_assoc($result);
                    echo $res['mover_reply'];
                }
            }
            $con->close();
          }
    }
    else{
        echo "Invalid Input. Please Enter Your Reply." ;
    }
?>