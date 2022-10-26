<?php include 'myheader.php'; ?>
<?php
if(isset($_POST['information'])){
    include 'connection.php';
    $information = $_POST['information'];
    $sql = "SELECT  ad.*,ci.name as ciname,st.name as stname FROM customer_register ad
            INNER JOIN `city` as ci ON  ci.id = ad.city
            INNER JOIN `state` as st ON st.code = ad.states
            WHERE is_active=1 AND ad.first_name LIKE '%".$information."%' OR ad.last_name LIKE '%".$information."%' OR ad.email LIKE '%".$information."%' ";
    $result = $con->query($sql);
    if(mysqli_num_rows($result) > 0){
        $res = mysqli_fetch_assoc($result);?>
        <h3 class="text-center mt-3">All Data</h3>
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
                    <th class="text-center">Delete</th>
                    <th class="text-center">Block</th>
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
                    <td class="text-center"><a href="admin_demo2.php?value=delete&id=<?= $res['id']; ?>" style="color:red;"><i class="fas fa-trash-alt"></i></a></td>
                    <td class="text-center"><a href="admin_demo2.php?value=block&id=<?= $res['id']; ?>"><i class="fas fa-user-lock"></i></a></td>
                </tr>
            </table>
    <?php }
    else{
        echo "<h1 class='text-center'>No Record Found</h1>";
    }
}

include 'footer.php'; ?>