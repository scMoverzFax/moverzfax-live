<?php 

    require '../model/smtp_mail_config.php';

    $email = $_GET['email'];
    $name = $_GET['name'];

    $to_mail = $email;
    $subject = "Your MoverzFax information has been flagged for correction";

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
        </style>
    </head>
    <body style="box-sizing: border-box;">
        <div style="box-sizing: border-box;border:2px solid green;border-radius: 20px;margin:10px;padding:10px;">
            <p>Dear '.$name.',</p>
            <h2 style="font-weight: bold">Thank you for your information.</h2>
            <p>Upon review of the information you provided to MoverzFax, our admin has discovered some inaccuracies.</p>
            <p>Please visit the link correction page below and provide the most accurate information you can.</p>
            <a href="https://www.moverzfax.com/home/mover_edit_links.php">Correct My Information</a>
        </div>
    </body>
    </html>';

    // Use the function to send the email
    $result = sendMailViaMailrelay($to_mail, $subject, $body);

    if ($result) {
        echo "Mail Sent";
    } else {
        echo "Failed";
        echo $to_mail;
        echo $email;
    }

    header('Location: ../admin/admin_mv_approval.php');


//old approach

    // $email = $_GET['email'];
    // $name = $_GET['name'];

    //     $to_mail = $email;
    //     $subject = "Your MoverzFax information has been flagged for correction";
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
    //             }
    //         </style>
    //     </head>

    //     <body style="box-sizing: border-box;">
    //         <div style="box-sizing: border-box;border:2px solid green;border-radius: 20px;margin:10px;padding:10px;">
    //             <p>Dear '.$name.',</p>
    //             <h2 style="font-weight: bold">Thank you for your information.</h2>
    //             <p>Upon review of the information you provided to MoverzFax, our admin has discovered some inaccuracies.</p>
    //             <p>Please visit the link correction page below and provide the most accurate information you can.</p>
    //             <a href="https://www.moverzfax.com/home/mover_edit_links.php">Correct My Information</a>
    //         </div>
    //     </body
    //     </html>';
    //     $header = "MIME-Version: 1.0" . "\r\n";
    //     $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    //     $header .= "From: admin@moverzfax.com";

    //     if(mail($to_mail, $subject, $body, $header)){
    //         echo "Mail Sent";
    //     }
    //     else{
    //         echo "Failed";
    //         echo $to_mail;
    //         echo $email;
    //     }
    //     header('Location: ../admin/admin_mv_approval.php');
    
?>