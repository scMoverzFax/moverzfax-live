<?php include_once 'myheader.php'; ?>
<title>Contact Us</title>

<?php include_once 'mycaptcah.php' ?>

<script type="text/javascript">
    function refreshCaptcha() {
        img = document.getElementById("capt");
        img.src = "captcha.php?rand_number=" + Math.random();
    }
</script>

<!-- Mobile Specific Metas
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    * {
        font-family: sans-serif;
        box-sizing: border-box;
    }

    .b-container {
        overflow: hidden;
        height: fit-content;
        width: fit-content;
        position: relative;
        padding: 50px;
        max-width: 1440px;

    }

    .in-container {
        background-color: white;
        box-shadow: 0 0 10px 2px #eee;
        /* border-radius: 10px 10px; */
        border: 1px solid #eee;
        /* width: fit-content; */
        padding: 50px;
    }

    .bg-form {
        margin: 0;
        width: 100%;
        background-color: white;

    }

    .i-width {

        width: 100%;
    }

    .row .button-mf {
        font-size: 15px;
        color: #fff;
        background-color: #85CA63;
        border-radius: 5px 5px;
        width: 150px;
        border-color: none;
        transition: all .5s;
    }

    .row .button-mf:hover {
        background-color: #67bd3c;
        border-color: #55bd1a;
        color: #fff;
        border-radius: 10px;
        width: 200px;
        transition: all .5s;

    }

    textarea {
        height: 100px;
        font-family: cursive;
    }

    .bg-form p {

        padding: 0 5%;
    }

    .bg-form .row {
        padding: 0 5%;
    }

    .con-info {
        padding: 4% 4%;
        background-color: #e9ecef;
        word-wrap: break-word;

    }

    td,
    th {

        padding: 10px;
    }

    td {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        letter-spacing: 1px;
        font-family: sans-serif;

    }

    .row .button-mf {
        font-size: 15px;
        color: white;
        background-color: #85CA63;
        border-radius: 5px 5px;
        border-color: none;
    }

    /* Desktop-mobile approach --------------------------------------------------------------*/

    /* smaller than Desktop HD */
    @media (max-width: 1200px) {}

    /* smaller than desktop */
    @media (max-width: 1000px) {}

    /* smaller than tablet */
    @media (max-width: 750px) {}

    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 550px) {}

    /* smaller than mobile */
    @media (max-width: 400px) {}
</style>


<!-- Start of Document ----------------------------------------------->

<div class="b-container">
    <div class="container in-container slide-in-bottom">
        <div class="bg-form">
            <h2 class="text-center mb-5">Contact Us</h2>
            <p>If you have any questions or suggestions regarding our site services, please contact us through the given information below or you can send us your inquiries or questions directly by using our contact form.</p>
            <p class="mb-5">Please include your name, mailing address, email address, message subject and the content of your inquiry.</p>
            <hr>

            <div class="row">
                <div class="col-md-5">
                    <div class="con-info">
                        <p>CONTACT INFORMATION:</p>

                        <p>For technical issues and concerns: admin@moverzfax.com</p>

                        <p>For service inquiries or concerns: support@moverzfax.com</p>

                        <p>If you want to advertise with us: advertise@moverzfax.com</p>

                        <p>Customer support toll free: 866-828-9688</p>
                    </div>
                </div>

                <div class="form-group col-md-7">
                    <form action="cona.php" method="post">
                        <table>
                            <tr>
                                <td><label>Name<sup style="color: red">*</sup></label></td>
                                <td><input class="form-control" type="text" placeholder="Full Name" style="border:1px solid #e9ecef;" required></td>
                            </tr>
                            <tr>
                                <td><label>Email<sup style="color: red">*</sup></label></td>
                                <td><input class="form-control" type="email" name="ea" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@gmail.com" placeholder="xxxxx.example.com" required></td>
                            </tr>
                            <tr>
                                <td><label>Subject<sup style="color: red">*</sup></label></td>
                                <td><input type="text" class="form-control" name="sa" placeholder="Enter Subject" required></td>
                            </tr>
                            <tr>
                                <td style="width: 200px;"><label>Enter Your Message<sup style="color: red">*</sup></label></td>
                                <td><textarea class="form-control" style="resize: vertical;" type="text" name="wa" placeholder="Enter Your Message" required></textarea></td>
                            </tr>
                            <tr>

                                <td colspan="2"><input type="checkbox" name="" required> I agree to the <a href="t&c.php" target="_blank">terms of use</a></td>
                            </tr>

                            <tr>
                                <td><label>Captcha<sup style="color: red">*</sup></label></td>
                                <td>
                                    <style type="text/css">
                                        #answer {
                                            width: 50%;
                                            margin: 20px;
                                        }
                                    </style>
                                    <span id="answer">
                                        <?php
                                        echo $first_number . " " . $operator . " " . $second_number . " =";
                                        ?>
                                    </span>
                                    <style type="text/css">
                                        #user_answer {
                                            width: 50%;
                                            height: 30px;
                                            border: 1px solid #ccc;
                                        }
                                    </style>
                                    <input type="number" name="answer" id="user_answer">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" class="btn button-mf float-right" name="" value="Contact Us"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <hr>

        </div>

    </div>
</div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<br>
<br>
<?php include "footer.php" ?>