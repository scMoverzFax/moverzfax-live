<?php

include "connection.php";

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {

    $sql = "SELECT r.*,c.first_name,c.last_name,ci.name AS origin_city_name,cit.name AS destination_city_name FROM `review` AS r
      LEFT JOIN customer_register AS c ON c.id = r.user_id
      LEFT JOIN add_jobs AS ad ON ad.id = r.job_id
      LEFT JOIN city AS ci ON ci.id = ad.origin_city
      LEFT JOIN city AS cit ON cit.id = ad.destination_city";
    $result = $con->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $sr_no = 1;
        while ($res = mysqli_fetch_array($result)) {
?>
            <div class="card">
                <div class="row ">

                    <div class="col-md-12 px-3">
                        <div class="card-block px-6">
                            <h4 class="card-title inline"> <?php echo strtoupper($res['company_Name']); ?> </h4>
                            <h5 class="inline">From California</h5>

                            <div class="float-right">
                                Rating :
                                <?php for ($i = 1; $i <= $res['Impression']; $i++) {
                                    echo '<img src="img/golden_star_100.png" class="rounded-start" alt="" style="width: 20px;">';
                                } ?>
                            </div>
                            <div class="float-right">
                                <a href="delete_query.php?work=review&id=<?= $res['id']; ?>" class="text-danger mr-3"><b>Delte Review <i class="fas fa-trash-alt text-danger"></i></b></a>
                            </div>
                            <span class="inline ms-5"><i class="fas fa-phone-alt"></i> Company Contact Number -</span><label class="inline"> 8108747825</label>
                            <div class="col-md-12 ps-4">
                                <div class="col-md-12 p-0">
                                    <p class="mb-2">Your moving review : <?php echo $res['overall_review']; ?> <br>
                                        Did the company respected estimated Cost? :<?php echo strtoupper($res['respsect_Cost']); ?><br>
                                        Was the mover professional? : <?php echo strtoupper($res['mover_professional']); ?><br>
                                        Did the mover arrived in time? : <?php echo strtoupper($res['mover_arrived']); ?></p>
                                </div>
                            </div>
                        </div>
                        <span class="inline ms-5"><i class="fas fa-user me-1"></i> Review By - </span><label class="inline"> <?php echo ucfirst($res['first_name']) . " " . ucfirst(substr($res['last_name'], 0, 1)) . "."; ?></label>

                        <span class="inline ms-5"><i class="fas fa-truck-moving"></i> Moved From - </span><label class="inline"> <?= ucfirst($res['origin_city_name']); ?></label>
                        <span class="inline ms-4"> Moved To - </span><label class="inline"> <?= ucfirst($res['destination_city_name']); ?></label>
                        <label class="float-right me-5 "> <?php echo $res['review_date']; ?></label>
                        <span class="float-right me-2"><i class="fas fa-calendar-alt"></i> Review Date - </span>
                    </div>
                </div>
            </div>
<?php $sr_no++;
        }
    } else {
        echo "<div><h3 class='text-center'>Sorry No Record Found!</h3></div>";
    }

    $con->close();
}

?>