<?php include_once 'admin_header.php'; 
    include '../model/connection.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM `mover_register` WHERE id = '".$id."'";
    $result = mysqli_query($con , $sql);
    if(mysqli_num_rows($result) > 0){
        $res = mysqli_fetch_assoc($result);
        $moverName = $res['company_name'];
    }
?>

<style>
    * {
        font-family: sans-serif;
        box-sizing: border-box;
    }

    .b-container {
        overflow: hidden;
        height: fit-content;
        width: fit-content;
        position: relative;
        padding: 50px;
        max-width: 1440px;

    }

    .in-container {
        background-color: white;
        box-shadow: 0 0 10px 2px #eee;
        /* border-radius: 10px 10px; */
        border: 1px solid #eee;
        /* width: fit-content; */
        padding: 50px;
    }

    .bg-form {
        margin: 0;
        width: 100%;
        background-color: white;

    }

    .i-width {

        width: 100%;
    }

    .p_q {
        font-weight: bold;
    }

    .p_h {
        font-weight: bold;
    }

    .row .button-mf {
        font-size: 15px;
        color: rgb(255, 255, 255);
        box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        background-color: #7aeb41;
        border-color: none;
    }

    .button-mf:hover {
        background-color: #67bd3c;
        border-color: none;
    }

    /* .transaction{
        padding : 2px;
        margin : 2px;
    }

    .transaction li{
        padding: 2px;
        background-color : #190b9a;
        color : white;
        text-align :center;
        
    }

    .transaction li a{
        padding : 3px;
    } */


    /* Desktop-mobile approach --------------------------------------------------------------*/

    /* smaller than Desktop HD */
    @media (max-width: 1200px) {}

    /* smaller than desktop */
    @media (max-width: 1000px) {}

    /* smaller than tablet */
    @media (max-width: 750px) {}

    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 550px) {}

    /* smaller than mobile */
    @media (max-width: 400px) {}
</style>
<?php if(!defined('LOGIN')){echo '<h3 class="text-center my-5 py-5 ">Please Login First...</h3>';}?>
<div class="b-container" <?php if(!defined('LOGIN')){echo 'style="display:none;';}?>>
    <div class="container-fluid in-container slide-in-bottom">
        <div class="row">
            <div class="col-12">
                <h3><?php echo $moverName ?></h3>
                    <div id="mv_user_search_table">
                        <table class="table table-striped">
                            <thead class="bg-dark">
                                <th>Section Name</th>
                                <th>Link Provided</th>
                                <th>Rating Provided</th>
                            </thead>

                            <?php include 'admin_model/mover_approval_page_model.php'; ?>
                    </div>
                    <a href="admin_model/admin_operation.php?action=approve_mover&id=<?= $id ?>" >
                        <button class="btn btn-primary">Approve This Mover</button>
                    </a>
            </div>
        </div>
    </div>
</div>
<?php include '../home/footer.php'; ?>