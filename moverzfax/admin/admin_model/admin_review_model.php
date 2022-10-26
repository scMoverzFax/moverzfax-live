<?php
include "connection.php";

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
} else {

  $sql = "SELECT r.*,c.first_name,c.last_name,ci.name AS origin_city_name,cit.name AS destination_city_name,st.name,mr.contact_number FROM `review` AS r
          LEFT JOIN mover_register AS mr ON  mr.usdot = r.usdot
          LEFT JOIN customer_register AS c ON c.id = r.user_id
          LEFT JOIN add_jobs AS ad ON ad.id = r.job_id
          LEFT JOIN city AS ci ON ci.id = ad.origin_city
          LEFT JOIN city AS cit ON cit.id = ad.destination_city
          LEFT JOIN `state` AS st ON st.code = mr.states WHERE r.is_active = '0'";
  $result = $con->query($sql);
  if (mysqli_num_rows($result) > 0) {
    while ($res = mysqli_fetch_array($result)) {
?>
<div class="container in-container slide-in-bottom">
        <div class="row">
            <div class="col-12">
                <article class="blog-card mb-3">
                    <div class="blog-card__info">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="fw-bold"><?php echo strtoupper($res['company_Name']); ?> ,<span class="fw-normal">From <?php echo ucfirst($res['name']); ?>.</span></h4>
                            </div>
                            <div><span class="icon-link p-0">Rating: </span>
                            <?php for ($i = 1; $i <= $res['Impression']; $i++) {
                                echo '<img src="../img/golden_star_100.png" class="rounded-start" alt="" style="width: 20px;">';
                            } ?>
                            </div>
                        </div>
                        <p><span><strong>Review :</strong></span> <?php echo ucfirst($res['overall_review']); ?></p>
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <span class="col-lg-3 p-0 icon-link"><i class="far fa-question-circle me-1"></i>Was the mover professional? :<strong> <?php echo strtoupper($res['mover_professional']); ?></strong></span>
                                <span class="col-lg-3 p-0 icon-link"><i class="far fa-question-circle me-1"></i>Did the mover arrived in time? :<strong> <?php echo strtoupper($res['mover_arrived']); ?></strong></span>
                                <span class="col-lg-6 p-0 icon-link"><i class="far fa-question-circle me-1"></i>Did the company respected estimated Cost? :<strong> <?php echo strtoupper($res['respsect_Cost']); ?></strong></span>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row  mb-2">
                                <span class="icon-link p-0 col-md-3"><i class="far fa-user me-2"></i>Review By: <label><?php echo ucfirst($res['first_name']) . " " . ucfirst(substr($res['last_name'], 0, 1)) . "."; ?></label></span>
                                <span class="icon-link p-0 col-md-3"><i class="fas fa-phone-alt me-2"></i> Mover Contact: <label><?php echo $res['contact_number']; ?></label></span>
                                <span class="icon-link p-0 col-md-6"><i class="fas fa-shipping-fast me-2"></i>Moved from - <label>  <?= ucfirst($res['origin_city_name']); ?> </label>  to  <label> <?= ucfirst($res['destination_city_name']); ?> </label></span>
                            </div>
                        </div>
                        
                            <div class="d-flex justify-content-between">
                                <?php if($res['admin_approval'] == "pending"){ ?>
                                <!-- <a href="#" class="btn btn--with-icon "><i class="btn-icon fa fa-long-arrow-right bg-info"></i>Reply</a> -->
                                    <a href="admin_model/admin_operation.php?action=acceptReview&id=<?= $res['id']; ?>" class="btn btn--with-icon "><i class="btn-icon fa fa-long-arrow-right bg-success"></i>Accept</a>
                                    <a href="admin_model/admin_operation.php?action=rejectReview&id=<?= $res['id']; ?>" class="btn btn--with-icon "><i class="btn-icon fa fa-long-arrow-right bg-danger"></i>Reject</a>
                                <?php } ?>
                                <?php if($res['admin_approval'] != "pending"){ ?>
                                    <a href="admin_model/admin_operation.php?action=statusReview&id=<?= $res['id']; ?>" class="btn btn--with-icon "><i class="btn-icon fa fa-long-arrow-right bg-danger"></i>Delete</a>
                                <?php } ?>
                            </div>
                    </div>
                </article>

            </div>
        </div>
    </div>

    <?php 
    }
  } else {
    echo "<div><h3 class='text-center'>Sorry No Record Found!</h3></div>";
}

  $con->close();
}

?>