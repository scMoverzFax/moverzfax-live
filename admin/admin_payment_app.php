<style>
    .input-for-total {
        margin-bottom: 10px;
        width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
    .input-for-total input {
        width: 300px;
    }
    .total-input-contain {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 5px;
    }
    /* #totalInput {
        margin: 3px;
        width: 200px;
    } */
</style>
<?php 
defined('LOGIN') OR exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');?>
<div class="container-fluid">
    <h3 class="text-center mt-2">MoverZFax Admin Payment System</h3>
        <br/>
        <div class="input-for-total">

            <form method="post" action="admin_payment_checkout.php">
                <?php
                // Initialize the $usdot_numbers array with empty strings if it has not been submitted yet
                if (!isset($_POST['usdot'])) {
                    $usdot_numbers = array_fill(0, 5, '');
                } else {
                    $usdot_numbers = $_POST['usdot'];
                }
                // $usdot_numbers = array();
                // Loop through five times to create five input elements
                for ($i = 1; $i <= 5; $i++) {
                    echo '
                        <div class="total-input-contain">
                            <span class="mt-2"><h5>Report #' . $i . ': </h5></span>
                            <input  class="form-control form-control-sm text-center"
                                    id="usdotInput' . $i . '"
                                    name="usdot[]"
                                    placeholder="Enter USDOT Number"
                                    type="number"
                                    step="1"
                                    value="' . $usdot_numbers[$i - 1] . '"
                                    />
                        </div>
                    ';
                }
                ?>

                <div class="total-input-contain">
                    <span class="mt-2"><h5>Enter Customer Email: </h5></span>
                    <input  class="form-control form-control-sm text-center"
                            id="totalInput"
                            name="customer_email"
                            placeholder="Enter Email"
                            type="email"
                            value="<?php echo isset($_POST['customer_email']) ? $_POST['customer_email'] : ''; ?>"
                            required />
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>

            </form>


        </div>

        <br>
        <br>

</div>
<hr />