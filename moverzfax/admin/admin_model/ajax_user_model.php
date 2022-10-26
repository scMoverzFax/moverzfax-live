
<?php
 include 'connection.php';
 $type = isset($_REQUEST['type'])?$_REQUEST['type'] : NULL;
 $value = isset($_REQUEST['value'])?$_REQUEST['value'] : NULL;
 $sr_no = 1;
 if($type == "cs_user"){
    $output = "<table class='table table-striped'>
                <thead class='bg-dark'>
                    <th>Sr.no</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Zip Code</th>
                </thead>";
    $sql = "SELECT cr.*,st.name AS user_state ,ci.name AS user_city FROM customer_register AS cr
            LEFT JOIN `state` AS st ON st.code = cr.states 
            LEFT JOIN `city` AS ci ON ci.id = cr.city
            WHERE cr.email LIKE '%{$value}%' OR cr.first_name LIKE '%{$value}%' OR cr.last_name LIKE '%{$value}%'";
            // echo $sql;exit;  
    $result = mysqli_query($con , $sql);
    if(mysqli_num_rows($result) > 0){
        while($res = mysqli_fetch_assoc($result)) {
            $output .= "<tr>
                            <td>{$sr_no}</td>
                            <td>{$res['first_name']}</td>
                            <td>{$res['last_name']}</td>
                            <td>{$res['contact_number']}</td>
                            <td>{$res['email']}</td>
                            <td>{$res['country']}</td>
                            <td>{$res['user_state']}</td>
                            <td>{$res['user_city']}</td>
                            <td>{$res['zip_code']}</td>
                        </tr>";
    $sr_no++; } 
    $output .= "</tbody>  </table>";
    echo $output; 
    }
    else{
        $output .= "<tr><td colspan='10'><h3 class='text-center'>Sorry No Record Found!</h3></td></tr> </tbody> </table>";
        echo $output;
 } }
 
 elseif($type == "mv_user"){
    $output = "<table class='table table-striped'>
                <thead class='bg-dark'>
                    <th>Sr.no</th>
                    <th>USDOT</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Contact Number</th>
                    <th>Fax Number</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Zip Code</th>
                </thead>";
    $sql = "SELECT cr.*,st.name AS user_state ,ci.name AS user_city FROM mover_register AS cr
            LEFT JOIN `state` AS st ON st.code = cr.states 
            LEFT JOIN `city` AS ci ON ci.id = cr.city
            WHERE cr.mover_email LIKE '%{$value}%' OR cr.usdot LIKE '%{$value}%' OR cr.company_name LIKE '%{$value}%'";
            // echo $sql;exit;  
    $result = mysqli_query($con , $sql);
    if(mysqli_num_rows($result) > 0){
        while($res = mysqli_fetch_assoc($result)) {
            $output .= "<tr>
                            <td>{$sr_no}</td>
                            <td>{$res['usdot']}</td>
                            <td>{$res['company_name']}</td>
                            <td>{$res['mover_email']}</td>
                            <td>{$res['company_website']}</td>
                            <td>{$res['contact_number']}</td>
                            <td>{$res['fax_number']}</td>
                            <td>{$res['country']}</td>
                            <td>{$res['user_state']}</td>
                            <td>{$res['user_city']}</td>
                            <td>{$res['zip_code']}</td>
                        </tr>";
    $sr_no++; } 
    $output .= "</tbody>  </table>";
    echo $output; 
    }
    else{
        $output .= "<tr><td colspan='10'><h3 class='text-center'>Sorry No Record Found!</h3></td></tr> </tbody> </table>";
        echo $output;
 
 } }?>

