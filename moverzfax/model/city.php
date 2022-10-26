<?php

include "connection.php";

$state_code = isset($_REQUEST['state_code']) && $_REQUEST['state_code']?$_REQUEST['state_code']:"AL";

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
else{

  $sql = "SELECT * FROM `city` where state_code='".$state_code."'";
  $result = $con->query($sql);
    while($res = mysqli_fetch_array($result)){
        // $select = isset($_SESSION['city']) && $_SESSION['city'] == $res["id"]?"selected":" ";
        echo '<option value="'.$res['id'].'">'.$res['name'].'</option>';
    }
  
   $con->close();
 }

?>






































<!-- <option value="" selected></option>
<option value="New Brunswick"></option>
<option value="Aberdeen" ></option>
<option value="Abingdon" ></option>
<option value="Annapolis" ></option>
<option value="Arnold" ></option>
<option value="Baltimore" ></option>
<option value="Bel Air" ></option>
<option value="Beltsville" ></option>
<option value="Berlin" ></option>
<option value="Bishopville" ></option>
<option value="Bowie" ></option>
<option value="Brentwood" ></option>
<option value="Cambridge" ></option>
<option value="Capital Heights" ></option>
<option value="Capitol Heights" ></option>
<option value="Centreville" ></option>
<option value="Chester" ></option>
<option value="Chestertown" ></option>
<option value="Chevy Chase" ></option>
<option value="Clarksburg" ></option>
<option value="Clinton" ></option>
<option value="College Park" ></option>
<option value="Columbia" ></option>
<option value="Cumberland" ></option>
<option value="Davidsonville" ></option>
<option value="Derwood" ></option>
<option value="District Heights" ></option>
<option value="Easton" ></option>
<option value="Elkridge" ></option>
<option value="Elkton" ></option>
<option value="Ellicott City" ></option>
<option value="Finksburg" ></option>
<option value="Forestville" ></option>
<option value="Fort Washington" ></option>
<option value="Frederick" ></option>
<option value="Gaithersburg" ></option>
<option value="Germantown" ></option>
<option value="Glen Burnie" ></option>
<option value="Hagerstown" ></option>
<option value="Halethorpe" ></option>
<option value="Hampstead" ></option>
<option value="Hanover" ></option>
<option value="Hyattsville" ></option>
<option value="Ijamsville" ></option>
<option value="Jessep" ></option>
<option value="Kensington" ></option>
<option value="Keymar" ></option>
<option value="Landover" ></option>
<option value="Lanham" ></option>
<option value="Laurel" ></option>
<option value="Lexington Park" ></option>
<option value="Linthicum" ></option>
<option value="Linthicum Heights" ></option>
<option value="Lutherville" ></option>
<option value="Lutherville Timonium" ></option>
<option value="Manchester" ></option>
<option value="Mechanicsville" ></option>
<option value="Mitchellville" ></option>
<option value="Montgomerry Village" ></option>
<option value="Mt Airy" ></option>
<option value="Newburg" ></option>
<option value="nuzvid" ></option>
<option value="Oakland" ></option>
<option value="Ocean City" ></option>
<option value="Odenton" ></option>
<option value="Owings" ></option>
<option value="Owings Mills" ></option>
<option value="Parkville" ></option>
<option value="Potomac" ></option>
<option value="Randallstown" ></option>
<option value="Reisterstown" ></option>
<option value="Rockville" ></option>
<option value="Rosedale" ></option>
<option value="Rossville" ></option>
<option value="Salisbury" ></option>
<option value="Savage" ></option>
<option value="Seat Plesant" ></option>
<option value="Severn" ></option>
<option value="Silver Spring" ></option>
<option value="Smithsburg" ></option>
<option value="Street" ></option>
<option value="Suitland" ></option>
<option value="Temple Hills" ></option>
<option value="Timonium" ></option>
<option value="Upper Marlboro" ></option>
<option value="Waldorf" ></option>
<option value="Westminster" ></option>
<option value="Other Location"></option> -->