<?php
    include '../model/connection.php';
    include 'admin_header.php';

    //Use this inclusion to display stats about the grades movers are receiving
    //include 'report_grading.php'; 

    if(!defined('LOGIN')){
        echo '<h3 class="text-center my-5 py-5 ">Please Login First...</h3>';
    } else {
        // echo '<br><br><br>';
        // // first box eith all user for moversfax compnay 
        // $firstBox = mysqli_query($con,"SELECT count(id) AS all_customer FROM `customer_register` WHERE is_active = '1'")->fetch_assoc();
        // echo "Number of customers registered with Moverzfax: " . $firstBox['all_customer'] . "<br>";
    
        // // Second box eith all mover for moversfax compnay 
        // $secondBox = mysqli_query($con,"SELECT count(id) AS all_mover FROM `mover_register` WHERE is_active = '1'")->fetch_assoc();
        // echo "Number of movers registered with Moverzfax: " . $secondBox['all_mover'] . "<br>";
    
        // // Third box eith all mover for moversfax compnay 
        // $thirdBox = mysqli_query($con,"SELECT count(id) AS all_transaction FROM `payment`")->fetch_assoc();
        // echo "Number of transactions successfully completed with Moverzfax: " . $thirdBox['all_transaction'] . "<br>";
    
        // // Fourth box eith all mover for moversfax compnay 
        // $fourthBox = mysqli_query($con,"SELECT sum(tr_amount) AS all_money FROM `payment`")->fetch_assoc();
        // echo "Money collecetd through Moverzfax: " . $fourthBox['all_money'] . "<br>";
    }
    ?>
    <div  class="wo-services">
        <div class="row mt-20">
            <div class="col-sm-6">
                <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle">
                            <div class="uk-width-auto"><img class="uk-border-square" height="35" src="../img/report_card.png" width="35"></div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Generate Reports</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p>Admin can generate reports on any mover at no charge.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a class="uk-button uk-button-text" href="admin_reports.php">Visit Page</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle">
                            <div class="uk-width-auto"><img class="uk-border-square" height="40" src="../img/truck.png" width="40"></div>
                            <div class="uk-width-expand">
                                <h2 class="uk-card-title uk-margin-remove-bottom">Mover Approval</h2>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p>Review links provided by registered movers, and approve them if the information is correct.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a class="uk-button uk-button-text" href="admin_mv_approval.php">Visit Page</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-sm-6">
                <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle">
                            <div class="uk-width-auto"><img class="uk-border-square" height="40" src="../img/user_image_dummy.png" width="40"></div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Manage Users</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p>Search, delete, and block customers or movers.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a class="uk-button uk-button-text" href="admin_cs_user.php">View Customers</a>
                        <br>
                        <a class="uk-button uk-button-text" href="admin_mv_user.php">View Movers</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle">
                            <div class="uk-width-auto"><img class="uk-border-square" height="35" src="../img/fail.jpeg" width="35"></div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Mover Scam System</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p>Give strikes to movers who have mistreated clients. Three strikes, and a Scammer watermark will be applied to that movers report.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a class="uk-button uk-button-text" href="admin_mv_scammer.php">Visit Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php
    include '../home/footer.php';
?>