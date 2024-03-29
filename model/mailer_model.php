<?php 
session_start();
if(isset($_SESSION["email"])){
    $user_id = $_SESSION["id"];
    $user_first_name = $_SESSION["first_name"];
    $user_last_name = $_SESSION["last_name"];
    $user_email = $_SESSION["email"];
    define("LOGIN" , "Login true");
}else{
    $user_id = NULL;
    $user_email = "email@email.com";
}

include 'connection.php';
require 'smtp_mail_config.php';
$sql = "SELECT * FROM payment WHERE user_id='".$user_id."'";
$result = $con->query($sql);
$res = mysqli_fetch_array($result);

$to_mail = "project.egift@gmail.com";
$subject = "Payment Successful";
$body = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <title>Mail Template</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            font-size: 14px;

        }

        .container {
            background-color: #f3f3f3;
            width: 100%;
            min-width: 650px;
            display: flex;
            justify-content: center;
        }

        .wrapper {
            margin: 15px;
            display: flex;
            flex-direction: column;
            width: 650px;
            min-width: 650px;
            min-height: 500px;
            border: 1px green solid;
            border-radius: 15px;
            overflow: hidden;
        }

        .header {
            position: relative;
            background-color: #efe;
            justify-self: flex-start;
            height: 20%;
            padding: 10px;

            display: flex;
        }

        .header .logo {
            position: relative;
            left: 0;
            height: 100%;
            width: 250px;
            margin: 0 50px;
            background-color: white;
            /* border: green 1px solid; */
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .header .logo img {
            height: 100%;
            width: 100%;
            padding: 10px;
        }

        .header .date_time {
            position: absolute;
            right: 10px;
        }

        .main {
            background-color: #fff;
            flex-grow: 1;
            padding: 10px 30px;
            background: #ECE9E6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #FFFFFF, #ECE9E6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #FFFFFF, #ECE9E6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .main table#tr_table {
            margin: 10px auto;
            padding: 30px 30px;
            width: 550px;
            border-radius: 15px;
            background-color: #fefefe;
        }

        .main table#tr_table td,
        .main table#tr_table th {
            border-top: 1px solid #ccc;
            line-height: 30px;
        }

        .main table#tr_table .tr_label {
            width: 230px;
        }

        .main table#or_table {
            margin: 10px auto;
            padding: 30px 30px;
            width: 550px;
            border-radius: 15px;
            background-color: #fefefe;
        }

        .main table#or_table .or_label {
            width: 120px;
        }

        .main table#or_table td,
        .main table#or_table th {
            border-top: 1px solid #ccc;
            line-height: 30px;
        }

        .main table#or_table .cost {
            font-weight: bold;
        }

        .main table th {
            text-align: left;
        }

        .footer {
            background-color: #555;
            justify-self: flex-end;
            height: 15%;
            padding: 10px;
            color: whitesmoke;
            text-decoration: none;
            background: #56ab2f;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #a8e063, #56ab2f);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #a8e063, #56ab2f);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .footer a {
            margin-left: 20px;
            color: whitesmoke;
            text-decoration: none;

        }

        @media screen and (max-width: 480px) {
            * {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="header">
                <div class="logo"><img src="https://www.moverzfax.com/img/logo2023.jpeg" alt="MoverZFax"></div>
                <div class="date_time">Jan 19, 2022</div>
            </div>
            <div class="main">
                <p>Dear John T.,</p>
                <h2 style="font-weight: bold;color:#56ab2f;font-size: 1.5em;">Welcome To MoverZFax Family.</h2>
                <p>Thank you for your order with MoverZFax!</p>
                <p>Your Transaction is Complete. Your Transaction Details is as follows : </p>

                <table id="tr_table">
                    <tbody>
                        <tr>
                            <td class="tr_label">Transaction ID</td>
                            <td>:</td>
                            <th>ASDA1212124524</th>
                        </tr>
                        <tr>
                            <td>Transaction Status</td>
                            <td>:</td>
                            <th>Successful</th>
                        </tr>
                        <tr>
                            <td>Currency Code</td>
                            <td>:</td>
                            <th>USD</th>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td>:</td>
                            <th>$50</th>
                        </tr>
                        <tr>
                            <td>Transaction Date And Time</td>
                            <td>:</td>
                            <th>Firday, 14-JAN- 2022, 02:00 PM</th>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <p>Oreder Summary</p>
                <table id="or_table">
                    <tbody>
                        <tr>
                            <td class="or_label">Orader ID</td>
                            <td>:</td>
                            <th>OR000000FHTU</th>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Company 1</td>
                            <td>:</td>
                            <th>Reliance Jio</th>
                            <td class="cost">$10</td>
                        </tr>
                        <tr>
                            <td>Company 2</td>
                            <td>:</td>
                            <th>Wipro</th>
                            <td class="cost">$0</td>
                        </tr>
                        <tr>
                            <td>Company 3</td>
                            <td>:</td>
                            <th>TCS</th>
                            <td class="cost">$5</td>
                        </tr>
                        <tr>
                            <td>Company 4</td>
                            <td>:</td>
                            <th>Infosys</th>
                            <td class="cost">$5</td>
                        </tr>
                        <tr>
                            <td>Company 5</td>
                            <td>:</td>
                            <th>Acceture</th>
                            <td class="cost">$5</td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <p>Please call on 180XXXXXX161 or drop a mail on support@moverzfax.com to report if this transaction
                        was not authorized by you.</p>
                    </p>
                    <p> Warm Regards,</p>
                    <p>Team MoverZFax</p>
                </div>
            </div>
            <div class="footer"><label for="">Go to our Site :</label><a href="#">MoverzFax.com</a></div>
        </div>
    </div>
</body>

</html>';
// $header = "MIME-Version: 1.0" . "\r\n";
// $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $header .= "From: project.egift@gmail.com";

$headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
$headers .= "From: project.egift@gmail.com \r\n"; // Sender Email
// $headers .= "Content-Type: multipart/mixed"; // Defining Content-Type
$headers .= "Content-type:text/html;charset=UTF-8"; // Defining Content-Type
// $headers .= "boundary = md5("random") \r\n";

$result = sendMailViaMailrelay($to_mail, $subject, $body);
if($result){
    
// if(mail($to_mail, $subject, $body, $headers)){
    echo "Mail Sent";
}
else{
    echo "Failed";
}
?>

