<?php 
    session_start();
    // include 'demo4.php';
    // include 'admin_payment_app.php';
    if(isset($_SESSION["email"])){
		$user_id = $_SESSION["id"];
        $user_first_name = $_SESSION["first_name"];
        $user_last_name = $_SESSION["last_name"];
        $user_email = $_SESSION["email"];
        echo $user_email;
    }else{
        $user_id = 0;
        $user_email = "email@email.com";
    }

    $obj = json_decode($_GET["x"], true);

    include 'connection.php';
    // $report = array();
    // $sql1 = "SELECT usdot FROM mover_cart WHERE is_selected=1 AND user_id = '".$user_id."' ";  //query to select only the selected movers by usdot
    // $result1 = $con->query($sql1);
    //                 if(mysqli_num_rows($result1) > 0){ 
    //                     while($res1 = mysqli_fetch_array($result1)){
    //                        array_push($report,$res1['usdot']);
    //                     }
    //                 }
    $report_one = 0;//isset($report[0])?$report[0]:0;
    $report_two = 0;//isset($report[1])?$report[1]:0;
    $report_three = 0;//isset($report[2])?$report[2]:0;
    $report_four = 0;//isset($report[3])?$report[3]:0;
    $report_five = 0;//isset($report[4])?$report[4]:0;
    $tr_id = $obj['id'];
    $tr_status =$obj['status'];
    $tr_currency_code =$obj['purchase_units'][0]['amount']['currency_code'];
    $tr_amount =$obj['purchase_units'][0]['amount']['value'];
    $tr_email_address =$obj['purchase_units'][0]['payee']['email_address'];
    $tr_merchant_id =$obj['purchase_units'][0]['payee']['merchant_id'];
    $tr_full_name =$obj['purchase_units'][0]['shipping']['name']['full_name'];
    $tr_address_line_1 =$obj['purchase_units'][0]['shipping']['address']['address_line_1'];
    $tr_admin_area_1 =$obj['purchase_units'][0]['shipping']['address']['admin_area_1'];
    $tr_admin_area_2 =$obj['purchase_units'][0]['shipping']['address']['admin_area_2'];
    $tr_postal_code =$obj['purchase_units'][0]['shipping']['address']['postal_code'];
    $tr_country_code =$obj['purchase_units'][0]['shipping']['address']['country_code'];
    $tr_payer_id =$obj['payer']['payer_id'];
    
    //replace all char with spaces in the date value
    $dateValue = $obj['create_time'];
    $tr_create_time = preg_replace('/[A-Za-z]/', ' ', $dateValue);

    $updatedTimeValue = $obj['update_time'];
    $tr_update_time = preg_replace('/[A-Za-z]/', ' ', $updatedTimeValue);
    
    $sql = "INSERT INTO payment (user_id,tr_id,tr_status,tr_currency_code,tr_amount,tr_email_address,tr_merchant_id,tr_full_name,tr_address_line_1,tr_admin_area_1,tr_admin_area_2,tr_postal_code,tr_country_code,tr_payer_id,tr_create_time,tr_update_time,report_one,report_two,report_three,report_four,report_five)
     VALUES ('".$user_id."','".$tr_id."','".$tr_status."','".$tr_currency_code."','".$tr_amount."','".$tr_email_address."','".$tr_merchant_id."','".$tr_full_name."','".$tr_address_line_1."','".$tr_admin_area_1."','".$tr_admin_area_2."',".$tr_postal_code.",'".$tr_country_code."','".$tr_payer_id."','".$tr_create_time."','".$tr_update_time."','".$report_one."','".$report_two."','".$report_three."','".$report_four."','".$report_five."' )";    

    if ($con->query($sql) === TRUE)
    {   
        
        $sql1 = "SELECT * FROM payment WHERE tr_id='".$tr_id."' AND user_id='".$user_id."'  ";
        $result1 = $con->query($sql1);
        $res1 = mysqli_fetch_array($result1);

        $to_mail = $user_email;
        if(!empty($user_email)){
            $to_mail = $user_email;
            // rest of your code here
        } else {
            // handle the case where $user_email is null or empty
            $to_mail = "admin@moverzfax.com";
        }
        $subject = "Payment Successful";
        $body = '
        <html lang="en">
        <head>
            <title>Title</title>
            <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

                    td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                    }

                    tr:nth-child(even) {
                    background-color: #dddddd;
                }
            </style>
        </head>

        <body style="box-sizing: border-box;">
            <div style="box-sizing: border-box;border:2px solid green;border-radius: 20px;margin:10px;padding:10px;">
                <p>Dear '.$res1['tr_full_name'].',</p>
                <h2 style="font-weight: bold">Welcome To MoverzFax Family.</h2>
                <p>Thank you for your order with MoverzFax!</p>
                <p>Your Transaction is Complete. Your Transaction Details is as follows</p>
                <table style="max-width:400px;">
                    <tbody>
                        <tr>
                            <td>Transaction ID</td>
                            <th>'.$res1['tr_id'].'</th>
                        </tr>
                        <tr>
                            <td>Transaction Status</td>
                            <th>'.$res1['tr_status'].'</th>
                        </tr>
                        <tr>
                            <td>Currency Code</td>
                            <th>'.$res1['tr_currency_code'].'</th>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <th>$'.$res1['tr_amount'].'</th>
                        </tr>
                        <tr>
                            <td>Transaction Date And Time</td>
                            <th>'.$res1['tr_create_time'].'</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </body
        </html>';
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= "From: project.egift@gmail.com";

        if(mail($to_mail, $subject, $body, $header) && mail($customerEmail, $subject, $body, $header)){
            echo "Mail Sent";
        }
        else{
            echo "Mail Failed To Send";
            // Get last error
            $lastError = error_get_last();
            if ($lastError) {
                echo "Error message: " . $lastError['message'];
            }
        }

        header('Location: ../confirmation.php');
    }
    else{

        echo "UnSuccessfull";
    }
    
?>