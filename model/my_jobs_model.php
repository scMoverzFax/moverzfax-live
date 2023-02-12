<?php

include "connection.php";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {

    $sql = "SELECT ad.*, ci.name AS cioname , st.name AS stoname, c.name AS cidname, s.name AS stdname, m.company_name FROM `add_jobs` AS ad 
            LEFT JOIN `city` AS ci ON  ci.id = ad.origin_city
            LEFT JOIN `state` AS st ON st.code = ad.origin_state
            LEFT JOIN `city` AS c ON  c.id = ad.destination_city
            LEFT JOIN `state` AS s ON s.code = ad.destination_state
            LEFT JOIN `mover_register` AS m ON m.usdot = ad.completed_mover 
            where ad.user_id = " . $user_id . " ORDER BY ad.id DESC";
            //  echo $sql; die();
    $result = $con->query($sql);
    $count = 0;

    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_assoc($result)) {
?>
            <!-- ---- Start loop-->
            <section class="mb-4">
                <div class="container in-container slide-in-bottom shadow rounded" style="animation-delay: <?= $count * 50; ?>ms;">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="route-wrapper">
                                <div class="route bg-info shadow"><i class="fas fa-route"></i></div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="top-bar px-3 shadow-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="date h5">Moving Date : <span><strong> <?= $res['date_of_move']; ?> </strong></span></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="date h5">Job Post Date : <span><strong> <?= $res['posting_date']; ?> </strong></span></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="date h5">MOVING JOB INFORMATION</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="origin-address px-5 py-2 shadow-sm">
                                        <table class="table-striped">
                                            <thead class="">
                                                <tr>
                                                    <th colspan="3" style="text-align: center;line-height:20px">Address of Origin</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>City</td>
                                                    <td>:</td>
                                                    <td><?= $res['cioname']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>State</td>
                                                    <td>:</td>
                                                    <td><?= $res['stoname']; ?></td>
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
                                <div class="col-md-4">
                                    <div class="destination-address  px-5 py-2 shadow-sm">
                                        <table class="table-striped">
                                            <thead class="">
                                                <tr>
                                                    <th colspan="3" style="text-align: center;line-height:20px">Address of Destination</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>City</td>
                                                    <td>:</td>
                                                    <td><?= $res['cidname']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>State</td>
                                                    <td>:</td>
                                                    <td><?= $res['stdname']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Country</td>
                                                    <td>:</td>
                                                    <td>USA</td>
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
                                <div class="col-md-4">
                                    <div class="destination-address  px-5 py-2 shadow-sm">
                                        <table class="table-striped">
                                            <thead class="">
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
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <?php if($res['move_status'] == "incomplete"){ ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6 p-0">
                                            <div class="bottom-bar-left px-3 shadow-sm">
                                                    <div class="q"><i class="far fa-question-circle"></i>Moving job viewed by <?= $res['usdot_count']; ?> Companies</div>
                                                    <?php if( $res['usdot_count'] != 0) { ?> <a href="../home/view_company.php?jobid=<?= $res["id"]; ?>" class="btn custom-btn-3 bg-success shadow text-light"><span>View Companies</span></a><?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <div class="bottom-bar-right px-3 shadow-sm">
                                                <a href="../home/my_job_details.php?id=<?= $res["id"]; ?>" class="btn custom-btn-2 bg-info shadow text-light"><span>Read Details</span></a>
                                                <a href="../model/lead_model.php?lead=delete_job&id=<?= $res['id']; ?>" class="btn custom-btn-2 bg-danger shadow text-light"><span>Delete Job</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } else{ ?>
                                    <div class="row">
                                    <div class="col-md-12">
                                            <div class="col-md-7 p-0">
                                                <div class="bottom-bar-left px-3 shadow-sm">
                                                        Your job completed by <b><?= $res['company_name'];?></b> compnay. USDOT number is <?= $res['completed_mover']; ?>.
                                                </div>
                                            </div>
                                            <div class="col-md-5 p-0">
                                                <div class="bottom-bar-right px-3 shadow-sm">
                                                    Please share your valuable review. <a href="add_review.php?usdot=<?= $res['completed_mover']; ?>&id=<?= $res['id']; ?>" class="btn custom-btn-2 bg-info shadow text-light">Go to review</a>    
                                                </div>
                                            </div>
                                    </div>
                                <?php }?>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- ----- End loop-->

<?php $count++;
        }
    } else {
        echo "<div><h3 class='text-center'>Sorry No Record Found!</h3></div>";
    }
}

?>