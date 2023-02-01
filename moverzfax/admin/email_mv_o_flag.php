<?php 
    
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
                }
            </style>
        </head>

        <body style="box-sizing: border-box;">
            <div style="box-sizing: border-box;border:2px solid green;border-radius: 20px;margin:10px;padding:10px;">
                <p>Dear '.$res1['tr_full_name'].',</p>
                <h2 style="font-weight: bold">Thank you for joining MoverzFax.</h2>
                <p>Thank you for your order with MoverzFax!</p>
                <p>Your Transaction is Complete. Your Transaction Details is as follows</p>
            </div>
        </body
        </html>';
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= "From: project.egift@gmail.com";

        if(mail($to_mail, $subject, $body, $header)){
            echo "Mail Sent";
        }
        else{
            echo "Failed";
        }
        header('Location: ../admin_mv_approval.php');
    
?>