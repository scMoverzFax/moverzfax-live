<?php include_once 'myheader.php'; 
defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
?>
<title>My Jobs</title>

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

    .bottom-bar-right {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 20px;
        width: 100%;
        padding: 5px 0;
    }
    .bottom-bar-left {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 20px;
        width: 100%;
        padding: 5px 0;
        min-height : 37px;
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

    th,
    td {
        line-height: 25px;
    }

    .origin-address {
        width: 100%;
        display: flex;
        flex-direction: column;

    }

    .destination-address {
        width: 100%;
        display: flex;
        flex-direction: column;
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
    .custom-btn-3 {
        width: fit-content;
        padding:0 5x;
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

    .custom-btn-3:hover {
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

<!-- <div class="b-container">
    
    <?php //include '../model/my_jobs_model.php'; ?>
    
   

</div> -->

<div class="container" style="margin-top:10px; max-width: 100%">
		<div class="row text-justify">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<h1 class="text-center" style="font-weight: 500">My Jobs Coming Soon</h1>
				<p>
                    This feature is not yet available on Moverzfax but we are working on implementing it soon. 
                    Thanks for your patience. In the meantime, just request the USDOT number from any movers to 
                    process the Moverzfax report and determine if the mover is ethical and honest.
				</p>
        </div>	
    </div>
</div>

<?php include 'footer.php'; ?>