<?php include_once 'myheader.php'; ?>
<title>Support</title>
<?php include_once 'mycaptcah.php' ?>
<script type="text/javascript">
	function refreshCaptcha() {
		img = document.getElementById("capt");
		img.src = "captcha.php?rand_number=" + Math.random();
	}
</script>

<!-- Mobile Specific Metas
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

	textarea {
		height: 100px;
		font-family: cursive;
	}

	.bg-form p {
		padding: 0 5%;
	}

	.bg-form .row {
		padding: 0 5%;
	}

	.con-info {
		padding: 4% 4%;
		background-color: #e9ecef;
		word-wrap: break-word;
	}

	td,
	th {

		padding: 10px;
	}

	td {
		text-align: center;
	}

	table {
		width: 100%;
		border-collapse: collapse;
		letter-spacing: 1px;
		font-family: sans-serif;

	}

	.row .button-mf {
		font-size: 15px;
		color: white;
		background-color: #85CA63;
		border-radius: 5px 5px;
		border-color: none;
	}

	/* Larger than mobile */
	@media (min-width: 400px) {}

	/* Larger than phablet (also point when grid becomes active) */
	@media (min-width: 550px) {}

	/* Larger than tablet */
	@media (min-width: 750px) {}

	/* Larger than desktop */
	@media (min-width: 1000px) {}

	/* Larger than Desktop HD */
	@media (min-width: 1200px) {}
</style>

<!-- Start of Document ----------------------------------------------->

<div class="b-container">
	<div class="container in-container slide-in-bottom">
		<div class="bg-form">

			<h2 class="text-center mb-5">Message to Support Team</h2>
			<p style="color: #721c24; font-weight: 700">Important Notice:</p>
			<p>Dear Customer,</p>
			<p>When ordering the report, you might come across some URL addresses to review website that might have changed. When facing this possible glitch, it would be to your advantage to fill the support form below and let us know the issue so we can address the problem and correct it IMMEDIATELY. We appreciate your patience and your participation to making the Moverzfax.com report as ACCURATE as it can be. As our report algorithm is extremely complicated, it is important to always update our software and our development team is working diligently to always provide up-to-date reputation data about every single registered moving company (with USDOT license number) in North America. Thank you in advance for your participation during this crucial phase,</p>
			<p class="text-right">Sincerely yours,</p>
			<p class="text-right">Moverzfax Development Team</p>
			<hr>

			<div class="row d-flex justify-content-center">

				<div class="col-md-8  form-group">
					<form method="POST" action="process.php">
						<table>
							<tr>
								<td><label>Name<sup style="color: red">*</sup></label></td>
								<td><input class="form-control" type="text" placeholder="Full Name" name="name" style="border:1px solid #e9ecef;" required></td>
							</tr>
							<tr>
								<td><label>Email<sup style="color: red">*</sup></label></td>
								<td><input class="form-control" type="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@gmail.com" placeholder="xxxxx.example.com" required></td>
							</tr>
							<tr>
								<td><label>Subject<sup style="color: red">*</sup></label></td>
								<td><select class="form-select" required name="subject">
										<option value="">--- Select ---</option>
										<option value="Technical Support">Technical Support</option>
										<option value="Report Site Issue">Report Site Issue</option>
										<option value="Suggest New Features">Suggest New Features</option>
										<option value="Other">Other</option>
									</select></td>
							</tr>
							<tr>
								<td><label>Description<sup style="color: red">*</sup></label></td>
								<td><textarea class="form-control" style="resize: vertical;" type="text" name="description" placeholder="Describe your problem" required></textarea></td>
							</tr>
							<tr>
								<td colspan="2"><input type="checkbox" name="" required> I agree to the <a href="terms_of_use.pdf" target="_blank">terms of use</a></td>
							</tr>

							<tr>
								<td><label>Captcha<sup style="color: red">*</sup></label></td>
								<td>
									<style type="text/css">
										#answer {
											width: 40%;
											margin: 20px;
										}
									</style>
									<span id="answer">
										<?php
										echo $first_number . " " . $operator . " " . $second_number . " =";
										?>
									</span>
									<style type="text/css">
										#user_answer {
											width: 50%;
											height: 30px;
											border: 1px solid #ccc;
										}
									</style>
									<input type="number" name="answer" id="user_answer">
								</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" class="btn button-mf float-right" name="submit" id="register" value="Send Message"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>

			<hr>

		</div>

	</div>
</div>


<!-- End Document ––––––––––––––––––––––––––––––––––––––––––––––––––-->

<?php include 'footer.php'; ?>