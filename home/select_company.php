<?php
include 'myheader.php';

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

    .b-search {
        position: relative;
        display: flex;
        /* justify-content: center;
        align-items: center; */
    }

    .b-search input, button {
        font-family: 'Poppins', sans-serif;
        letter-spacing: .8px;
    }

    .b-search .inner-form {
        display: -ms-flexbox;
        display: flex;
        width: 50vw;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
        box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        border-radius: 34px;
        overflow: hidden;
        max-width: 100%;
    }

    .b-search .inner-form .input-field {
        height: 55px;
    }

    .b-search .inner-form .input-field input {
        height: 100%;
        background: transparent;
        border: 0;
        display: block;
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #000;
    }

    .b-search form .inner-form .input-field input.placeholder {
        color: #222;
        font-size: 16px;
    }

    .b-search form .inner-form .input-field input:-moz-placeholder {
        color: #222;
        font-size: 16px;
    }

    .b-search form .inner-form .input-field input::-webkit-input-placeholder {
        color: #222;
        font-size: 16px;
    }

    .b-search form .inner-form .input-field input:hover,
    .b-search form .inner-form .input-field input:focus {
        box-shadow: none;
        outline: 0;
    }

    .b-search form .inner-form .input-field.first-wrap {
        -ms-flex-positive: 1;
        flex-grow: 1;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        background: rgba(217, 241, 227, .7);
    }

    .b-search form .inner-form .input-field.first-wrap input {
        -ms-flex-positive: 1;
        flex-grow: 5;
    }

    .b-search form .inner-form .input-field.first-wrap .svg-wrapper {
        min-width: 80px;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .b-search form .inner-form .input-field.first-wrap svg {
        width: 36px;
        height: 36px;
        fill: #222;
    }

    .b-search form .inner-form .input-field.second-wrap {
        min-width: 180px;
    }

    .b-search form .inner-form .input-field.second-wrap .btn-search {
        height: 100%;
        width: 100%;
        white-space: nowrap;
        color: #fff;
        border: 0;
        cursor: pointer;
        font-weight: 700;
        position: relative;
        z-index: 0;
        background: rgba(0, 173, 95, 0.7);
        transition: all .2s ease-out, color .2s ease-out;
    }

    .b-search form .inner-form .input-field.second-wrap .btn-search:hover {
        background: #009451;
    }

    .b-search form .inner-form .input-field.second-wrap .btn-search:focus {
        outline: 0;
        box-shadow: none;
    }

    .b-search form .info {
        font-size: 15px;
        color: #ccc;
        padding-left: 26px;
    }

    .in-container {
        background-color: white;
        box-shadow: 0 0 10px 2px #eee;
        /* border-radius: 10px 10px; */
        border: 1px solid #eee;
        /* width: fit-content; */
        padding: 50px;
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
    @media (max-width: 1000px) {
        .b-container {
            width: 100%;
        }
        .in-container {
            width: 100%;
        }
    }

    @media screen and (max-width: 992px) {

        .b-search form .inner-form .input-field {
            height: 50px;
        }
        .b-search form .inner-form .input-field input.placeholder {
            color: #222;
            font-size: 13px;
        }

        .b-search form .inner-form .input-field input.placeholder {
            color: #222;
            font-size: 13px;
        }

        .b-search form .inner-form .input-field input:-moz-placeholder {
            color: #222;
            font-size: 13px;
        }

        .b-search form .inner-form .input-field input::-webkit-input-placeholder {
            color: #222;
            font-size: 13px;
        }

        .b-search form .inner-form .input-field.second-wrap {
            min-width: 160px;
        }

    }

    @media screen and (max-width: 768px) {
        .b-search form .inner-form .input-field.first-wrap .svg-wrapper {
            min-width: 40px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0 10px;
        }

        .b-search form .inner-form .input-field.first-wrap svg {
            width: 26px;
            height: 26px;
            fill: #222;
        }

        .b-search form .inner-form .input-field.second-wrap {
            min-width: 100px;
        }

        .b-search form {
            width: 100%;
        }

        .b-search .inner-form {
            width: 100%;
        }

    }

    /* smaller than tablet */
    @media (max-width: 750px) {
        .search-n-resp {
            padding: 0;
            margin: 0;
            flex-direction: column;
            justify-content: start;
        }
        .search {
            width: 100%;
            padding: 0;
            margin: 0;
        }
        .search span {
            padding: 0;
            margin: 0;
        }
        .search-btn {
            width: 25%;
            margin-top: 10px;
        }
        .search-btn-contain {
            width: 100%;
            /* border: 1px solid black; */
        }
        .resp {
            padding: 0;
            margin: 0;
        }
        .mover_table {
            padding: 0;
            margin: 0;
        }
    }

    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 550px) {
        .in-container {
            padding: 10px;
        }
        .b-search input, button{
            letter-spacing: 0px;
        }
    }

    /* smaller than mobile */
    @media (max-width: 400px) {
        .b-search form .inner-form .input-field.second-wrap {
            min-width: 80px;
        }
    }

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

    /* .contain-search {
        border: 1px solid #000000;
    }
    .contain-input {
        border: 1px solid #FF0000;
        display: flex;
        flex-wrap: wrap;
    }
    #usdot-search {
        border: 1px solid #808080;
        min-width: 40px;
    }
    .contain-result {
        border: 1px solid #0000FF;
    } */

    .contain-search {
        /* border: 1px solid #000000; */
        display: flex;
        flex-direction: column;
        gap: 1em;
    }

    .contain-input {
        /* border: 1px solid #FF0000; */
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 0.5em;
        /* align-items: center; */
    }

    .contain-result {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    #usdot-search {
        border: 1px solid #808080;
        width: 200px !important;
    }

    /* Responsive layout for smaller screens */
    @media (max-width: 600px) {
        .contain-input {
            flex-direction: column;
            /* align-items: center; */
        }
    }


</style>
<?php $usdot = isset($_GET["usdot"]) ? $_GET["usdot"] : NULL; ?>
<?php $status = isset($_GET["status"]) ? $_GET["status"] : NULL; ?>
<div class="b-container">
    <div class="container in-container slide-in-bottom">

        <div class="d-flex flex-column gap-2">
                    
            <!-- Page Title and Instructions -->
            <div>
                <h2 class="text-center">MoverzFax Reputation Data Reports</h2>
                <?php if (!defined('LOGIN')) { ?>
                    <p class="text-center">If you are already a Moverzfax member, please <a href="signin.php">Login</a>.</p>
                <?php } ?>
            </div>

            <p style="font-size:17px;">
                1. Search a mover by their USDOT.
            </p>

            <!-- Search USDOT -->
            <div class="b-search mb-2">
                <form action="../model/select_operation.php" name="usdot" method="post">

                        <!-- <input type="hidden" name="_token" value="SD49uC9YMu0Jcm972BpNLVnuT4gcNjI0pZ3HQBk4"> -->
                        <div class="inner-form text-center">

                            <div class="input-field first-wrap">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                    </svg>
                                </div>
                                <input id="search" name="usdot" type="text" placeholder="Enter USDOT Number" required>
                                <input name="function" type="hidden" value="search">
                            </div>

                            <div class="input-field second-wrap">
                                <button class="btn-search" type="submit" required>SEARCH</button>
                            </div>

                        </div>

                </form>
            </div>

            <!-- Result of Search Message -->
            <div class="contain-result">

                <div class="spinner-border text-success" id="cart_spinner" role="status" style="display:none;">
                    <span class="visually-hidden">Loading...</span>
                </div>

                <div class="d-flex">
                    <span class="me-2" id="cart_label1"><?php echo $usdot; ?></span>
                    <span for="" id="cart_label2">
                        <?php 
                            if ($status == "as") {
                                echo "was added successfully.";
                            } elseif ($status == "nr") {
                                echo "is not registered with MoverzFax.";
                            } elseif ($status == "ae") {
                                echo "already exist.";
                            } elseif ($status == "rf") {
                                echo "Request Failed.";
                            } else {
                                echo " "; //edge case
                            }
                        ?>
                    </span>
                </div>

            </div>

            <!-- Display only when there is something in the table -->
            <div id="results-table" class="border border-secondary">

                <p style="font-size:17px;">
                    2. Use the table to create a package of up to five movers.
                </p>
                <span style="font-size:12px;">
                    Purchase your first report for $10 and receive the second one free of charge. 
                    Subsequent reports are priced as follows: $3 for the third, $2 for the fourth, 
                    and a fantastic deal of $1 for the fifth.
                </span>

                <div class="mover_table">
                    <table class="table table-striped table-hover ">
                        <thead class="sticky-top thead-dark">
                            <tr>
                                <th scope="col">Add</th>
                                <th scope="col">Company Name </th>
                                <th scope="col">USDOT</th>
                                <th scope="col" class="d-none d-md-table-cell">Company URL</th>
                                <th scope="col" class="d-none d-md-table-cell">Company State</th>
                                <th scope="col" class="d-none d-md-table-cell">Company City</th>
                                <th scope="col" class="d-none d-md-table-cell">Zip Code</th>
                                <th scope="col" class="d-none d-md-table-cell">Phone Number</th>
                                <th scope="col" class="d-none d-md-table-cell">Contact Person</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_cart"></tbody>
                    </table>
                </div>

                <span Class="text-center text-danger"></span>
                <div class="text-center">
                    <span style="color:red;font-size:17px;" id="not_valid"></span>
                </div>

                <p style="font-size:17px;">
                    3. Proceed to confirmation page.
                </p>
                
                <div class="border border-secondary" id="results-table">
                    <a href="payment_app.php" id="proceed" class="btn btn-warning" onclick="proceed();">Proceed</a>
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
                document.getElementById('results-table').style.display = "block";
                document.getElementById('table_cart').innerHTML = result;
                // alert("Table Updated");
                document.getElementById('cart_spinner').style.display = "none";
                // $('#table_cart').html(result);
                if (result === "<tr><td colspan='10' align='center'>No companies added yet..</td></tr>") {
                    document.getElementById('results-table').style.display = "none";
                    console.log("running true");

                }
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
            document.getElementById('not_valid').innerHTML = "Please select at least one company before proceeding";
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