<style>
    .input-for-total {
        height: 50px;
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
        </div> -->

        <div class="input-for-total text-center">

            <div class="total-input-contain">
                    <span class="mt-2"><h5>Enter Payment Total: </h5></span>
                    <input  class="form-control form-control-sm text-center"
                            id="totalInput"
                            placeholder="Enter Total"
                            type="number"
                            step="any"
                            value='<?php echo $total ?>' />
            </div>

                    <!-- <div class="col-md-4 search">
                            <span class="col-md-5">Total:</span>
                            <input type="text" name="usdot" class="col-md-7 form-control form-control-sm" placeholder="Enter Total Price" required>
                        </div> -->

            <div class="total-input-contain"  style="border: 1px solid black; padding: 5px;">
                    <span class="mt-2"><h5>Enter Customer Email: </h5></span>
                    <input  class="form-control form-control-sm text-center"
                            id="totalInput"
                            placeholder="Enter Email"
                            type="text"
                            value='<?php $customerEmail=''; echo $customerEmail ?>' />
            </div>

        </div>

        <br>
        <br>
        <div style="border: 1px solid black;">
        <!-- Add a call to Stripe checkout here -->
        <?php include '../stripe/checkout.html'; ?>
    
    </div>


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