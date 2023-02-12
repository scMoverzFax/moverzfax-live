<?php

include "connection.php";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    $sql = "SELECT ad.*, ci.name AS cioname , st.name AS stoname, c.name AS cidname, s.name AS stdname FROM `add_jobs` AS ad 
            LEFT JOIN `city` AS ci ON  ci.id = ad.origin_city
            LEFT JOIN `state` AS st ON st.code = ad.origin_state
            LEFT JOIN `city` AS c ON  c.id = ad.destination_city
            LEFT JOIN `state` AS s ON s.code = ad.destination_state
            where  ad.is_active = '1' AND ad.origin_state = '".$states."' AND ad.usdot_count < 8"; 
            // echo $sql;die;
    $result = $con->query($sql);
    $count = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_assoc($result)) {
?>
            <!-- ---- Start loop-->
            <section class="mb-4">
                <div class="container in-container slide-in-bottom shadow rounded" style="animation-delay: <?=$count*50; ?>ms;">

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

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bottom-bar-left px-3 col-md-10 shadow-sm py-2 d-flex">
                                        <?php if($res["usdot1"] == $usdot || $res["usdot2"] == $usdot || $res["usdot3"] == $usdot || $res["usdot4"] == $usdot || $res["usdot5"] == $usdot || $res["usdot6"] == $usdot || $res["usdot7"] == $usdot || $res["usdot8"] == $usdot){
                                                echo  " Congrats. You have lead for this job." ; }else{ ?>
                                            <a href="../home/mover_payment_app.php?id=<?php echo $res['id'] ?>" class="btn custom-btn-2 bg-success shadow text-light"><span>Generate Lead</span></a>
                                            <span class="ml-3 mt-2"> Generate Lead to get all information. </span>
                                        <?php } ?>
                                    </div>
                                    <div class="bottom-bar-right px-3col-md-2">
                                    <?php if($res["usdot1"] == $usdot || $res["usdot2"] == $usdot || $res["usdot3"] == $usdot || $res["usdot4"] == $usdot || $res["usdot5"] == $usdot || $res["usdot6"] == $usdot || $res["usdot7"] == $usdot || $res["usdot8"] == $usdot)
                                    { ?> <a href="../home/my_job_details.php?id=<?= $res["id"]; ?>" class="btn custom-btn-2 bg-info shadow text-light"><span>Read Details</span></a>
                                    <?php } ?>
                                        <!-- <a href="../home/my_job_details.php?id=<?= $res["id"]; ?>" class="btn custom-btn-2 bg-info shadow text-light"><span>Read Details</span></a>     -->
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>
            <!-- ----- End loop-->
<?php       $count++;         }
    } else {
        echo "<div><h3 class='text-center'>Sorry No Record Found!</h3></div>";
    }
}

?>