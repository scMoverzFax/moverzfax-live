<?php include 'myheader.php' ;
// defined('LOGIN') OR exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
$user_id = $_SESSION["id"];
?>
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
        <h3 class="text-center mt-10 font-weight-bold"> Download Report</h3>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <th>Sr. No.</th>
                <th>Company Name</th>
                <th>USDOT</th>
                <th>Expiration Date</th>
                <th>Report</th>
            </thead>  
                <!-- <?php //include '../model/order_report_model.php'; ?> this is the use of the old model. -->
                <?php include '../model/my_order_model.php'; ?>
        </table>
        <span style="color:red;font-size:16px;">This report is valid for the next month.</span>  
        <h2 class="text-center">Thank You so much...</h2>
        <p class="text-center" style="font-size:16px;">Be sure to download your reports now if this was a guest checkout, as they will not be available upon your return.</p>  
    </div>
</body>
</html>
<?php include 'footer.php'; ?>