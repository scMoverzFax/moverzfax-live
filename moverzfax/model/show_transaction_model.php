<?php include "connection.php";
$sql = "SELECT * FROM  payment WHERE user_id = " . $user_id . " ORDER BY id desc";
$result = $con->query($sql);
if (mysqli_num_rows($result) > 0) {
    $sr_no = 1;
    while ($res = mysqli_fetch_array($result)) { ?>

        <tr>
            <td><?= $sr_no; ?></td>
            <td><?= $res['tr_full_name']; ?></td>
            <td><?= $res['tr_id']; ?></td>
            <td><?= $res['tr_status']; ?></td>
            <td><?= $res['tr_currency_code']; ?></td>
            <td><?= $res['tr_amount']; ?></td>
            <td><?= $res['tr_create_time']; ?></td>
            <td><a href="../home/order_details.php?tr_id=<?= $res['tr_id']; ?>" class="btn btn-info"><i class="fas fa-info-circle me-2"></i>View Report</a></td>
        </tr>

<?php $sr_no++;
    }
} else {
    echo "<tr><td colspan='6'><h3 class='text-center'>Sorry No Record Found!</h3></td></tr>";
} ?>