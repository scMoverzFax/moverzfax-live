    <?php
        include 'connection.php';
        $jobid = $_REQUEST['jobid'];
        $usdot_array = array();
        $sql1 = "SELECT usdot1, usdot2 , usdot3 , usdot4 , usdot5 , usdot6 , usdot7 , usdot8 FROM add_jobs WHERE id = '".$jobid."' ";
        // echo $sql1; die();
        $result1 = mysqli_query($con, $sql1);
        if(mysqli_num_rows($result1) > 0){

        $res1 = mysqli_fetch_assoc($result1);
        $count = 0;
        for($i = 0; $i <= 7; $i++){
            $key = array_search("0",$res1);
            if($key != false){
                unset($res1[$key]);
            }
            else{
                $count++;
            }
        }
        $usdot_array = array_keys($res1);
        $usdot_key_count = 0;
        $sql2 = "SELECT mr.usdot,mr.company_name FROM `mover_register` AS mr WHERE mr.usdot IN ('".implode("','",$res1)."')";
        $result2 = mysqli_query($con, $sql2);
        if(mysqli_num_rows($result2) > 0){
            $sr_no = 1;
            while($res2 = mysqli_fetch_assoc($result2)){
    ?>
         <div class="container in-container slide-in-bottom  mb-3">
            <div class="card">
                <div class="card-body"> 
                    <div class="row">
                        <div class="col-md-1 text-center">
                            <?= $sr_no; ?>.
                        </div>
                        <div class="col-md-7">
                            Moving job viewed by <b><?= $res2['company_name'];?></b>. 
                        </div>
                        <div class="col-md-4 d-flex">
                            This Mover completed job : <a href="../model/lead_model.php?lead=complete&completed_mover=<?php echo $res2['usdot'] ?>&id=<?=$jobid;?>" class="btn custom-btn-2 bg-success shadow text-light ml-2"><span>Yes</span></a></a>
                        </div>
                        
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <!-- <div class="col-md-7 d-flex"">
                            I reject this offer : <a href="../model/lead_model.php?lead=reject&count=<?= $count; ?>&usdot=<?php echo $res2['usdot'] ?>&colno=<?= $usdot_array[$usdot_key_count]; ?>&jobid=<?=$jobid;?>" class="btn custom-btn-2 bg-danger shadow text-light ml-2"><span>Reject</span></a></a> 
                        </div> -->
                        <div class="col-md-3">
                            USDOT number is <b><?= $res2['usdot']; ?></b>.
                        </div>
                            <?php $sql3 = "SELECT * FROM mover_cart WHERE usdot = " .$res2['usdot']." AND   user_id = '".$user_id."'  ";
                            $result3 = mysqli_query($con, $sql3);
                            if(mysqli_num_rows($result3) > 0){ ?>
                                <div class="col-md-6 d-flex">
                                    This Compnay in your cart. 
                                </div>
                            <?php }else{ ?>
                                <div class="col-md-6 d-flex">
                                    Please check MoverZfax special report : <a href="../model/select_operation.php?function=search&usdot=<?= $res2['usdot']; ?>" class="btn custom-btn-2 bg-primary shadow text-light ml-2"><span>Add to cart</span></a></a>
                                </div>
                            <?php } ?> 
                    </div>
                </div>   
            </div>
        </div>
                
    <?php $sr_no++; $usdot_key_count++;  }  } } ?>

   