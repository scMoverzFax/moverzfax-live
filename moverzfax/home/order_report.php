<?php include 'myheader.php' ;
defined('LOGIN') OR exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
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
        <h3 class="text-center mt-2 font-weight-bold"> Download Report</h3>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <th>Sr. No.</th>
                <th>Company Name</th>
                <th>USDOT</th>
                <th class="text-center">Report</th>
            </thead>  
                <?php include '../model/order_report_model.php'; ?>
        </table>
        <span style="color:red;font-size:16px;">This report valid for next two week.</span>  
        <h2 class="text-center">Thank You so much...</h2>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>