<style>
    .input-for-total {
        margin-bottom: 10px;
    }
    .total-input-contain {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #totalInput {
        margin: 3px;
        width: 200px;
    }
</style>
<?php 
defined('LOGIN') OR exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');?>
<div class="container-fluid">
    <h3 class="text-center mt-2">MoverZFax Admin Payment System</h3>
        <br/>
    
        <!-- <div class="col-md-12 mover_table">
            <table class="table table-striped table-hover ">
                <thead class="sticky-top thead-dark">
                    <tr>
                        <th scope="col">Company Name </th>
                        <th scope="col">USDOT</th>
                        <th scope="col">Company State</th>
                        <th scope="col">Company City</th>
                        <th scope="col">Zip Code</th>
                        <th class=" text-center">Price</th>
                    </tr>
                </thead>
                <?php include '../model/payment_app_model.php'; ?> 
            </table>
        </div>
        <div class="col-md-4 search">
            <span class="col-md-5">Total:</span>
            <input type="text" name="usdot" class="col-md-7 form-control form-control-sm" placeholder="Enter Total Price" required>
        </div> -->

        <div class="input-for-total text-center">

            <!-- <div class="total-input-contain">
                <span class="mt-2"><h5>Enter Payment Total: </h5></span>
                <input  class="form-control form-control-sm text-center"
                        id="totalInput"
                        placeholder="Enter Total"
                        type="number"
                        step="any"
                        value='<?php //echo $total ?>'
                        required />
            </div> -->

            <?php
            // Define an empty array to store the USDOT numbers
            $usdot_numbers = array();

                // If the form has not been submitted, initialize the $usdot_numbers array with empty strings
                $usdot_numbers = array_fill(0, 5, '');

            // Loop through five times to create five input elements
            for ($i = 1; $i <= 5; $i++) {
                echo '
                    <div class="total-input-contain">
                        <span class="mt-2"><h5>Enter USDOT Number ' . $i . ': </h5></span>
                        <input  class="form-control form-control-sm text-center"
                                id="usdotInput' . $i . '"
                                name="usdot[]"
                                placeholder="Enter USDOT Number"
                                type="number"
                                step="1"
                                value="' . $usdot_numbers[$i - 1] . '"
                                required />
                    </div>
                ';
            }
            ?>



            <div class="total-input-contain">
                <span class="mt-2"><h5>Enter Customer Email: </h5></span>
                <input  class="form-control form-control-sm text-center"
                        id="totalInput"
                        placeholder="Enter Email"
                        type="text"
                        value='<?php $adminEnteredCustomerEmail=''; echo $adminEnteredCustomerEmail ?>'
                        required />
            </div>

        </div>

        <br>
        <br>

        <!-- Add a call to Stripe checkout here -->
        <?php 
            session_start();
            // $_SESSION['numberOfReports'] = $numberOfReports;
            // $_SESSION['usdotArray'] = $usdotArray;
            $_SESSION['moverNameArray'] = $usdot_numbers;
            $_SESSION['email'] = $adminEnteredCustomerEmail;
            include '../stripe/checkout.html';
        ?>


            <!-- <div class="container-fluid text-center mt-4">
                <br/>
                <script src="https://www.paypal.com/sdk/js?client-id=AYLQiHy0FSSGs-oBL4nSW7yMLr7czCuyiuMf4JaVr92uVkotmbJiKZCeSGb_m0EM__WeshiYzOUP9EoZ&currency=USD"></script>

                <div id="paypal-button-container"></div>

                <script>
                    paypal.Buttons({

                        // Sets up the transaction when a payment button is clicked

                        createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                            amount: {
                                value: document.getElementById('totalInput').value //'<?php // echo $total; ?>' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                                }
                            }]
                        });
                    },

                    // Finalize the transaction after payer approval
                    onApprove: function(data, actions) {
                        loaderShowFunction();
                        return actions.order.capture().then(function(orderData) {
                            // Successful capture! For dev/demo purposes:
                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                var transaction = orderData.purchase_units[0].payments.captures[0];
                                if(transaction.status == "COMPLETED"){
                                var myJSON = JSON.stringify(orderData);
                                window.location = "../admin/admin_model/admin_payment_model.php?x="+ myJSON ;
                                }
                            });
                        }
                    }).render('#paypal-button-container');
                </script>
            </div> -->
</div>

<hr />