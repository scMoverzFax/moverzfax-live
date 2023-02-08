<?php
include 'connection.php';

$sql = "SELECT * FROM `mover_cart` WHERE user_id=" . $user_id . " AND is_selected=1";
$result = $con->query($sql);
$i = 1;
if (mysqli_num_rows($result) > 0) {
    while ($res = mysqli_fetch_array($result)) {
        //select the time of purchase for when that user purchsed that usdot
        $sql1 = "SELECT tr_create_time FROM payment WHERE user_id=" . $user_id . " AND " . $res['usdot'] . " IN(report_one, report_two, report_three, report_four, report_five)";
        $result1 = $con->query($sql1);
        $res1 = mysqli_fetch_array($result1);
        $mostRecent = 0;
        if($res1 != null){
            $mostRecent = $res1['tr_create_time'];
        }
        //if there is more than one transaction for that user purchasing that report, use the latest one
        if (mysqli_num_rows($result1) > 0) {
            while ($res1 = mysqli_fetch_array($result1)) {
                $mostRecent = $res1['tr_create_time'];
            }
        }
        //add two weeks in seconds to the date created
        date_default_timezone_set('America/New_York');
        $expDateInSeconds = strtotime($mostRecent) + 2628288;  //1209600 seconds in 14 days, 2628288 in a month
        $expDate = date('m/d/Y', $expDateInSeconds);
        $expDateToCompare = date('Y/m/d', $expDateInSeconds);
        $currentDate = date('m/d/Y');
        $currentDateToCompare = date('Y/m/d');
        $_SESSION['exp_date'] = $expDate;
        
        ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $res['company_name']; ?></td>
            <td><?= $res['usdot']; ?></td>
            <?php if($currentDateToCompare > $expDateToCompare) { ?>
                <td style ='color: red'>EXPIRED</td>
                <td><a href="../model/template.php?usdot=<?= $res['usdot']; ?>" target="_blank" class="btn btn-secondary disabled">Download Report</a></td>
            <?php } else { ?>
                <td><?= $expDate; ?></td>
                <td><a href="../model/template.php?usdot=<?= $res['usdot']; ?>" target="_blank" class="btn btn-primary">Download Report</a></td>
            <?php } ?>
            
        </tr>
<?php $i++; 
    }
} else {
    echo "<tr><td colspan='5'><h3 class='text-center'>Sorry No Record Found!</h3></td></tr>";
} ?>