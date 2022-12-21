<?php
include 'connection.php';


//$sql = "SELECT * FROM ";



$sql = "SELECT * FROM `mover_cart` WHERE user_id=" . $user_id . " AND is_selected=1";
$result = $con->query($sql);
$i = 1;
if (mysqli_num_rows($result) > 0) {
    while ($res = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $res['company_name']; ?></td>
            <td><?= $res['usdot']; ?></td>
            <td><a href="../model/template.php?usdot=<?= $res['usdot']; ?>" target="_blank" class="btn btn-primary">Download Report</a></td> 
        </tr>
<?php $i++; 
    }
} else {
    echo "<tr><td colspan='4'><h3 class='text-center'>Sorry No Record Found!</h3></td></tr>";
} ?>