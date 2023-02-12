<?php include 'connection.php' ?>
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
<div class="b-container">
    <div class="container in-container slide-in-bottom">
        <div class="row">
            <div class="col-12"  style="height: 200px;">
                <img src="../img/flags/al.png" alt="" id="flag" style="max-width: 200px;box-shadow:5px 5px 5px 5px #eee">
            </div>
            <br><br>
            <?php

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            } else {

                $sql = "SELECT * from state where country_id=1";
                $result = $con->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($res = mysqli_fetch_assoc($result)) {
            ?>
                        <button id="<?= $res['code']; ?>" onclick="load_flag(this.id)"><?php echo $res['name']; ?></button>
            <?php
                    }
            } }?>

        </div>
    </div>
</div>
<script>
    function load_flag(code){
        var flag = document.getElementById('flag');
        flag.src = "../img/flags/"+code+".png";
    }
</script>