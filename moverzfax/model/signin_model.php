<?php
$user_type = $_REQUEST['catagory'];
$email = $_REQUEST['email'];
$passwords = md5($_REQUEST['passwords']);

include 'connection.php';

  $baseURL = "http://localhost:8080/2022/moverzfax/";
  $homeURL = "http://localhost:8080/2022/moverzfax/home/";
  // prepare and bind
  if($user_type == 'customer'){
    $sql = "SELECT * FROM `customer_register` WHERE is_active = 1 AND email='".$email."' AND passwords='".$passwords."'";
    // echo $sql;exit;
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        $row = $result->fetch_assoc();
        // echo "id: " . $row["id"]. " - Name: " . $row["email"]. "<br>";
        session_start();
        $_SESSION["id"] = $row["id"];
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["last_name"] = $row["last_name"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["catagory"] = $row["catagory"];
        $_SESSION["country"] = $row["country"];
        $_SESSION["states"] = $row["states"];
        $_SESSION["city"] = $row["city"];
        header('Location: '.$homeURL.'index.php');
        // echo $baseURL.$homeURL;
    } else {
        header('Location:'.$homeURL.'signin.php?invalid=1');
        // echo "";
    }
  }
  elseif($type == 'mover'){
    $sql = "SELECT * FROM `mover_register` WHERE is_active = 1 AND usdot = '".$email."' AND mover_password = '".$passwords."'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
          $row = $result->fetch_assoc();
          session_start();
          $_SESSION["id"] = $row["id"];
          $_SESSION["company_name"] = $row["company_name"];
          $_SESSION["usdot"] = $row["usdot"];
          $_SESSION["email"] = $row["mover_email"];
          $_SESSION["catagory"] = $row["role"];
          $_SESSION["country"] = $row["country"];
          $_SESSION["states"] = $row["states"];
          $_SESSION["city"] = $row["city"];
          header('Location: '.$homeURL.'index.php');
          // echo $baseURL.$homeURL;
    } else {
      header('Location:'.$homeURL.'signin.php?invalid=1');
      // return false;
    }
  }
  elseif($type == 'admin'){
      return false;
  }
  $con->close();


?>