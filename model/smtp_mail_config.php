<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

// This function no longer uses MailRelay, but the function name will stay the same
function sendMailViaMailrelay($to, $subject, $message, $isHTML = true) {
    $mail = new PHPMailer(true);

    try {
        // Set up your SMTP settings here
        $mail->isSMTP();
        // Old MailRelay credentials
        // $mail->Host       = 'smtp1.s.ipzmarketing.com';  // Replace with your Mailrelay SMTP details
        // $mail->SMTPAuth   = true;
        // $mail->Username   = 'xjbmllevnemd';              // Replace with your username
        // $mail->Password   = 'JD_LL8rgILI';              // Replace with your password
        // $mail->SMTPSecure = 'tls';                   // Or 'ssl', based on your Mailrelay configuration
        // $mail->Port       = 587;                     // Or 465 for 'ssl'

        // Switched to Google SMTP
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'moverzfax@gmail.com';   // Replace with your Gmail email
        $mail->Password   = 'consumerprotect2023@#';         // Replace with your Gmail password
        $mail->SMTPSecure = 'tls';                   // Use 'ssl' if you choose Port 465
        $mail->Port       = 587;                     // Use 465 for 'ssl'

        $mail->setFrom('admin@moverzfax.com');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        return true;
    } catch (Exception $e) {
        // Handle the error or log it, you can even return the error message if you want more detail
        echo $e;
        return false;
    }
}
