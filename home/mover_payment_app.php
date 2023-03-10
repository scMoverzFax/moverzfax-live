<?php 
include 'myheader.php'; 
defined('LOGIN') OR exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');?>
<div class="container-fluid">
    <h3 class="text-center mt-2">MoverZFax Payment </h3>
            <div class="col-md-12 mover_table">
                <table class="table table-striped table-hover ">
                    <thead class="sticky-top thead-dark">
                        <tr>
                            <th scope="col">Origin City</th>
                            <th scope="col">Origin State</th>
                            <th scope="col">Origin Pin Code</th>
                            <th scope="col">Destination City</th>
                            <th scope="col">Destination State</th>
                            <th scope="col">Destination Pin Code</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <?php include '../model/mover_payment_app_model.php'; ?>
                </table>
            </div>
            <div class="container-fluid text-center mt-4">
                <script src="https://www.paypal.com/sdk/js?client-id=AYLQiHy0FSSGs-oBL4nSW7yMLr7czCuyiuMf4JaVr92uVkotmbJiKZCeSGb_m0EM__WeshiYzOUP9EoZ&currency=USD"></script>
                <!-- Set up a container element for the button -->
                <div id="paypal-button-container"></div>

            <script>
                paypal.Buttons({

                    // Sets up the transaction when a payment button is clicked

                    createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                        amount: {
                            value: '8' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                            }
                        }]
                    });
                },

                    // Finalize the transaction after payer approval
                    onApprove: function(data, actions) {
                        // loaderShowFunction();
                        return actions.order.capture().then(function(orderData) {
                            // Successful capture! For dev/demo purposes:
                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                var transaction = orderData.purchase_units[0].payments.captures[0];
                                if(transaction.status == "COMPLETED"){
                                var myJSON = JSON.stringify(orderData);
                                window.location = "../model/mover_payment_data_model.php?id="+ <?=$id; ?> +"&x="+ myJSON ;
                                }
                            });
                        }
                    }).render('#paypal-button-container');
                </script>
            </div>
        </div>
        
    <hr />
    
<?php include 'footer.php'; ?>