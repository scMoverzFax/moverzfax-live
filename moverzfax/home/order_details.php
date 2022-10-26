<?php include_once 'myheader.php'; 
defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
?>
<title>Order Details</title>
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
        padding: 20px;
        max-width: 1440px;

    }

    .in-container {
        /* background-color: white; */
        box-shadow: 0 0 10px 2px #eee;
        /* border-radius: 10px 10px; */
        border: 1px solid #eee;
        /* width: fit-content; */
        /* padding: 50px; */
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
    .card{
        margin-bottom: 20px;
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
            <div class="col-12">
            <h2 class="text-center mb-5">Order Details</h2>
          <!-- <table class="table table-striped table-hover mb-5">
            <thead class="table-dark">
              <tr>
                <th scope="col">Sr. no</th>
                <th scope="col">Tr ID</th>
                <th scope="col">USDOT1</th>
                <th scope="col">USDOT2</th>
                <th scope="col">USDOT3</th>
                <th scope="col">USDOT4</th>
                <th scope="col">USDOT5</th>
                <th scope="col">Details</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table> -->
            <?php include "../model/order_details_model.php";?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>