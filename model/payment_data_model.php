<?php 

require_once '../vendor/autoload.php'; // Make sure to require the Stripe PHP library
require_once '../stripe/secrets.php'; //secrets.php stored in cpanel file manager inside stripe folder

\Stripe\Stripe::setApiKey($stripeSecretKey);

session_start();
$checkout_session_id = $_SESSION['checkout_session_id'];
$checkout_session = \Stripe\Checkout\Session::retrieve($checkout_session_id);
$invoice_id = $checkout_session->invoice;
$invoice = \Stripe\Invoice::retrieve($invoice_id);

// Serialize the Invoice object to a JSON object
$invoice_json = json_encode($invoice->jsonSerialize(), JSON_PRETTY_PRINT);
// Print the Invoice JSON object to the screen
// echo '<pre>' . $invoice_json . '</pre>';


    session_start();
    // include 'demo4.php';
    if(isset($_SESSION["email"])){
		$user_id = $_SESSION["id"];
        $user_first_name = $_SESSION["first_name"];
        $user_last_name = $_SESSION["last_name"];
        $user_email = $_SESSION["email"];
    }else{
        $user_id = 0;
        $user_email = "email@email.com";
    }

    // $obj = json_decode($_GET["x"], true);

    include 'connection.php';
    $report = array();
    $sql1 = "SELECT usdot FROM mover_cart WHERE is_selected=1 AND user_id = '".$user_id."' ";  //query to select only the selected movers by usdot
    $result1 = $con->query($sql1);
                    if(mysqli_num_rows($result1) > 0){ 
                        while($res1 = mysqli_fetch_array($result1)){
                           array_push($report,$res1['usdot']);
                        }
                    }
    $report_one = isset($report[0])?$report[0]:0;
    $report_two = isset($report[1])?$report[1]:0;
    $report_three = isset($report[2])?$report[2]:0;
    $report_four = isset($report[3])?$report[3]:0;
    $report_five = isset($report[4])?$report[4]:0;

    $tr_id = $invoice->id;
    $tr_status = $invoice->status;
    $tr_currency_code = $invoice->currency;
    $tr_amount = $invoice->amount_paid / 100;
    $tr_email_address = $invoice->customer_email;
    
    $tr_merchant_id = $invoice->account_name;
    $tr_full_name = $invoice->customer_name;
    $tr_address_line_1 = $invoice->customer_address->line1;
    $tr_admin_area_1 = $invoice->customer_address->state;
    $tr_admin_area_2 = $invoice->customer_address->city;
    $tr_postal_code = $invoice->customer_address->postal_code;
    $tr_country_code = $invoice->customer_address->country;
    
    $tr_payer_id = $invoice->customer;
    
    $dateValue = $invoice->created;
    $tr_create_time = date('Y-m-d H:i:s', $dateValue);
    $updatedTimeValue = time();
    $tr_update_time = date('Y-m-d H:i:s', $updatedTimeValue);
    
    $sql = "INSERT INTO payment (
        user_id,
        tr_id,
        tr_status,
        tr_currency_code,
        tr_amount,
        tr_email_address,
        tr_merchant_id,
        tr_full_name,
        tr_address_line_1,
        tr_admin_area_1,
        tr_admin_area_2,
        tr_postal_code,
        tr_country_code,
        tr_payer_id,
        tr_create_time,
        tr_update_time,
        report_one,
        report_two,
        report_three,
        report_four,
        report_five
        )
     VALUES (
        '".$user_id."',
        '".$tr_id."',
        '".$tr_status."',
        '".$tr_currency_code."',
        '".$tr_amount."',
        '".$tr_email_address."',
        '".$tr_merchant_id."',
        '".$tr_full_name."',
        '".$tr_address_line_1."',
        '".$tr_admin_area_1."',
        '".$tr_admin_area_2."',
        ".$tr_postal_code.",
        '".$tr_country_code."',
        '".$tr_payer_id."',
        '".$tr_create_time."',
        '".$tr_update_time."',
        '".$report_one."',
        '".$report_two."',
        '".$report_three."',
        '".$report_four."',
        '".$report_five."'
     )";    

    // If the insert into payment table was successful, create the email to be sent
    if ($con->query($sql) === TRUE)
    {   
        
        $sql1 = "SELECT * FROM payment WHERE tr_id='".$tr_id."' AND user_id='".$user_id."'  ";
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
                <h2 style="font-weight: bold">Welcome To The MoverzFax Family.</h2>
                <p>Thank you for your order with MoverzFax!</p>
                <p>Your Transaction is Complete. Your Transaction Details are as follows</p>
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

        if(mail($to_mail, $subject, $body, $header)){
            // echo "Mail Sent";
            header('Location: ../home/order_report.php');
        }
        else{
            echo "Mail Failed To Send <br>";
            $lastError = error_get_last();
            if ($lastError) {
                echo "Error message: " . $lastError['message'];
            }
        }
        // header('Location: ../home/order_report.php');
    }
    else{
        echo "UnSuccessful"; 
    }
    
?>