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
                <tbody>
                    <?php
                    include 'connection.php';
                    $sr_no = 1;
                    $sql = "SELECT * FROM mover_cart WHERE is_selected=1";
                    $result = $con->query($sql);
                        if(mysqli_num_rows($result) > 0){ 
                            while($res = mysqli_fetch_array($result)){
                            $usdot = $res['usdot'];
                    ?>
                    <tr>
                        <td><?= $sr_no; ?></td>
                        <td><?= $res['company_name']; ?></td>
                        <td><?= $usdot; ?></td>
                        <td class="text-center"><a href="template.php?usdot=<?php echo $usdot; ?>" target="_blank" class="btn text-light font-weight-bold" style="background-color:green">Check And Download Report</a></td>
                    </tr>
                    <?php $sr_no++; } } ?>
                </tbody>
        </table>
        <span style="color:red;font-size:16px;">This report valid for next two week.</span>  
        <h2 class="text-center">Thank You so much...</h2>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>