
<?php

include 'connection.php';

$action = $_POST['submit'];
session_start();
$user_id = $_SESSION["id"];
if( $action!=null && $action == "update_details"){
    $user_first_name = $_POST['first_name'];
    $user_last_name = $_POST['last_name'];
    $user_email = $_POST['user_email'];
    $user_contact = $_POST['user_contact'];
    $user_city = $_POST['user_city'];
    $user_zcode = $_POST['user_zcode'];
    $user_country = $_POST['user_country'];
    $user_state = $_POST['user_state'];

    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    else{
        $newURL = "index.php";

        $sql = "UPDATE customer_register SET first_name = '".$user_first_name."' , last_name = '".$user_last_name."', contact_number = '".$user_contact."', email = '".$user_email."', country = '".$user_country."' , states = '".$user_state."', city = '".$user_city."'  , zip_code = '".$user_zcode."' WHERE id = ".$user_id."";
        
        
        if (mysqli_query($con, $sql)) {
            header('Location: http://localhost:8080/project/home/logout.php');
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
            
        mysqli_close($con);
        //   header('Location: '.$newURL);
    }
}
elseif($action!=null && $action == "change_pass"){
    $new_pass = md5($_POST['npass']);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    else{
        $newURL = "index.php";

        $sql = "UPDATE customer_register SET passwords = '".$new_pass."' WHERE id = ".$user_id."";
        
        if (mysqli_query($con, $sql)) {
            header('Location: http://localhost:8080/project/home/logout.php ');
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
            
        mysqli_close($con);
        //   header('Location: '.$newURL);
    }


}
else{
    echo "action not found";
}

// $ca = $_POST['ca'];
// $em = $_POST['em'];
// $co = $_POST['co'];
// $st = $_POST['st'];
// $cii = $_POST['cii'];
// $zi = $_POST['zi'];
// $yo = $_POST['yo'];
// $po = $_POST['po'];

// if ($con->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
// else{
//   $newURL = "index.php";
 
//   // prepare and bind
//   $stmt = $con->prepare("INSERT INTO register (catagory,email,country,state1,city,zip_code,password1,cpassword) VALUES (?, ?, ?, ?, ? ,?, ?, ?)");
//   $stmt->bind_param("sssssiss", $ca, $em, $co, $st, $cii, $zi, $yo, $po);
  
//   // set parameters and execute
//   $stmt->execute();
  
//   echo "New records created successfully";

//   $stmt->close();
//   $con->close();

// //   header('Location: '.$newURL);

// }

?>
