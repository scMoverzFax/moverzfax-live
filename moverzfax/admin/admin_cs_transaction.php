<?php include_once 'admin_header.php'; ?>

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
<div class="b-container">
    <div class="container-fluid in-container slide-in-bottom">
        <div class="row">
            <div class="col-12">
                <h4>Customer Transaction</h4>
                <div class="d-flex">
                    <label for="" class="form-label col-md-2 mt-2 p-0 pl-3">Search Transction :</label>
                    <input type="text" class="form-control col-md-3 mb-3" id="cs_search_transaction" placeholder="Search ID or Email" onkeyup="customer_transaction()">
                </div>
                    <div id="cs_search_transaction_table">
                        <table class="table table-striped">
                            <thead class="bg-dark">
                                <th>Sr.no</th>
                                <th>Full Name</th>
                                <th>ID</th>
                                <th>Amount</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Currency Code</th>
                                <th>Country Code</th>
                                <th>Payer Id</th>
                                <th>Date & Time</th>
                            </thead>
                        
                            <tbody> 
                            <?php include 'admin_model/admin_cs_transaction_model.php'; ?>
                    </div>
                    
            </div>
        </div>
    </div>
</div>
<?php include '../home/footer.php'; ?>