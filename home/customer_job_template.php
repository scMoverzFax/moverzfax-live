<?php include_once 'myheader.php'; ?>

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
                <div class="col-md-2">
                    <div class="route-wrapper">
                        <div class="route bg-info shadow"><i class="fas fa-route"></i></div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top-bar px-3 shadow-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="date h5">Moving Date : <span><strong>2022-01-24</strong></span></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="date h5">Job Post Date : <span><strong>2022-01-20</strong></span></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="date h5">MOVING JOB INFORMATION</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="origin-address px-5 py-2 shadow-sm">
                                <table class="table-striped">
                                    <thead class="">
                                        <tr>
                                            <th colspan="3" style="text-align: center;line-height:20px">Address of Origin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>City</td>
                                            <td>:</td>
                                            <td>City</td>
                                        </tr>
                                        <tr>
                                            <td>State</td>
                                            <td>:</td>
                                            <td>State</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>:</td>
                                            <td>Country</td>
                                        </tr>
                                        <tr>
                                            <td>Pin code</td>
                                            <td>:</td>
                                            <td>pin code</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="destination-address  px-5 py-2 shadow-sm">
                                <table class="table-striped">
                                    <thead class="">
                                        <tr>
                                            <th colspan="3" style="text-align: center;line-height:20px">Address of Destination</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>City</td>
                                            <td>:</td>
                                            <td>City</td>
                                        </tr>
                                        <tr>
                                            <td>State</td>
                                            <td>:</td>
                                            <td>State</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>:</td>
                                            <td>Country</td>
                                        </tr>
                                        <tr>
                                            <td>Pin code</td>
                                            <td>:</td>
                                            <td>pin code</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="destination-address  px-5 py-2 shadow-sm">
                                <table class="table-striped">
                                    <thead class="">
                                        <tr>
                                            <th colspan="3" style="text-align: center;line-height:20px">Load Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Types Of Dwelling</td>
                                            <td>:</td>
                                            <td>Townhome</td>
                                        </tr>
                                        <tr>
                                            <td>Size Of Dwelling</td>
                                            <td>:</td>
                                            <td>One_bedroom</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bottom-bar px-3 shadow-sm">
                                <a href="job_details_template.php" class="btn custom-btn-2 bg-info shadow text-light"><span>Read Details</span></a>
                                <!-- <a href="#" class="btn custom-btn-2 bg-success shadow text-light"><span>Genarate Lead</span></a> -->
                                <a href="#" class="btn custom-btn-2 bg-danger shadow text-light"><span>Delete</span></a>
                            </div>
                        </div>
                        <!-- <a href="#" class="btn custom-btn-2 bg-primary shadow text-light"><span>Read Details</span></a>
                        <a href="#" class="btn custom-btn-2 bg-warning shadow text-light"><span>Genarate Lead</span></a>
                        <a href="#" class="btn custom-btn-2 bg-danger shadow text-light"><span>Delete</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----- End loop-->

</div>
<?php include 'footer.php'; ?>