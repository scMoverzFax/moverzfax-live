<?php

include "connection.php";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    $id = isset($_GET['id'])?$_GET['id']:"";
    $sql = "SELECT ad.*, ci.name AS ciname, st.name AS stname,city.name AS dcity, state.name AS dstate ,cr.first_name,cr.last_name,cr.contact_number,cr.email  FROM `add_jobs` AS ad 
                                LEFT JOIN `city` AS ci ON  ci.id = ad.origin_city
                                LEFT JOIN `state` AS st ON st.code = ad.origin_state
                                LEFT JOIN customer_register AS cr ON cr.id = ad.user_id
                                LEFT JOIN `city`  ON  city.id = ad.destination_city
                                LEFT JOIN `state` ON state.code = ad.destination_state 
                                WHERE ad.id = '".$id."'  ORDER BY ad.id DESC "; 
    $result = $con->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_assoc($result)) {
           ?>
        <div class="row shadow">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="date h5">Moving Date : <span><strong><?= $res['date_of_move']; ?></strong></span></div>
                    </div>
                    <div class="col-md-4">
                        <div class="date h5">Job Post Date : <span><strong><?= $res['posting_date']; ?></strong></span></div>
                    </div>
                    <div class="col-md-4">
                        <div class="date h5">MOVING JOB INFORMATION</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="qurter customer-details shadow">
                            <table class="table-striped">
                                <thead class="top-bar">
                                    <tr>
                                        <th colspan="3" style="text-align: center;line-height:20px">Customer Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td>:</td>
                                        <td><?= ucfirst($res['first_name'])." ".ucfirst($res['last_name']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Contact No.</td>
                                        <td>:</td>
                                        <td><?= $res['contact_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Customer Email</td>
                                        <td>:</td>
                                        <td><?= $res['email']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="qurter load-details shadow">
                            <table class="table-striped">
                                <thead class="top-bar">
                                    <tr>
                                        <th colspan="3" style="text-align: center;line-height:20px">Load Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Types Of Dwelling</td>
                                        <td>:</td>
                                        <td><?= $res['type_of_dwelling']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Size Of Dwelling</td>
                                        <td>:</td>
                                        <td><?= $res['size_of_dwelling']; ?></td>
                                    </tr>
                                    <tr rowspan="2">
                                        <td colspan="3">Some details : <?= $res['some_details']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="qurter origin-address shadow">
                            <table class="table-striped">
                                <thead class="top-bar">
                                    <tr>
                                        <th colspan="3" style="text-align: center;line-height:20px">Address of Origin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="text-center">Complete Address</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center"><?= $res['origin_address']; ?>.</td>
                                    </tr>

                                    <tr>
                                        <td>City</td>
                                        <td>:</td>
                                        <td><?= $res['ciname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>State</td>
                                        <td>:</td>
                                        <td><?= $res['stname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td>:</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>Pin code</td>
                                        <td>:</td>
                                        <td><?= $res['origin_zip_code']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="qurter destination-address shadow">
                            <table class="table-striped">
                                <thead class="top-bar">
                                    <tr>
                                        <th colspan="3" style="text-align: center;line-height:20px">Address of Destination</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="text-center">Complete Address</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center"><?= $res['destination_address']; ?>.</td>
                                    </tr>

                                    <tr>
                                        <td>City</td>
                                        <td>:</td>
                                        <td><?= $res['dcity']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>State</td>
                                        <td>:</td>
                                        <td><?= $res['dstate']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td>:</td>
                                        <td>Country</td>
                                    </tr>
                                    <tr>
                                        <td>Pin code</td>
                                        <td>:</td>
                                        <td><?= $res['destination_zip_code']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>          
<?php
        }
    }
}
?>