<?php include "myheader.php"; 
defined('LOGIN') OR exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
?>
<style>
    body {
  background-color:  #eee;
}
.title {
    text-transform: uppercase;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
     
}
.card {

    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin:10px;
    padding-left:20px;
    padding-bottom:10px;
    border-radius : 15px;
}
.card .fas{
    color:green;
}
</style>
  <div class="container-fluid bg-white my-3 review_tabs" style="font-size:12px;">
    <div class="title h3 text-center">My Reviews</div>
      <?php

      include "connection.php";

      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }
      else{

        $sql = "SELECT r.*,c.first_name,c.last_name FROM `review` as r LEFT JOIN customer_register c ON c.id = r.user_id";
        $result = $con->query($sql);
        if(mysqli_num_rows($result) > 0){            
            $sr_no=1;
            while($res = mysqli_fetch_array($result)){
                    ?>
                    <div class="card">
                       <div class="row ">

                        <div class="col-md-12 px-3">
                          <div class="card-block px-6">
                            <h4 class="card-title inline"> <?php echo strtoupper($res['Company_Name']); ?> </h4><h5 class="inline">From California</h5>
                            <div class="float-right">
                              Rating :  
                              <?php for($i=1;$i<=$res['Impression'];$i++){echo '<img src="img/golden_star_100.png" class="rounded-start" alt="" style="width: 20px;">';} ?>
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
                          <span class="inline ms-5"><i class="fas fa-user me-1"></i> Review By - </span><label class="inline"> <?php echo strtoupper($res['first_name']) ." ".strtoupper(substr($res['last_name'],0,1))."." ; ?></label>
                          
                          <span class="inline ms-5"><i class="fas fa-truck-moving"></i> Moved From - </span><label class="inline"> Topeka</label>
                          <span class="inline ms-4"> Moved To - </span><label class="inline"> Arkansas</label>
                          <label class="float-right me-5 "> <?php echo $res['review_date']; ?></label>
                          <span class="float-right me-2"><i class="fas fa-calendar-alt"></i> Review Date - </span>
                        </div>
                        <!-- <a href="" style="float:right;color:black"><b>Reply to Review<i class="fa fa-reply ml-2"></i></b></a> -->
                      </div>
                    </div>
                    <?php $sr_no++;
              }
            }
            else{
                echo "No Review Found";
            }

            $con->close();

       }

        ?>
    </div>
  <?php include 'footer.php' ?>
