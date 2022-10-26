<?php include 'myheader.php';
defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
?>
<title>Registration</title>
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

    .row .button-mf {
        font-size: 15px;
        color: #fff;
        background-color: #85CA63;
        border-radius: 5px 5px;
        width: 150px;
        border-color: none;
        transition: all .5s;
    }

    .row .button-mf:hover {
        background-color: #67bd3c;
        border-color: #55bd1a;
        color: #fff;
        border-radius: 10px;
        width: 200px;
        transition: all .5s;

    }

    .row .button-mf-cancel {
        font-size: 15px;
        color: #fff;
        border-radius: 5px 5px;
        width: 150px;
        background-color: #dc3545;
        border-color: #dc3545;
        transition: all .5s;
    }

    .row .button-mf-cancel:hover {
        color: #fff;
        border-radius: 10px;
        width: 200px;
        transition: all .5s;
        background-color: #c82333;
        border-color: #bd2130;

    }


    .bg-form hr {
        padding: 0;
    }

    textarea {
        height: 100px;
        font-family: cursive;
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

<!-- Start of Document ----------------------------------------------->

<div class="b-container">
    <div class="container in-container">
        <div class="bg-form form-group">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-5">Post a Moving Job</h2>
                    <hr>
                    <form name="myform" action="../model/job_post_model.php" method="post">
                        <input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
                        <input type="hidden" value="<?php echo $user_email; ?>" name="user_email">
                        <div class="row mb-4 mx-3">
                            <p class="">Please enter the origin address of the Move.</p>
                        </div>
                        <div class="row mb-4 mx-3">
                            <div class="col-md-6">
                                <label for="inputlg form-label">Origin Country<sup style="color: red">*</sup><br></label>
                                <select class="form-select" name="origin_country" id="country_1" onchange="get_state_1()" required>
                                    <!-- Country -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="sel1">Origin State<sup style="color: red">*</sup><br></label>
                                <select class="form-select" name="origin_state" id="state_1" onchange="get_city_1()" required>
                                    <!-- State -->
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 mx-3">
                            <div class="col-md-6">
                                <label for="sel1">Origin City<sup style="color: red">*</sup></label>
                                <select class="form-select" name="origin_city" id="city_1" required>
                                     <!-- City -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputdefault">Origin Zip Code<sup style="color: red">*</sup></label>
                                <input class="form-control" type="number" name="origin_zip_number" id="origin_zip_number" placeholder="Enter Zip Code" value="" required>
                            </div>
                        </div>
                        <div class="row mb-4 mx-3">
                            <div class="col-md-12">
                                <label for="inputdefault">Origin Address<sup style="color: red">*</sup></label>
                                <textarea class="form-control" id="origin_address" name="origin_address" placeholder="Enter Address" required></textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-4 mx-3">
                            <p>Please enter the address of destination.</p>
                        </div>
                        <div class="row mb-4 mx-3">
                            <div class="col-md-6">
                                <label for="inputlg">Destination Country<sup style="color: red">*</sup><br></label>
                                <select class="form-select" name="destination_country" id="country_2" onchange="get_state_2()" required>
                                    <!-- Country -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="sel2">Destination State<sup style="color: red">*</sup><br></label>
                                <select class="form-select" name="destination_state" id="state_2" onchange="get_city_2()" required>
                                    <!-- State -->
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 mx-3">
                            <div class="col-md-6">
                                <label for="sel1">Destination City<sup style="color: red">*</sup></label>
                                <select class="form-select" name="destination_city" id="city_2" required>
                                        <!-- City -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputdefault">Destination Zip Code<sup style="color: red">*</sup></label>
                                <input class="form-control" type="number" name="destination_zip_code" id="destination_zip_code" placeholder="Enter Zip Code" value="" required>
                            </div>
                        </div>
                        <div class="row mb-4 mx-3">
                            <div class="col-md-12">
                                <label for="inputdefault">Destination Address<sup style="color: red">*</sup></label>
                                <textarea class="form-control" type="text" id="destination_address" name="destination_address" placeholder="Enter Address" required></textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-4 mx-3">
                            <p>Please answer the following questions.</p>
                        </div>

                        <div class="row mb-4 mx-3">
                            <div class="col-md-6">
                                <label for="date_of_move">Date of Move<sup style="color: red">*</sup></label>
                                <input class="form-control" type="date" id="date_of_move" name="date_of_move" required>
                            </div>
                        </div>
                        <div class="row mb-4 mx-3">
                            <div class="col-md-6">
                                <label for="sel1">Type of Dwelling<sup style="color: red">*</sup></label>
                                <select class="form-select" name="type_dwelling" id="type_dwelling" required>
                                    <option value="Townhome">Townhome</option>
                                    <option value="Single_family">Single Family Home</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Condo">Condo</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="sel1">Size of Dwelling<sup style="color: red">*</sup></label>
                                <select class="form-select" name="size_dwelling" id="size_dwelling" required>
                                    <option value="One_bedroom">1 BedRoom</option>
                                    <option value="Two_bedroom">2 BedRoom</option>
                                    <option value="Three_bedroom">3 BedRoom</option>
                                    <option value="Four_bedroom">4+ BedRoom</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 mx-3">
                            <div class="col-md-12">
                                <label for="inputdefault">Additional details : (Like any large items like piano, how many stairs to condo or apartment, or no elevators available)<sup style="color: red">*</sup></label>
                                <textarea class="form-control" type="text" id="additional_detail" name="additional_detail" placeholder="Add Some Details" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-4 mx-3">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button value="submit" class="btn button-mf me-5" type="submit">Post Job</button>
                                <button type="reset" class="btn button-mf-cancel" onclick="reset_csc();reset_scs_2()">Reset</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/csc_sort_1.js"></script>
<script src="../js/csc_sort_2.js"></script>
<?php include_once 'footer.php'; ?>