<?php
include 'connection.php';


$sql = "SELECT * FROM ";

$tr_id = isset($_REQUEST['tr_id']) ? $_REQUEST['tr_id'] : "0";

$sql = "SELECT tr_id,report_one,report_two,report_three,report_four,report_five FROM `payment` WHERE tr_id ='" . $tr_id . "'";
// echo $sql;
$result = $con->query($sql);

if (mysqli_num_rows($result) > 0) {
    $res = mysqli_fetch_array($result);
    if ($res['report_one'] != 0) { ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-md-12"></div> -->
                    <div class="col-md-6 mt-3">
                        USDOT Number is : <?= $res['report_one']; ?>
                    </div>
                    <div class="col-md-6">
                        <a href="../model/template.php?usdot=<?= $res['report_one']; ?>" target="_blank" class="btn btn-primary">Dowload Report</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    if ($res['report_two'] != 0) { ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-md-12"></div> -->
                    <div class="col-md-6 mt-3">
                        USDOT Number is : <?= $res['report_two']; ?>
                    </div>
                    <div class="col-md-6">
                        <a href="../model/template.php?usdot=<?= $res['report_two']; ?>" target="_blank" class="btn btn-primary">Dowload Report</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    if ($res['report_three'] != 0) { ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-md-12"></div> -->
                    <div class="col-md-6 mt-3">
                        USDOT Number is : <?= $res['report_three']; ?>
                    </div>
                    <div class="col-md-6">
                        <a href="../model/template.php?usdot=<?= $res['report_three']; ?>" target="_blank" class="btn btn-primary">Dowload Report</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    if ($res['report_four'] != 0) { ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-md-12"></div> -->
                    <div class="col-md-6 mt-3">
                        USDOT Number is : <?= $res['report_four']; ?>
                    </div>
                    <div class="col-md-6">
                        <a href="../model/template.php?usdot=<?= $res['report_four']; ?>" target="_blank" class="btn btn-primary">Dowload Report</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    if ($res['report_five'] != 0) { ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-md-12"></div> -->
                    <div class="col-md-6 mt-3">
                        USDOT Number is : <?= $res['report_five']; ?>
                    </div>
                    <div class="col-md-6">
                        <a href="../model/template.php?usdot=<?= $res['report_five']; ?>" target="_blank" class="btn btn-primary">Dowload Report</a>
                    </div>
                </div>
            </div>
        </div>
<?php } else {
    }
} else {
    echo "<tr><td colspan='4'><h3 class='text-center'>Sorry No Record Found!</h3></td></tr>";
} ?>