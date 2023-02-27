<?php 

require_once '../vendor/autoload.php'; // Make sure to require the Stripe PHP library
require_once '../stripe/secrets.php'; //secrets.php stored in cpanel file manager inside stripe folder

\Stripe\Stripe::setApiKey($stripeSecretKey);

// Retrieve the Checkout Session ID from the session variable
session_start();
$checkout_session_id = $_SESSION['checkout_session_id'];

// Retrieve the Payment Intent ID from the Checkout Session object
$checkout_session = \Stripe\Checkout\Session::retrieve($checkout_session_id);
$payment_intent_id = $checkout_session->payment_intent;

// // Retrieve the Payment Intent object
// $payment_intent = \Stripe\PaymentIntent::retrieve($payment_intent_id);

// // Format the Payment Intent object and display it on the screen
// echo '<pre>' . json_encode($payment_intent, JSON_PRETTY_PRINT) . '</pre>';

// Retrieve the Invoice object associated with the Checkout Session
$invoice = $checkout_session->invoice;

// Print the Invoice object to the screen
echo '<pre>' . json_encode($invoice, JSON_PRETTY_PRINT) . '</pre>';


    // session_start();
    // // include 'demo4.php';
    // if(isset($_SESSION["email"])){
	// 	$user_id = $_SESSION["id"];
    //     $user_first_name = $_SESSION["first_name"];
    //     $user_last_name = $_SESSION["last_name"];
    //     $user_email = $_SESSION["email"];
    // }else{
    //     $user_id = 0;
    //     $user_email = "email@email.com";
    // }

    // $obj = json_decode($_GET["x"], true);

    // include 'connection.php';
    // $report = array();
    // $sql1 = "SELECT usdot FROM mover_cart WHERE is_selected=1 AND user_id = '".$user_id."' ";  //query to select only the selected movers by usdot
    // $result1 = $con->query($sql1);
    //                 if(mysqli_num_rows($result1) > 0){ 
    //                     while($res1 = mysqli_fetch_array($result1)){
    //                        array_push($report,$res1['usdot']);
    //                     }
    //                 }
    // $report_one = isset($report[0])?$report[0]:0;
    // $report_two = isset($report[1])?$report[1]:0;
    // $report_three = isset($report[2])?$report[2]:0;
    // $report_four = isset($report[3])?$report[3]:0;
    // $report_five = isset($report[4])?$report[4]:0;

    // $tr_id = $payment_intent->id;
    // $tr_status = $payment_intent->status;
    // $tr_currency_code = $payment_intent->currency;
    // $tr_amount = $payment_intent->amount / 100;
    // $tr_email_address = $payment_intent->receipt_email;
    
    // $tr_merchant_id = $obj['purchase_units'][0]['payee']['merchant_id'];
    // $tr_full_name = $obj['purchase_units'][0]['shipping']['name']['full_name'];
    // $tr_address_line_1 = $obj['purchase_units'][0]['shipping']['address']['address_line_1'];
    // $tr_admin_area_1 = $obj['purchase_units'][0]['shipping']['address']['admin_area_1'];
    // $tr_admin_area_2 = $obj['purchase_units'][0]['shipping']['address']['admin_area_2'];
    // $tr_postal_code = $obj['purchase_units'][0]['shipping']['address']['postal_code'];
    // $tr_country_code = $obj['purchase_units'][0]['shipping']['address']['country_code'];
    
    // $tr_payer_id = $payment_intent->customer;
    
    // $dateValue = $payment_intent->created;
    // $tr_create_time = date('Y-m-d H:i:s', $dateValue);
    // $updatedTimeValue = time();
    // $tr_update_time = date('Y-m-d H:i:s', $updatedTimeValue);
    
    // $sql = "INSERT INTO payment (
    //     user_id,
    //     tr_id,
    //     tr_status,
    //     tr_currency_code,
    //     tr_amount,
    //     tr_email_address,
    //     tr_merchant_id,
    //     tr_full_name,
    //     tr_address_line_1,
    //     tr_admin_area_1,
    //     tr_admin_area_2,
    //     tr_postal_code,
    //     tr_country_code,
    //     tr_payer_id,
    //     tr_create_time,
    //     tr_update_time,
    //     report_one,
    //     report_two,
    //     report_three,
    //     report_four,
    //     report_five
    //     )
    //  VALUES (
    //     '".$user_id."',
    //     '".$tr_id."',
    //     '".$tr_status."',
    //     '".$tr_currency_code."',
    //     '".$tr_amount."',
    //     '".$tr_email_address."',
    //     '".$tr_merchant_id."',
    //     '".$tr_full_name."',
    //     '".$tr_address_line_1."',
    //     '".$tr_admin_area_1."',
    //     '".$tr_admin_area_2."',
    //     ".$tr_postal_code.",
    //     '".$tr_country_code."',
    //     '".$tr_payer_id."',
    //     '".$tr_create_time."',
    //     '".$tr_update_time."',
    //     '".$report_one."',
    //     '".$report_two."',
    //     '".$report_three."',
    //     '".$report_four."',
    //     '".$report_five."'
    //  )";    

    // // If the insert into payment table was successful, create the email to be sent
    // if ($con->query($sql) === TRUE)
    // {   
        
    //     $sql1 = "SELECT * FROM payment WHERE tr_id='".$tr_id."' AND user_id='".$user_id."'  ";
    //     $result1 = $con->query($sql1);
    //     $res1 = mysqli_fetch_array($result1);

    //     $to_mail = $user_email;
    //     $subject = "Payment Successful";
    //     $body = '
    //     <html lang="en">
    //     <head>
    //         <title>Title</title>
    //         <style>
    //             table {
    //                 font-family: arial, sans-serif;
    //                 border-collapse: collapse;
    //                 width: 100%;
    //                 }

    //                 td, th {
    //                 border: 1px solid #dddddd;
    //                 text-align: left;
    //                 padding: 8px;
    //                 }

    //                 tr:nth-child(even) {
    //                 background-color: #dddddd;
    //             }
    //         </style>
    //     </head>

    //     <body style="box-sizing: border-box;">
    //         <div style="box-sizing: border-box;border:2px solid green;border-radius: 20px;margin:10px;padding:10px;">
    //             <p>Dear '.$res1['tr_full_name'].',</p>
    //             <h2 style="font-weight: bold">Welcome To The MoverzFax Family.</h2>
    //             <p>Thank you for your order with MoverzFax!</p>
    //             <p>Your Transaction is Complete. Your Transaction Details are as follows</p>
    //             <table style="max-width:400px;">
    //                 <tbody>
    //                     <tr>
    //                         <td>Transaction ID</td>
    //                         <th>'.$res1['tr_id'].'</th>
    //                     </tr>
    //                     <tr>
    //                         <td>Transaction Status</td>
    //                         <th>'.$res1['tr_status'].'</th>
    //                     </tr>
    //                     <tr>
    //                         <td>Currency Code</td>
    //                         <th>'.$res1['tr_currency_code'].'</th>
    //                     </tr>
    //                     <tr>
    //                         <td>Amount</td>
    //                         <th>$'.$res1['tr_amount'].'</th>
    //                     </tr>
    //                     <tr>
    //                         <td>Transaction Date And Time</td>
    //                         <th>'.$res1['tr_create_time'].'</th>
    //                     </tr>
    //                 </tbody>
    //             </table>
    //         </div>
    //     </body
    //     </html>';
    //     $header = "MIME-Version: 1.0" . "\r\n";
    //     $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    //     $header .= "From: project.egift@gmail.com";

    //     if(mail($to_mail, $subject, $body, $header)){
    //         // echo "Mail Sent";
    //         header('Location: ../home/order_report.php');
    //     }
    //     else{
    //         echo "Mail Failed To Send <br>";
    //         $lastError = error_get_last();
    //         if ($lastError) {
    //             echo "Error message: " . $lastError['message'];
    //         }
    //     }
    //     // header('Location: ../home/order_report.php');
    // }
    // else{
    //     echo "UnSuccessful"; 
    // }
    
?>