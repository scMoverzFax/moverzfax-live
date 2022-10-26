<?php

include "connection.php";

$country_id = isset($_REQUEST['country_id']) && $_REQUEST['country_id']?$_REQUEST['country_id']:"1";

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
else{

  $sql = "SELECT * FROM `state` where country_id={$country_id}" ;
  $result = $con->query($sql);
    while($res = mysqli_fetch_array($result)){
        // $select = isset($_SESSION['states']) && $_SESSION['states'] == $res["code"]?"selected":" ";
        echo '<option value="'.$res['code'].'">'.$res['name'].'</option>';
    }
   $con->close();
 }

?>







































<!-- <option value=""></option>
<option value="Alabama"></option>
<option value="Alaska"></option>
<option value="Arizona"></option>
<option value="Arkansas"></option>
<option value="California"></option>
<option value="Colorado"></option>
<option value="Connecticut"></option>
<option value="Delaware"></option>
<option value="Florida"></option>
<option value="Georgia"></option>
<option value="Hawaii"></option>
<option value="Idaho"></option>
<option value="Illinois"></option>
<option value="Indiana"></option>
<option value="Iowa"></option>
<option value="Kansas"></option>
<option value="Kentucky"></option>
<option value="Louisiana"></option>
<option value="Maine"></option>
<option value="Maryland"></option>
<option value="Massachusetts"></option>
<option value="Michigan"></option>
<option value="Minnesota"></option>
<option value="Mississippi"></option>
<option value="Missouri"></option>
<option value="Montana"></option>
<option value="Nebraska"></option>
<option value="Nevada"></option>
<option value="New Hampshire"></option>
<option value="New Jersey"></option>
<option value="New Mexico"></option>
<option value="New York"></option>
<option value="North Carolina"></option>
<option value="North Dakota"></option>
<option value="Ohio"></option>
<option value="Oklahoma"></option>
<option value="Oregon"></option>
<option value="Pennsylvania"></option>
<option value="Rhode Island"></option>
<option value="South Carolina"></option>
<option value="South Dakota"></option>
<option value="Tennessee"></option>
<option value="Texas"></option>
<option value="Utah"></option>
<option value="Vermont"></option>
<option value="Virginia"></option>
<option value="Washington"></option>
<option value="West Virginia"></option>
<option value="Wisconsin"></option>
<option value="Wyoming"></option>
<option value="District of Columbia"></option>
<option value="Alberta"></option>
<option value="British Columbia"></option>
<option value="Manitoba"></option>
<option value="New Brunswick"></option>
<option value="New Foundland"></option>
<option value="NorthWest Territories"></option>
<option value="Nova Scotia"></option>
<option value="Ontario"></option>
<option value="Prince Edward Island"></option>
<option value="Quebec"></option>
<option value="Saskatchewan"></option>
<option value="Yukon"></option>
<option value="Nunavut"></option> -->