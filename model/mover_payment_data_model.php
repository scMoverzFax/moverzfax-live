<?php 
    session_start();
    // include 'demo4.php';
    if(isset($_SESSION["email"])){
		$user_id = $_SESSION["id"];
        $usdot = $_SESSION["usdot"];
        $company_name = $_SESSION['company_name'];
        $user_email = $_SESSION["email"];
        $role = $_SESSION['catagory'];
        $states = $_SESSION['states'];
    }else{
        $user_id = 0;
        $user_email = "email@email.com";
    }

    $obj = json_decode($_GET["x"], true);
    $id = isset($_GET['id'])?$_GET['id'] : "0";
    // echo $id; die();
    // echo "<pre>"; print_r($obj); die();

    include 'connection.php';
    require 'smtp_mail_config.php';

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
    $tr_create_time =$obj['create_time'];
    $tr_update_time =$obj['update_time'];
    
    $sql = "INSERT INTO payment_mover (user_id ,tr_id,tr_status,tr_currency_code,tr_amount,tr_email_address,tr_merchant_id,tr_full_name,tr_address_line_1,tr_admin_area_1,tr_admin_area_2,tr_postal_code,tr_country_code,tr_payer_id,tr_create_time,tr_update_time)
    VALUES ('".$user_id."','".$tr_id."','".$tr_status."','".$tr_currency_code."','".$tr_amount."','".$tr_email_address."','".$tr_merchant_id."','".$tr_full_name."','".$tr_address_line_1."','".$tr_admin_area_1."','".$tr_admin_area_2."',".$tr_postal_code.",'".$tr_country_code."','".$tr_payer_id."','".$tr_create_time."','".$tr_update_time."' )";    
 
    if ($con->query($sql) === TRUE)
    {   
        
        $sql1 = "SELECT * FROM payment_mover WHERE tr_id ='".$tr_id."' AND user_id='".$user_id."'  ";
        $result1 = $con->query($sql1);
        $res1 = mysqli_fetch_array($result1);

        $to_mail = $user_email;
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

        $result = sendMailViaMailrelay($to_mail, $subject, $body);
        if($result){
            
        // if(mail($to_mail, $subject, $body, $headers)){
            echo "Mail Sent";
        }
        else{
            echo "Failed";
        }
        header("Location: ../model/lead_model.php?lead=generate&id=".$id."");
    }
    else{
        echo "UnnSUcessfull"; 
    }
    
?>