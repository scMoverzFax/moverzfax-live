<?php
//This file is modified from the select_operation file

include 'admin_header.php';
//defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
?>
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

<!--conditional rendering for if the user is not logged in--> 
<?php if (!defined('LOGIN')) { echo '<h3 class="text-center my-5 py-5 ">Please Login First...</h3>';} ?>

<div class="b-container" <?php if (!defined('LOGIN')) { echo 'style="display:none"';} ?>>
    <div class="container in-container slide-in-bottom">
        <div class="bg-form form-group">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Produce Reports</h2>
                    <form action="../admin/admin_model/admin_select_operation.php" name="usdot" class="m-3" method="post">
                        <div class="row">
                            <div class="d-flex col-md-12 form-group">
                                <div class="col-md-4 search">
                                    <span class="col-md-5">Add Company :</span>
                                    <input type="text" name="usdot" class="col-md-7 form-control form-control-sm" placeholder="Enter #USDOT" required>
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
                                    <th scope="col">USDOT</th>
                                    <th scope="col">Company Name </th>
                                    <th scope="col">Company State</th>
                                    <th scope="col">Company City</th>
                                    <th scope="col">Download Report</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="table_cart"></tbody>
                        </table>
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
            url: "../admin/admin_model/admin_select_company_model.php",
            success: function(result) {
                console.log(result);
                document.getElementById('table_cart').innerHTML = result;
                document.getElementById('cart_spinner').style.display = "none";
                // $('#table_cart').html(result);
            }
        });
    }
    fetch_cart();
</script>
<?php include '../home/footer.php'; ?>