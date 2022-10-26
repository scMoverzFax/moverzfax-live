<?php
include 'connection.php';
$sql = "SELECT cr.first_name,cr.last_name,cr.contact_number,cr.email,ad.* FROM customer_register AS cr
                            LEFT JOIN add_jobs AS ad ON ad.user_id=cr.id
                            WHERE ad.is_active ='1'";

// $sql = "SELECT * FROM add_jobs WHERE origin_state = '".$states."'";


$result = $con->query($sql);
if (mysqli_num_rows($result) > 0) {
    $sr_no = 1;  ?>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <th>Sr. No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>Customer Email</th>
            <th>Get All Details</th>
        </thead>
        <tbody>
            <?php while ($res = mysqli_fetch_array($result)) {
                if ($res['usdot1'] == $usdot || $res['usdot2'] == $usdot || $res['usdot3'] == $usdot || $res['usdot4'] == $usdot || $res['usdot5'] == $usdot || $res['usdot6'] == $usdot || $res['usdot7'] == $usdot || $res['usdot8'] == $usdot) {
            ?>
                    <tr>
                        <td><?= $sr_no; ?></td>
                        <td><?= $res['first_name']; ?></td>
                        <td><?= $res['last_name']; ?></td>
                        <td><?= $res['contact_number']; ?></td>
                        <td><?= $res['email']; ?></td>
                        <td><a href="my_lead_detail.php?id=<?= $res['id']; ?>" class="text-info mr-3"><b>More Info <i class="fas fa-info-circle"></i></b></a></td>
                    </tr>
            <?php $sr_no++;
                }
                // else{
                //     echo "<tr><td colspan=6><h3>No Lead Generated Yet...</h3></td></tr>";
                // }
            } ?>
        </tbody>
    </table>
<?php } else {
    echo "<div><h4 class='text-center'>Sorry No Leads found in your Bucket!</h4><h4 class='text-center'>Please go to 'Find Leads' to add Leads in your Bucket.</h4></div>";
} ?>