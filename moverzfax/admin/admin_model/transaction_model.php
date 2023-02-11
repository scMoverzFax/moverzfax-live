
<?php
 include '../../model/connection.php';
 $type = isset($_REQUEST['type'])?$_REQUEST['type'] : NULL;
 $value = isset($_REQUEST['value'])?$_REQUEST['value'] : NULL;
 $sr_no = 1;
 $output = '<table class="table table-striped">
                <thead class="bg-dark">
                    <th>Sr.no</th>
                    <th>Full Name</th>a
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Currency Code</th>
                    <th>Country Code</th>
                    <th>Payer Id</th>
                    <th>Date & Time</th>
                </thead>
            <tbody> ';
 if($type == "customer"){
    $sql = "SELECT * FROM payment WHERE tr_id LIKE '%".$value."%' OR tr_email_address LIKE '%".$value."%' ORDER BY id";
    $result = mysqli_query($con , $sql);
    if(mysqli_num_rows($result) > 0){
        while($res = mysqli_fetch_assoc($result)) {
            $output .= "<tr>
                            <td> {$sr_no} </td>
                            <td> {$res['tr_full_name']} </td>
                            <td> {$res['tr_id']} </td>
                            <td> {$res['tr_amount']} </td>
                            <td> {$res['tr_email_address']} </td>
                            <td> {$res['tr_status']} </td>
                            <td> {$res['tr_currency_code']} </td>
                            <td> {$res['tr_country_code']} </td>
                            <td> {$res['tr_payer_id']} </td>
                            <td> {$res['tr_create_time']} </td>
                        </tr>";
    $sr_no++; } 
    $output .= "</tbody>  </table>";
    echo $output; 
    }
    else{
        $output .= "<tr><td colspan='10'><h3 class='text-center'>Sorry No Record Found!</h3></td></tr> </tbody> </table>";
        echo $output;
 } }
 
 elseif($type == "mover"){
    $sql = "SELECT * FROM payment_mover WHERE tr_id LIKE '%".$value."%' OR tr_email_address LIKE '%".$value."%' ORDER BY id";
    $result = mysqli_query($con , $sql);
    if(mysqli_num_rows($result) > 0){
        while($res = mysqli_fetch_assoc($result)) {
            $output .= "<tr>
                            <td> {$sr_no} </td>
                            <td> {$res['tr_full_name']} </td>
                            <td> {$res['tr_id']} </td>
                            <td> {$res['tr_amount']} </td>
                            <td> {$res['tr_email_address']} </td>
                            <td> {$res['tr_status']} </td>
                            <td> {$res['tr_currency_code']} </td>
                            <td> {$res['tr_country_code']} </td>
                            <td> {$res['tr_payer_id']} </td>
                            <td> {$res['tr_create_time']} </td>
                        </tr>";
    $sr_no++; } 
    $output .= "</tbody>  </table>";
    echo $output; 
    }
    else{
        $output .= "<tr><td colspan='10'><h3 class='text-center'>Sorry No Record Found!</h3></td></tr> </tbody> </table>";
        echo $output;
 } }?>

