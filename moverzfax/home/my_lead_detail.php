<?php include_once 'myheader.php'; 
defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
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
        padding: 30px;
        max-width: 1440px;

    }

    .in-container {
        position: relative;
        background-color: white;
        box-shadow: 0 0 10px 2px #eee;
        border: 1px solid #eee;
        padding: 20px 20px;
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

    /* .blockquote-custom {
        position: relative;
        font-size: 1.1rem;
    } */

    .top-bar {
        /* display: flex; */
        /* justify-content: space-between; */
        width: 100%;
    }

    .bottom-bar {
        display: flex;
        justify-content: flex-end;
        gap: 20px;
        width: 100%;
        padding: 5px 0;
    }

    .qurter {
        display: flex;
        flex-direction: column;
        margin: 15px;
        padding: 15px;
        border-radius: 5px;
        border-left:#67bd3c solid 3px;
        border-right:#67bd3c solid 3px;
        transition: all .5s;
    }
    .qurter:hover{
        transform: translateY(-5px);
        transition: all .5s;
        background-color: #eee;
    }
    td,
    th {
        height: 30px;
        word-break: break-all;
    }

    th {
        font-size: 20px;
    }

    .route-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .route {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto auto;
        height: 100px;
        width: 100px;
        border-radius: 50%;
        font-size: 40px;
        color: #fff;
    }

    .route:hover {
        transform: scale(1.1);
        transition: all .5s;
    }

    .custom-btn-1 {
        width: 150px;
        height: 40px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: -20px;
        right: 50px;
    }

    .custom-btn-2 {
        width: 100px;
        height: 27px;
        border-radius: 0 40%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all .5s;
        /* position: absolute;
        top: -20px;
        right: 50px; */
    }

    .custom-btn-2:hover {
        transform: scale(1.1);
        transition: all .5s;
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
    <!-- ---- Start loop-->
    <section class="mb-4">
        <div class="container in-container slide-in-bottom shadow rounded">
            <div class="row">
                <div class="col-md-12">
                    <div class="route-wrapper mb-5">
                        <div class="route bg-info shadow"><i class="fas fa-route"></i></div>
                    </div>
                </div>
            </div>
            <?php include '../model/my_lead_detail_model.php'; ?>
        </div>
    </section>
    <!-- ----- End loop-->

</div>
<?php include 'footer.php'; ?>