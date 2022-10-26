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
<?php if (isset($_GET['invalid']) && !empty($_GET['invalid'])) {
    $msg = "USDOT number already registered!";
} else {
    $msg = "";
}
?>
<script type="text/javascript">
	function refreshCaptcha() {
		img = document.getElementById("capt");
		img.src = "captcha.php?rand_number=" + Math.random();
	}
</script>
<div class="b-container">
	<div class="container in-container slide-in-bottom">
		<div class="bg-form form-group">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center"><i class="fas fa-truck me-2"></i>Mover Registration</h1>
					<h5 class="text-danger text-center"><?= $msg ?></h5>
					<form action="../model/mover_model.php" method="post" enctype="multipart/form-data">
						<table class="table">
							<tbody>
								<tr>
									<td><label>USDOT#<sup style="color: red">*</sup></label></td>
									<td><input type="text" class="form-control" name="usdot" placeholder="Enter USDOT#" required></td>
								</tr>
								<tr>
									<td><label>Company Name<sup style="color: red">*</sup></label></td>
									<td><input type="text" class="form-control" name="company_name" placeholder="Enter Company Name" required></td>
								</tr>
								<tr>
									<td><label>Alternative Business Name</label></td>
									<td><input type="text" class="form-control" name="alternate_business" placeholder="Enter Alternative Business Name"></td>
								</tr>
								<tr>
									<td><label>Company's Website</label></td>
									<td><input type="text" class="form-control" name="company_website" placeholder="example.com"></td>
								</tr>
								<tr>
									<td><label>Company's Contact Number<sup style="color: red">*</sup></label></td>
									<td><input type="number" class="form-control" name="contact_number" placeholder="000-000-0000" required></td>
								</tr>
								<tr>
									<td><label>Company's Fax Number</label></td>
									<td><input type="text" class="form-control" name="fax_number" placeholder="Fax Number"></td>
								</tr>
								<tr>
									<td><label>Contact Person</label></td>
									<td><input type="text" class="form-control" name="contact_person" placeholder="Enter Full Name"></td>
								</tr>
								<tr>
									<td><label>MC#</label></td>
									<td><input type="text" class="form-control" name="mc" placeholder="Enter MC#"></td>
								</tr>
								<tr>
									<td><label>Country<sup style="color: red">*</sup></label></td>
									<td>
										<select class="form-select" id="country_1" name="country" onchange="get_state_1()" readonly required>
											<!-- Country -->
										</select>
									</td>
								</tr>
								<tr>
									<td><label>State<sup style="color: red">*</sup></label></td>
									<td>
										<select class="form-select" id="state_1" name="state" onchange="get_city_1()" required>
											<!-- States -->
										</select>
									</td>
								</tr>
								<tr>
									<td><label>City<sup style="color: red">*</sup></label></td>
									<td>
										<select class="form-select" id="city_1" name="city" required>
											<!-- City -->
										</select>
									</td>
								</tr>
								<tr>
									<td><label>Zip Code<sup style="color: red">*</sup></label></td>
									<td><input type="number" class="form-control" name="zip_code" placeholder="Enter Zip Code" required></td>
								</tr>
								<tr>
									<td>Business Coverage</td>
									<td><input type="checkbox" name="business_mover[]" value="local_mover" checked> Local Mover<br>
										<input type="checkbox" name="business_mover[]" value="long_mover" checked> Long Distance Mover<br>
										<input type="checkbox" name="business_mover[]" value="cross_mover" checked> Cross-Border to Cannada
									</td>
								</tr>
								<tr>
									<td><label>E-mail Address<sup style="color: red">*</sup></label></td>
									<td><input type="email" class="form-control" name="mover_email" placeholder="xxxxxx@example.com" required></td>
								</tr>
								<tr>
									<td><label>Password<sup style="color: red">*</sup></label></td>
									<td><input type="password" class="form-control" name="passwords" id="passwords" placeholder="********" required></td>
								</tr>
								<tr>
									<td colspan="2"><span id="message" style="color:red; font-size:15px;"></span></td>
								</tr>
								<tr>
									<td><label>Confirm Password<sup style="color: red">*</sup></label></td>
									<td><input type="password" class="form-control" oninput="myfun1()" id="confirm_passwords" name="confirm_password" placeholder="********" required></td>
								</tr>
								<tr>
									<td><label>Company Logo</label></td>
									<td><input type="file" class="form-control" name="company_logo" required></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="checkbox" name="" required> I agree to the <a href="t&c.php" target="_blank">terms of use</a></td>
								</tr>
								<tr>
									<td></td>
									<td><img name="HELPER-captcha_image" id="capt" src="captcha.php" border="0">
										<a href="javascript://" onclick="refreshCaptcha('captcha.php');">Refresh</a>
									</td>
								</tr>
								<tr>
									<td></td>
									<td><input type="text" name="" placeholder="Enter Captcha Code"></td>
								</tr>
							</tbody>
						</table>
						<div class="row ">
							<div class="col-md-12 d-flex justify-content-center">
								<button type="submit" class="btn button-mf me-5" name="" value="Signup">SIGN UP</button>
								<button type="reset" class="btn button-mf-cancel" onclick="reset_csc()">Reset</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<hr>
			<div class="row text-center">
				<div class="col-sm-12"><img style="width:100%" src="../img/CAPTURE2.png"></div>
			</div>
		</div>
	</div>
</div>
<script src="../js/csc_sort_1.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	function myfun1() {
		var a = document.getElementById("passwords").value;
		var b = document.getElementById("confirm_passwords").value;
		if (a.length < 5) {
			document.getElementById("message").innerHTML = "**Password Length Must Be greater than 5 digit**";
		} else if (a != b) {
			document.getElementById("message").innerHTML = "**Password And Confirm password are Not Mathing**";
			return false;
		} else {
			document.getElementById("message").innerHTML = "";
		}
	}
</script>

<?php include 'footer.php'; ?>