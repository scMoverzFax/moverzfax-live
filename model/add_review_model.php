<input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
<input type="hidden" value="<?php echo $user_email; ?>" name="user_email">
<input type="hidden" value="<?php echo $id; ?>" name="job_id">
<div class="row mb-3">
    <div class="col-md-12">
        <label for="company_name">USDOT Number</label>
        <input class="form-control" type="text" name="usdot" value="<?= $usdot; ?>">
    </div>
</div>
<?php include 'connection.php';
$sql = "SELECT company_name FROM mover_register WHERE usdot = '" . $usdot . "'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($res = mysqli_fetch_array($result)) { ?>
        <div class="row">
            <div class="col-md-12">
                <label for="company_name">Company Name</label>
                <input class="form-control" type="text" name="company_name" value="<?= $res['company_name']; ?>">
            </div>
        </div>
<?php }
} ?>
<div class="row mb-3">
    <div class="col-md-12">
        <label for="respsectOfCost">Did the company respected estimated Cost?</label>
        <select class="form-select" name="respsect_cost" id="">
            <option value="" disabled>Answer</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <label for="professionalism">Was the mover professional?
        </label>
        <select class="form-select" name="professional" id="">
            <option value="" disabled>Answer</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="professionalism">Did the mover arrived in time?</label>
        <select class="form-select" name="arrived_timme" id="">
            <option value="" disabled>Answer</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>
<style type="text/css">
    .rating-1 {
        position: relative;
        height: 40px;
        transform: translate(-50%, -50%) rotateY(180deg);
        display: flex;
        margin-left: 100px;
        margin-top: 20px;

    }

    .rating-1 input {
        display: none;
    }

    .rating-1 label {
        display: block;
        cursor: pointer;
        width: 50px;


    }

    .rating-1 label:before {
        content: '\f005';
        font-family: fontAwesome;
        position: absolute;
        display: inline;
        font-size: 20px;
        color: grey;
    }

    .rating-1 label:after {
        content: '\f005';
        font-family: fontAwesome;
        position: absolute;
        display: block;
        font-size: 20px;
        color: grey;
        top: 0;
        opacity: 1;
        transition: .5s;
        text-shadow: 0 2px 5px rgba(0, 0, 0, .5);
    }

    .rating-1 label:hover:after,
    .rating-1 label:hover~label:after,
    .rating-1 input:checked~label:after {
        opacity: 1;
        color: #85CA63;
    }
</style>

<div class="row  mb-3">
    <label class="col-md-12">Overall Impression of the service provided (select 1 to 5 stars as 5 being the best)</label>
    <div class="rating-1 col-md-12">
        <input type="radio" name="star" id="star5" value="5"><label for="star5"></label>
        <input type="radio" name="star" id="star4" value="4"><label for="star4"></label>
        <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
        <input type="radio" name="star" id="star2" value="2"><label for="star2"></label>
        <input type="radio" name="star" id="star1" value="1"><label for="star1"></label>
    </div>
</div>
<div class="row  mb-3">
    <div class="col-md-12">
        <label for="comment">Your moving review</label>
        <textarea name="comments" class="form-control" placeholder="Please share all details related to your move" id="exampleMessage"></textarea>
    </div>
</div>

<div class="row  mb-3">
    <div class="col-md-12 text-center">
        <input class="btn button-mf" type="submit" value="Share Review" name="submit" id="submit">
    </div>
</div>