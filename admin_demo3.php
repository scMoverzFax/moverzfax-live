<?php include 'myheader.php'; ?>
<?php

    include 'connection.php';
    $sql = "SELECT  ad.*,ci.name as ciname,st.name as stname FROM customer_register ad
            INNER JOIN `city` as ci ON  ci.id = ad.city
            INNER JOIN `state` as st ON st.code = ad.states
            WHERE is_active = 0";
    $result = $con->query($sql);
    if(mysqli_num_rows($result) > 0){
        $res = mysqli_fetch_assoc($result);?>
        <h3 class="text-center mt-3">Block User</h3>
            <table class="table table-striped mx-lg-1">
                <thead class="table-dark">
                    <th class="text-center">First Name</th>
                    <th class="text-center">Last Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Contact Number</th>
                    <th class="text-center">State</th>
                    <th class="text-center">City</th>
                    <th class="text-center">Zip</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Unblock</th>
                </thead>
                <tr>
                    <td class="text-center"><?= $res['first_name']; ?></td>
                    <td class="text-center"><?= $res['last_name']; ?></td>
                    <td class="text-center"><?= $res['email']; ?></td>
                    <td class="text-center"><?= $res['contact_number']; ?></td>
                    <td class="text-center"><?= $res['stname']; ?></td>
                    <td class="text-center"><?= $res['ciname']; ?></td>
                    <td class="text-center"><?= $res['zip_code']; ?></td>
                    <td class="text-center"><?= $res['catagory']; ?></td>
                    <td class="text-center"><a href="admin_demo2.php?value=unblock&id=<?= $res['id']; ?>"><i class="fas fa-unlock"></i></a></td>
                </tr>
            </table>
    <?php }
    else{
        echo "<h1 class='text-center'>No Results</h1>";
    }
    include 'footer.php'; ?>