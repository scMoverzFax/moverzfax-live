<?php
include 'myheader.php';
if (!defined('LOGIN')) {
// Start a session
session_start();

// Function to generate a random ten-digit decimal number
function generateRandomTenDigitDecimal() {
    $decimalPart = mt_rand(1000000000, 9999999999); // Generate random decimal part (10 digits)
    $randomDecimal = "0." . $decimalPart; // Combine "0." with the decimal part
    return $randomDecimal;
}

// Check if the session id is already set
if (!isset($_SESSION["id"])) {
    // If not set, assign a random ten-digit decimal number to $_SESSION["id"]
    $_SESSION["id"] = generateRandomTenDigitDecimal();
}
// Debug: Print the generated number
// echo "Guest ID: " . $_SESSION["id"];
}
?>
<title>USDOT Search</title>
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
        /* width: 1100px; */
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

    .row .button-mf-cancel {
        font-size: 15px;
        color: #fff;
        border-radius: 5px 5px;
        width: 150px;
        background-color: #dc3545;
        border-color: #dc3545;
        transition: all .5s;
    }

    .row .button-mf-cancel:hover {
        color: #fff;
        border-radius: 10px;
        width: 200px;
        transition: all .5s;
        background-color: #c82333;
        border-color: #bd2130;

    }

    .card {
        border-left: #85CA63 5px solid;
        border-right: #85CA63 5px solid;
    }

    .card .fas {
        color: #67bd3c;
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

    .container-fluid {
        height: fit-content;
    }

    .cart-list {
        height: fit-content;

    }

    .payment-mode {
        height: fit-content;

    }

    .mover_table {
        max-height: 50vh;
        overflow-y: auto;
    }
</style>
<?php $usdot = isset($_GET["usdot"]) ? $_GET["usdot"] : NULL; ?>
<?php $status = isset($_GET["status"]) ? $_GET["status"] : NULL; ?>


<div class="b-container">
    <div class="container in-container slide-in-bottom">
        <div class="bg-form form-group">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Cart</h2>
                    <p class="text-center"><?php echo "Guest ID: " . $_SESSION["id"]; ?></p>
                    <div class="text-center text-danger">
                        <span style="font-size:17px;">Important Notice : You can buy up to 5 reports in one transaction to take advantage of discounts offered.
                            First report is $10 and you get second Free.<br> Third report is $3, fourth report is $2 and fifth report is $1.</span>
                    </div>

                    <form action="../model/select_operation.php" name="usdot" class="m-3" method="post">
                        <div class="row">
                            <div class="d-flex col-md-12 form-group">
                                <div class="col-md-4 search">
                                    <span class="col-md-5">Add Company :</span>
                                    <input type="text" name="usdot" class="col-md-7 form-control form-control-sm" placeholder="Enter #USDOT number" required>
                                    <input name="function" type="hidden" value="search">
                                </div>
                                <div class="col-md-3 pl-0">
                                    <input type="submit" class="col-md-3 btn btn-success btn-sm" value="Go">
                                </div>
                                <div class="col-md-5" style="height:40px;">
                                    <div class="spinner-border text-success" id="cart_spinner" role="status" style="display:none;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="d-flex">
                                        <span class="me-2" id="cart_label1"><?php echo $usdot; ?></span>
                                        <span for="" id="cart_label2"><?php 
                                                                        if ($status == "as") {
                                                                            echo "is Added Successfully.";
                                                                        } elseif ($status == "nr") {
                                                                            echo "is not registered with MoverzFax.";
                                                                        } elseif ($status == "ae") {
                                                                            echo "Already Exist.";
                                                                        } elseif ($status == "rf") {
                                                                            echo "Request Failed.";
                                                                        } else {
                                                                            echo " "; //edge case
                                                                        }
                                                                        ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <span Class="text-center text-danger"></span>
                    <div class="text-center">
                        <span style="color:red;font-size:17px;" id="not_valid"></span>
                    </div>
                    <div class="col-md-12 mover_table mb-5">
                        <table class="table table-striped table-hover ">
                            <thead class="sticky-top thead-dark">
                                <tr>
                                    <th scope="col">Add</th>
                                    <th scope="col">Company Name </th>
                                    <th scope="col">USDOT</th>
                                    <th scope="col">Company URL</th>
                                    <th scope="col">Company State</th>
                                    <th scope="col">Company City</th>
                                    <th scope="col">Zip Code</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Contact Person</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody id="table_cart"></tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="payment_app.php" id="proceed" class="btn btn-warning" onclick="proceed();">Proceed To Pay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function fetch_cart() {
        $.ajax({
            type: "POST",
            url: "../model/select_company_model.php",
            success: function(result) {
                console.log(result);
                document.getElementById('table_cart').innerHTML = result;
                // alert("Table Updated");
                document.getElementById('cart_spinner').style.display = "none";
                // $('#table_cart').html(result);
            }
        });
    }
    fetch_cart();

    function usdot_checkbox() {
        var action = document.querySelectorAll('input[type="checkbox"]');
        var newvar = 0;
        var count;
        for (count = 0; count < action.length; count++) {
            if (action[count].checked == true) {
                newvar++;
            }
        }
        if (newvar <= 5 && newvar > 0) {
            document.getElementById('proceed').setAttribute("style", "pointer-events: auto;");
            document.getElementById('not_valid').innerHTML = " ";

        }

        if (newvar >= 6) {
            document.getElementById('not_valid').innerHTML = "Please Select Only Five Companies";
            document.getElementById('proceed').setAttribute("style", "pointer-events: none;");
        }

        if (newvar == 0) {
            document.getElementById('proceed').setAttribute("style", "pointer-events: none;");
            document.getElementById('not_valid').innerHTML = "Please select at least one compnay";
            return false;
        }

    }

    function update_checkbox(id) {
        document.getElementById('cart_spinner').style.display = "block";

        var a = document.getElementById(id);
        if (a.checked == true) {
            $.ajax({
                type: "POST",
                url: "../model/select_operation.php",
                data: {
                    function: "select",
                    select: "yes",
                    id: id
                },
                success: function(result) {}
            });
        } else if (a.checked == false) {
            $.ajax({
                type: "POST",
                url: "../model/select_operation.php",
                data: {
                    function: "select",
                    select: "no",
                    id: id
                },
                success: function(result) {} 
            });
        }
        fetch_cart();
        usdot_checkbox();
    }
    setTimeout(usdot_checkbox, 500);
</script>
<?php include 'footer.php'; ?>