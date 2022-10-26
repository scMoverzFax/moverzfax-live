<?php 
include 'myheader.php'; 
defined('LOGIN') OR exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <h3 class="text-center mt-2">MoverZFax Payment </h3>
        
            <div class="col-md-12 mover_table">
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
                    <tbody>
                    <?php
                    $a = array(10,0,3,2,1); 
                    $i = 0;
                    include "connection.php";
                    $sql = "SELECT mo.*,ci.name as ciname,st.name as stname FROM mover_cart AS mo
                            LEFT JOIN `city` as ci ON  ci.id = mo.city_id
                            LEFT JOIN `state` as st ON st.id = mo.state_id WHERE is_selected=1";
        
                    $result = $con->query($sql);
                    if(mysqli_num_rows($result) > 0){ 
                        while($res = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?= $res['company_name']; ?></td>
                            <td><?= $res['usdot']; ?></td>
                            <td><?= $res['stname']; ?></td>
                            <td><?= $res['ciname']; ?></td>
                            <td><?= $res['zipcode']; ?></td>
                            <td class="text-center"><?= $a[$i]."$" ;?></td>
                        </tr>
                        
                   
                    <?php $i++; } } 
                    switch ($i){
                        case 1:
                            $total = 10;
                            break;
                        case 2:
                            $total = 10;
                            break;
                        case 3:
                            $total = 13;
                            break;
                        case 4:
                            $total = 15;
                            break;
                        case 5:
                            $total = 16;
                            break;
                    }
                    ?>
                    <tr >
                        <td colspan="4" class="font-weight-bold">Total</td>
                        <td class="text-center font-weight-bold" colspan="2" style="background:#FF4500;color:white"><?= $total;  ?>$</td>
                    </tr>
                    </tbody>
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
                            
                            value: '<?php echo $total; ?>' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                            
                            }
                        }]
                    });
                },

                    // Finalize the transaction after payer approval
                    onApprove: function(data, actions) {
                        return actions.order.capture().then(function(orderData) {
                            // Successful capture! For dev/demo purposes:
                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                
                                var transaction = orderData.purchase_units[0].payments.captures[0];
                                if(transaction.status == "COMPLETED"){
                                var myJSON = JSON.stringify(orderData);
                                window.location = "payment_data.php?x="+ myJSON ;
                                }
                            });
                        }
                    }).render('#paypal-button-container');
                </script>
            </div>
                </div>
        </body>
    </html>
    <div class="TruckLoader"><div class="TruckLoader-cab"></div><div class="TruckLoader-smoke"></div></div>
    <hr />
    
<?php include 'footer.php'; ?>