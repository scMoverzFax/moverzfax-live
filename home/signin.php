<?php include_once 'myheader.php' ?>
<title>Sign In</title>

<!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<style>
    * {
        box-sizing: border-box;
    }

    .b-container {
        position: relative;
        overflow: hidden;
        height: fit-content;
        width: fit-content;
        padding: 50px;

    }

    .in-container {
        background-color: white;
        box-shadow: 0 0 10px 2px #eee;
        /* border-radius: 10px 10px; */
        border: 1px solid #eee;
        width: fit-content;
        padding: 50px;
    }

    .bg-form {
        width: 400px;
    }

    .bg-form input {
        border-radius: 4px;
    }

    .bg-form .row {
        margin-left: 0;
        margin-right: 0;

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

    .bg-form hr {
        padding: 0;
        margin: 15px;
    }

    /* Desktop-mobile approach --------------------------------------------------------------*/

    /* smaller than Desktop HD */
    @media (max-width: 1200px) {}

    /* smaller than desktop */
    @media (max-width: 900px) {
    }

    /* smaller than tablet */
    @media (max-width: 750px) {}

    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 550px) {
    }
    /* smaller than mobile */
    @media (max-width: 400px) {}
</style>

<!-- Start of Document ----------------------------------------------->
<?php if (isset($_GET['invalid']) && !empty($_GET['invalid'])) {
    $msg = "Invalid Credentials. Please Try Again!";
} else {
    $msg = "";
}
?>
<div class="b-container">
    <div class="in-container slide-in-bottom">
        <div class="bg-form form-group">
            <h2 class="text-center mb-5">LOGIN</h2>
            <h5 class="text-danger text-center" id="msg"><?php echo $msg ;?></h5>
            <form method="post" action="../model/signin_model.php"> <!--this form submits to signin_model.php-->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <label class="fw-bold" for="user_type">SELECT USER TYPE</label>
                        <select class="form-select mb-4" name= "catagory" id="user_type" onchange="select_category()">
                            <option value = "customer"> Customer </option>
                            <option value = "mover"> Mover </option>
                            <option value = "admin"> Admin </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <label class="fw-bold" for="user_id" id="username_label">USERNAME</label>
                        <span id="username_input"><input class="form-control mb-4" id="user_id" type="text" placeholder="Enter USERNAME" name="email" onkeyup="validUser()"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <label class="fw-bold" for="password">PASSWORD</label>
                        <input class="form-control mb-4" type="password" placeholder="PASSWORD" id="password" name="passwords" onkeyup="validPass()">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn button-mf" type="submit" value="Submit" name="submitx" id="sub_btn">LOGIN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<br><br>
<script src="../js/controller/signinController.js"></script>
<?php include_once 'footer.php'; ?>