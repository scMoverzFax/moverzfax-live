<?php include 'myheader.php' ?>
<title>Registration</title>
<style>
    * {
        box-sizing: border-box;
    }

    .b-container {
        position: relative;
        overflow: hidden;
        height: fit-content;
        width: fit-content;
        padding: 50px;

    }

    .in-container {
        background-color: white;
        box-shadow: 0 0 10px 2px #eee;
        /* border-radius: 10px 10px; */
        border: 1px solid #eee;
        width: fit-content;
        padding: 50px;
    }

    .bg-form {
        width: 400px;
    }

    .bg-form h4 {
        padding-top: 30px;
    }

    .bg-form .row {
        margin-left: 0;
        margin-right: 0;
        padding: 0 10%;
    }

    .i-width {

        width: 100%;
    }

    .row .button-mf {
        font-size: 15px;
        color: white;
        padding: 0 5px;
        margin: 0 50px 10px 0;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.18);
        -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        background-color: #85CA63;
        border-color: none;
    }

    .row .button-mf:hover {
        background-color: #67bd3c;
        color: white;
        transition: all .5s;
    }

    .row .button-reset {
        font-size: 15px;
        color: white;

        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.18);
        -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        background-color: #FF3333;
        border-color: none;
    }

    .row .button-reset:hover {
        background-color: #FF0000;
        color: white;
        transition: all .5s;
    }

    textarea {
        height: 100px;
        font-family: cursive;
    }

    /* Desktop-mobile approach --------------------------------------------------------------*/

    /* smaller than Desktop HD */
    @media (max-width: 1200px) {}

    /* smaller than desktop */
    @media (max-width: 900px) {
        .bg-form {
            margin: 0 auto;
            width: 90%;
            background-color: #f6f6f6;
            border-radius: 10px 10px;
        }
    }

    /* smaller than tablet */
    @media (max-width: 660px) {}

    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 550px) {
        .bg-form {
            margin: 0 auto;
            width: 100%;
            background-color: #f6f6f6;
            border-radius: 10px 10px;
        }
    }

    /* smaller than mobile */
    @media (max-width: 400px) {}
</style>

<!-- Start of Document ----------------------------------------------->

<div class="b-container">
    <div class="in-container slide-in-bottom">
        <div class="bg-form">
            <h2 class="text-center mb-5">REGISTER</h2>
            <hr>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-group text-center">
                            <a href="mover_register.php" class="list-group-item list-group-item-action"><i class="fas fa-truck me-2"></i>Register as a <strong class="text-success">Mover</strong></a>
                            <a href="customer_register.php" class="list-group-item list-group-item-action"><i class="fas fa-user me-2"></i>Register as a <strong class="text-success">Customer</strong></a>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->



<br>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function myfun1() {
        var a = document.getElementById("pass").value;
        var b = document.getElementById("pas").value;
        if (a.length < 5) {
            document.getElementById("mess").innerHTML = "**Password Length Must Be greater than 5 digit**";
        } else if (a != b) {
            document.getElementById("mess").innerHTML = "**Password And Confirm password are Not Mathing**";
            return false;
        } else {
            document.getElementById("mess").innerHTML = "";
        }
    }
</script>
<?php include_once 'footer.php'; ?>